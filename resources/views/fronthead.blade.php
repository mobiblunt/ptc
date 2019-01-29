<!DOCTYPE html>
<html class="no-js" lang="en">

	

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
		<title>@yield('title')</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<meta name="viewport" content="user-scalable=no, width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui" />

		<meta name="theme-color" content="#3F6EBF" />
		<meta name="msapplication-navbutton-color" content="#3F6EBF" />
		<meta name="apple-mobile-web-app-status-bar-style" content="#3F6EBF" />

		<!-- Favicons
		================================================== -->
		<link rel="shortcut icon" href="img/favicon.html">
		<link rel="apple-touch-icon" href="img/apple-touch-icon.html">
		<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.html">
		<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.html">

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
		<!-- start header -->
		<header id="top-bar" class="top-bar--light">
			<div id="top-bar__inner">
				<a id="top-bar__logo" class="site-logo" href="/">
					<img class="img-responsive"  src="img/logo.png" alt="Cryptvault" />
					<img class="img-responsive"  src="img/logo.png" alt="Cryptvault" />
				</a>

				<a id="top-bar__navigation-toggler" href="javascript:void(0);"><span></span></a>

				<div id="top-bar__navigation-wrap">
					<div>
						<nav id="top-bar__navigation" class="navigation" role="navigation">
							<ul>
								 @if (Sentinel::check() && Sentinel::inRole('administrator'))
                            <li>
                                    <a href="{{ route('users.index') }}" target="_blank"><span>Users</span></a>
                                </li>
                            <li>
                                    <a href="{{ route('roles.index') }}" target="_blank"><span>Roles</span></a>
                                </li>
                        @endif
                                <li>
                                    <a href="javascript:void(0);"><span>Beginners</span></a>

                                    <div class="submenu">
                                        <ul>
                                            
                                            <li><a href="{{ route('steps.home') }}">First Steps</a></li>
                                            <li><a href="{{ route('robots.home') }}">Plans</a></li>
                                            
                                        </ul>
                                    </div>
                                </li>

                                

                                <li class="{{ Route::is('affiliate.home') ? 'active' : '' }}">
                                    <a href="{{ route('affiliate.home') }}" target="_blank"><span>Affiliate</span></a>
                                </li>
                                
                                <li class="{{ Route::is('contact.home') ? 'active' : '' }}">
                                    <a href="{{ route('contact.home') }}"><span>Contact</span></a>
                                </li>
                            </ul>
                        </nav>

                        <br class="hide--lg">

                        <ul id="top-bar__subnavigation">
                            @if (Sentinel::check())
                            
                            <li><a class="custom-btn custom-btn--small custom-btn--style-3" href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li><a href="{{ route('auth.logout') }}">Log Out</a></li>

                        @else

                                <li><a class="custom-btn custom-btn--small custom-btn--style-3" href="{{ route('auth.login.form') }}">Login</a></li>
                            <li><a href="{{ route('auth.register.form') }}">Sign up</a></li>
                                @endif
                            

                            <li>
                                <div id="top-bar__choose-lang">
                                    <div class="list-wrap">
                                        <ul class="list">
                                            <li><img class="img-responsive  circled" src="img/ico/flag/2.png" width="25" height="25" alt="demo" ></li>
                                            <li><img class="img-responsive  circled" src="img/ico/flag/3.png" width="25" height="25" alt="demo" ></li>
                                            <li><img class="img-responsive  circled" src="img/ico/flag/4.png" width="25" height="25" alt="demo" ></li>
                                        </ul>
                                    </div>

                                    <i><img class="img--active img-responsive  circled" src="img/ico/flag/1.png" width="25" height="25" alt="demo" ></i>
                                </div>
                            </li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		@include('Centaur::notifications')
            @yield('content')


<footer id="footer" class="text--center text--lg-left">
            <div class="grid grid--container">
                <div class="row row--xs-middle">
                    <div class="col col--sm-10 col--md-8 col--lg-4">
                        <div class="__item">
                            <a class="site-logo" href="/">
                                <img class="img-responsive lazy" src="img/blank.gif" data-src="img/logo.png" alt="Cryptvault" />
                            </a>

                            <p class="__text">
                                
                            </p>
                        </div>
                    </div>

                    <div class="col col--sm-10 col--md-8 col--lg-3 col--xl-offset-1">
                        <div class="__item">
                            <h4 class="__title">Main menu</h4>

                            <nav id="footer__navigation" class="navigation">
                                <div class="row row--xs-middle">
                                    <div class="col col--xs-auto col--lg-6">
                                        <ul class="__menu">
                                            <li><a href="/">Home</a></li>
                                            <li><a href="{{ route('about.home') }}">About us</a></li>
                                            <li><a href="#">Contacts</a></li>
                                            <li><a href="#">News</a></li>
                                        </ul>
                                    </div>

                                    <div class="col col--xs-auto col--lg-6">
                                        <ul class="__menu">
                                            <li><a href="{{ route('terms.home') }}">Terms and conditions</a></li>
                                            <li><a href="{{ route('privacy.home') }}">Privacy policy</a></li>
                                            <li><a href="#">FAQ’s</a></li>
                                            <li><a href="{{ route('contact.home') }}">Support</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>

                    <div class="col col--sm-10 col--md-8 col--lg-5 col--xl-4">
                        <div class="__item">
                            <h4 class="__title">Subscribe</h4>

                            <form class="form--horizontal" action="#">
                                <div class="b-table">
                                    <div class="cell v-middle">
                                        <div class="input-wrp">
                                            <input class="textfield" type="text" value="" placeholder="E-mail" />
                                        </div>
                                    </div>

                                    <div class="cell v-middle">
                                        <button class="custom-btn custom-btn--medium custom-btn--style-2" type="submit" role="button">Subscribe</button>
                                    </div>
                                </div>
                            </form>

                            
                        </div>
                    </div>
                </div>

                <div class="row row--xs-middle row--lg-between">
                    <div class="col col--sm-10 col--md-8 col--lg-4">
                        <div class="__item">
                            <div class="social-btns">
                                <a class="fontello-twitter" href="#"></a>
                                <a class="fontello-facebook" href="#"></a>
                                <a class="fontello-linkedin-squared" href="#"></a>
                            </div>
                        </div>
                    </div>

                    <div class="col col--sm-10 col--md-8 col--lg-6  text--lg-right">
                        <div class="__item">
                            <span class="__copy">© <script>document.write(new Date().getFullYear())</script>, Cryptvault Trade LLC | <a href="{{ route('privacy.home') }}">Privacy Policy</a> | <a href="#">Sitemap</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- end footer -->

        <div id="btn-to-top-wrap">
            <a id="btn-to-top" class="circled" href="javascript:void(0);" data-visible-offset="800"></a>
        </div>

        <script src="js/jquery-2.2.4.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-2.2.4.min.js"><\/script>')</script>

        <script type="text/javascript" src="js/main.min.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>

        <!-- BEGIN JIVOSITE CODE {literal} -->
        <script type='text/javascript'>
        (function(){ var widget_id = 'Paw7lkpeN6';var d=document;var w=window;function l(){
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
        <!-- {/literal} END JIVOSITE CODE -->
    </body>


</html>