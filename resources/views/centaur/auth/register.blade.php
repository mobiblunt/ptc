<!DOCTYPE html>
<html class="no-js" lang="en">

    

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
        <title>Cryptvault</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <meta name="viewport" content="user-scalable=no, width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui" />

        <meta name="theme-color" content="#3F6EBF" />
        <meta name="msapplication-navbutton-color" content="#3F6EBF" />
        <meta name="apple-mobile-web-app-status-bar-style" content="#3F6EBF" />

        <!-- Favicons
        ================================================== -->
        <link rel="shortcut icon" href="img/favicon.ico">
        <link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="img/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="img/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <!-- CSS
        ================================================== -->
        <link rel="stylesheet" href="css/style.min.css" type="text/css">

        <!-- Load google font
        ================================================== -->
        <script type="text/javascript">
            WebFontConfig = {
                google: { families: [ 'Open+Sans:300,400,500','Lato:900', 'Poppins:400', 'Catamaran:300,400,500,600,700'] }
            };
            (function() {
                var wf = document.createElement('script');
                wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + 
                '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
                wf.type = 'text/javascript';
                wf.async = 'true';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(wf, s);
            })();
        </script>

        <!-- Load other scripts
        ================================================== -->
        <script type="text/javascript">
            var _html = document.documentElement,
                isTouch = (('ontouchstart' in _html) || (navigator.msMaxTouchPoints > 0) || (navigator.maxTouchPoints));

            _html.className = _html.className.replace("no-js","js");

            isTouch ? _html.classList.add("touch") : _html.classList.add("no-touch");
        </script>
        <script type="text/javascript" src="js/device.min.js"></script>
    </head>

    <body>
        <!-- start main -->
        <main role="main">
            <!-- start section -->
            <section class="section section--no-pt section--no-pb section--light-bg">
                @include('Centaur::notifications')
                <div class="grid grid--container">
                    <div class="authorization authorization--registration">
                        <!-- this is demo, remove div class row and div's class col -->
                        <div class="row">
                            <div class="col col--md-auto">
                                <div class="text--center">
                                    <a class="site-logo" href="/">
                                        <img class="img-responsive" src="img/logo.png" alt="Cryptvault">
                                    </a>
                                </div>

                                <form class="authorization__form" accept-charset="UTF-8" role="form" method="post" action="{{ route('auth.register.attempt') }}">
                                    <h3 class="__title">Sign Up</h3>

                                    

                                    <div class="input-wrp {{ ($errors->has('email')) ? 'has-error' : '' }}">
                                        <input class="textfield" name="email" type="text" value="{{ old('email') }}" placeholder="Email" required />
                                        {!! ($errors->has('email') ? $errors->first('email', '<p class="text-danger">:message</p>') : '') !!}
                                    </div>

                                    <div class="input-wrp {{ ($errors->has('password')) ? 'has-error' : '' }}">
                                        <i class="textfield-ico fontello-eye"></i>
                                        <input class="textfield" name="password" type="password" value="" placeholder="Password" required />
                                        {!! ($errors->has('password') ? $errors->first('password', '<p class="text-danger">:message</p>') : '') !!}
                                    </div>

                                    <div class="input-wrp {{ ($errors->has('password_confirmation')) ? 'has-error' : '' }}">
                                        <i class="textfield-ico fontello-eye"></i>
                                        <input class="textfield" name="password_confirmation" type="password" placeholder="Confirm Password" required/>

                                        {!! ($errors->has('password_confirmation') ? $errors->first('password_confirmation', '<p class="text-danger">:message</p>') : '') !!}
                                    </div>

                                    <div class="input-wrp {{ ($errors->has('first_name')) ? 'has-error' : '' }}">
                                        <input class="textfield" name="first_name" type="text" value="" placeholder="First Name" required />
                                        {!! ($errors->has('first_name') ? $errors->first('first_name', '<p class="text-danger">:message</p>') : '') !!}
                                    </div>

                                    <div class="input-wrp {{ ($errors->has('last_name')) ? 'has-error' : '' }}">
                                        <input class="textfield" name="last_name" type="text" value="" placeholder="Last Name" required/>
                                        {!! ($errors->has('last_name') ? $errors->first('last_name', '<p class="text-danger">:message</p>') : '') !!}
                                    </div>

                                    <div class="input-wrp {{ ($errors->has('mobile')) ? 'has-error' : '' }}">
                                        <input class="textfield" name="mobile" type="text" value="" placeholder="Mobile" required />
                                        {!! ($errors->has('mobile') ? $errors->first('mobile', '<p class="text-danger">:message</p>') : '') !!}
                                    </div>

                                    <div class="input-wrp {{ ($errors->has('country')) ? 'has-error' : '' }}">
                                        <input class="textfield" type="text" name="country" value="" placeholder="Country" required />
                                        {!! ($errors->has('country') ? $errors->first('country', '<p class="text-danger">:message</p>') : '') !!}
                                    </div>

                                    <div class="input-wrp {{ ($errors->has('plan_id')) ? 'has-error' : '' }}">
                                        <i class="textfield-ico down-dir"></i>
                                        <select class="textfield" name="plan_id" required>
                                            <option value="">Select Plan</option>
                                             @foreach ($plans as $plan)
                                            <option value="{{ $plan->id }}">{{ $plan->name }}</option>
                                             @endforeach
                                        </select>
                                    </div>

                                    <div class="input-wrp">
                                        <select class="textfield" name="platform" disabled>
                                            
                                            <option>MetaTrader Auto 4</option>
                                             
                                        </select>
                                    </div>

                                    <div class="input-wrp {{ ($errors->has('ref')) ? 'has-error' : '' }}">
                                        <input class="textfield" type="text" placeholder="Referree ID" name="ref" required/>
                                        {!! ($errors->has('ref') ? $errors->first('ref', '<p class="text-danger">:message</p>') : '') !!}
                                    </div>
                                    <input name="_token" value="{{ csrf_token() }}" type="hidden">
                                    <p>
                                        <label class="checkbox">
                                            <input name="p1" type="checkbox" value="ok" required />
                                            <i class="fontello-check"></i><span>I agree with <a href="{{ route('terms.home') }}">Terms of Services</a></span>
                                        </label>

                                        <button class="custom-btn custom-btn--medium custom-btn--style-2 wide" type="submit" role="button">Submit</button>
                                    </p>

                                    <p class="text--center"><a href="{{ route('auth.login.form') }}">Sign In</a> if you already have an account</p>
                                </form>
                            </div>

                            
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end section -->
        </main>
        <!-- end main -->

        <div id="btn-to-top-wrap">
            <a id="btn-to-top" class="circled" href="javascript:void(0);" data-visible-offset="800"></a>
        </div>

        <script src="../../../ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-2.2.4.min.js"><\/script>')</script>

        <script type="text/javascript" src="js/main.min.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='js/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>

        <!-- BEGIN JIVOSITE CODE {literal} -->
        <script type='text/javascript'>
        (function(){ var widget_id = 'Paw7lkpeN6';var d=document;var w=window;function l(){
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
        <!-- {/literal} END JIVOSITE CODE -->
    </body>

<!-- Mirrored from demo.artureanec.com/html/crypterium/sign_up.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Jan 2019 18:01:39 GMT -->
</html>