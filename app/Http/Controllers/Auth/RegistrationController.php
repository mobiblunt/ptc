<?php

namespace App\Http\Controllers\Auth;

use Mail;
use Session;
use Sentinel;
use Activation;
use App\Http\Requests;
use Centaur\AuthManager;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Centaur\Mail\CentaurWelcomeEmail;
use App\User;
use App\Plan;
use App\Account;

use Carbon\Carbon;

class RegistrationController extends Controller
{
    /** @var Centaur\AuthManager */
    protected $authManager;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */ 
    public function __construct(AuthManager $authManager)
    {
        $this->middleware('sentinel.guest');
        $this->authManager = $authManager;
    }

    /**
     * Show the registration form
     * @return View
     */
    public function getRegister()
    {
        $plans = Plan::all();
        return view('Centaur::auth.register', compact('plans'));
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return Response|Redirect
     */
    protected function postRegister(Request $request)
    {
        // Validate the form data
        $result = $this->validate($request, [
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'first_name' => 'required',
            'last_name' => 'required',
            'mobile' => 'required',
            'country' => 'required',
            'plan_id' => 'required',
            'ref' => 'required'
        ]);

        $cred = [
            'ref' => $request->get('ref')
        ];

        $use = User::where('u_id', $request->get('ref'))->first();

        //dd($use);

        if (!$use) {
            if ($request->expectsJson()) {
                return response()->json("Referree is Invalid..", 422);
            }
            session()->flash('error', 'Referree is Invalid.');
            return redirect()->back()->withInput();
        }

        
        $rand = uniqid();
        


        // Assemble registration credentials
        $credentials = [
            'email' => trim($request->get('email')),
            'password' => $request->get('password'),
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'address' => $request->get('address'),
            'mobile' => $request->get('mobile'),
            'country' => $request->get('country'),
            'ref' => $request->get('ref'),
            'u_id' => $rand,
        ];

        $activate = true;
        //dd();

        // Attempt the registration
        $result = $this->authManager->register($credentials, $activate);

        if ($result->isFailure()) {
            return $result->dispatch();


        }

        $currentdate = Carbon::now();

        if ($request->get('plan_id') == "1") {


           $duration = $currentdate->addDays(21)->toDateString();
           
        }
        elseif ($request->get('plan_id') == "4" || $request->get('plan_id') == "5") {
            $duration = $currentdate->addDays(30)->toDateString();
        }
        else {
            $duration = $currentdate->addDays(100)->toDateString();
        }


        //dd($duration);
        

        $account = Account::create([
            'user_id' => $result->user->id,
            'plan_id' => $request->get('plan_id'),
            'balance' => 0,
            'owing' => 0,
            'earnings' => 0,
            'dollars' => 0,
            'end_date' => $duration
            ]);

        

        // Send the activation email
        //$code = $result->activation->getCode();
        $name = $result->user->first_name;
        $us_id = $result->user->u_id;
        $email = $result->user->email;

        //dd($name);
        //Mail::to($email)->queue(new CentaurWelcomeEmail($email, $name, $us_id,  'Welcome To Cryptvault!'));


        Mail::queue(
                'centaur.email.welcome',
                [
                    'name' => $name,
                    'us_id' => $us_id,
                    'email' => $email

            ],
                function ($message) use ($email) {
                    $message->to($email)
                        ->subject('Welcome To Cryptvault!');
                }
            );

        // Ask the user to check their email for the activation link
        $result->setMessage('Registration complete.  Please login to your dashboard.');



        // There is no need to send the payload data to the end user
        $result->clearPayload();

        //session()->flash('success', 'Registration complete.  Please login to your dashboard.');
        // Return the appropriate response
        return $result->dispatch(route('auth.login.form'));
    }

    /**
     * Activate a user if they have provided the correct code
     * @param  string $code
     * @return Response|Redirect
     */
    public function getActivate(Request $request, $code)
    {
        // Attempt the registration
        $result = $this->authManager->activate($code);

        if ($result->isFailure()) {
            // Normally an exception would trigger a redirect()->back() However,
            // because they get here via direct link, back() will take them
            // to "/";  I would prefer they be sent to the login page.
            $result->setRedirectUrl(route('auth.login.form'));
            return $result->dispatch();
        }

        // Ask the user to check their email for the activation link
        $result->setMessage('Registration complete.  You may now log in.');

        // There is no need to send the payload data to the end user
        $result->clearPayload();

        // Return the appropriate response
        return $result->dispatch(route('dashboard'));
    }

    /**
     * Show the Resend Activation form
     * @return View
     */
    public function getResend()
    {
        return view('Centaur::auth.resend');
    }

    /**
     * Handle a resend activation request
     * @return Response|Redirect
     */
    public function postResend(Request $request)
    {
        // Validate the form data
        $result = $this->validate($request, [
            'email' => 'required|email|max:255'
        ]);

        // Fetch the user in question
        $user = Sentinel::findUserByCredentials(['email' => $request->get('email')]);

        // Only send them an email if they have a valid, inactive account
        if (!Activation::completed($user)) {
            // Generate a new code
            $activation = Activation::create($user);

            // Send the email
            $code = $activation->getCode();
            $email = $user->email;
            Mail::to($email)->queue(new CentaurWelcomeEmail($email, $code, 'Account Activation Instructions'));
        }

        $message = 'New instructions will be sent to that email address if it is associated with a inactive account.';

        if ($request->expectsJson()) {
            return response()->json(['message' => $message], 200);
        }

        Session::flash('success', $message);
        return redirect('/dashboard');
    }
}
