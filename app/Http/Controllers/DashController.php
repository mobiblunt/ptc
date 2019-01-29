<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use App\Plan;
use App\Deposit;
use App\Withdrawal;
use App\Account;
use App\User;
use App\Alert;
//use Sentinel;

class DashController extends Controller
{
    public function __construct()
    {
       
        $this->middleware('sentinel.auth');
        
    }




    public function index()

    {

        $user = Sentinel::getUser()->plan_id;

        $alert = Alert::all();

        //dd($alert);

        $plan1 = Plan::where('id', $user)->first();

        $acct = Account::where('user_id', Sentinel::getUser()->id)->first();

        //dd($acct);

        return view('centaur.dashboard' , compact('plan1','acct','alert'));
    }


    public function getTrans() {

        $dep = Deposit::where('user_id', Sentinel::getUser()->id)->get();

        $wit = Withdrawal::where('user_id', Sentinel::getUser()->id)->get();;


    	return view('home.transactions' , compact('dep','wit'));


    }

    public function getDep() {

        //$plans = Plan::all();

        $user = Sentinel::getUser()->plan_id;

        $plan1 = Plan::where('id', $user)->first();

        //dd($user);

    	return view('home.deposit', compact('plan1'));


    }


    public function getWith() {

    	return view('home.withdrawal');


    }


    public function getWallet() {


        $user = Sentinel::getUser()->plan_id;

        $plan1 = Plan::where('id', $user)->first();

        $acct = Account::where('user_id', Sentinel::getUser()->id)->first();

        return view('home.wallet' , compact('plan1','acct'));


    }


     public function getRef() {

        $users = User::where('ref', Sentinel::getUser()->u_id)->get();

        //dd($users);

        return view('home.ref', compact('users'));


    }
    


}
