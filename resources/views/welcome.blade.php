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
        <link rel="shortcut icon" href="{{ url('/') }}/img/favicon.ico">
        <link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
        
        <!-- <link rel="apple-touch-icon" href="img/apple-touch-icon.html">
        <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.html">
        <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.html">
 -->
        <!-- CSS
        ================================================== -->
        <link rel="stylesheet" href="{{ url('/') }}/css/style.min.css" type="text/css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

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
        <script type="text/javascript" src="{{ url('/') }}/js/device.min.js"></script>
    </head>

    <body>
        <!-- start header -->
        <header id="top-bar" class="top-bar--light">
            <div id="top-bar__inner">
                <a id="top-bar__logo" class="site-logo" href="/">
                    <img class="img-responsive"  src="{{ url('/') }}/img/logo.png" alt="Crypvault" />
                    <img class="img-responsive"  src="{{ url('/') }}/img/logo.png" alt="Crypvault" />
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
                                <li class="active">
                                    <a href="javascript:void(0);"><span>Beginners</span></a>

                                    <div class="submenu">
                                        <ul>
                                            
                                            <li><a href="{{ route('steps.home') }}">First Steps</a></li>
                                            <li><a href="{{ route('robots.home') }}">Plans</a></li>
                                            
                                        </ul>
                                    </div>
                                </li>

                                

                                <li>
                                    <a href="{{ route('affiliate.home') }}" target="_blank"><span>Affiliate</span></a>
                                </li>
                                
                                <li>
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
        <!-- end header -->

        <!-- start start screen -->
        <div id="start-screen" class="start-screen--light start-screen--style-1">
            <div class="start-screen__static-bg jarallax" data-speed="0.3" style="background-image: url(img/bg_2.jpg);">

                <div class="pattern"
                        style="background: -moz-linear-gradient(0deg, rgba(114,76,253,0.46) 0%, rgba(61,168,243,0.46) 100%);
                        background: -webkit-gradient(linear, left top, right top, color-stop(0%, rgba(114,76,253,0.46)), color-stop(100%, rgba(61,168,243,0.46)));
                        background: -webkit-linear-gradient(0deg, rgba(114,76,253,0.46) 0%, rgba(61,168,243,0.46) 100%);
                        background: -o-linear-gradient(0deg, rgba(114,76,253,0.46) 0%, rgba(61,168,243,0.46) 100%);
                        background: -ms-linear-gradient(0deg, rgba(114,76,253,0.46) 0%, rgba(61,168,243,0.46) 100%);
                        background: linear-gradient(90deg, rgba(114,76,253,0.46) 0%, rgba(61,168,243,0.46) 100%);"></div>

                <div class="start-screen__content  text--center">
                    <div class="start-screen__content__inner">
                        <div class="grid grid--container  col--xs-align-bottom">
                            <div class="row row--xs-middle">
                                <div class="col col--lg-10">
                                    <h1 class="__title">Trade with confidence and benefit from 24/7  cryptocurrency trading</h1>

                                    <p>Cryptvault is the world’s most popular platform to trade bitcoin, ethereum, and litecoin</p>

                                  <!--  <form class="wallet-form  form--horizontal" action="#">
                                        <div class="b-table">
                                            <div class="cell v-middle">
                                                <div class="input-wrp">
                                                    <input class="textfield" type="text" value="" placeholder="E-mail" />
                                                </div>
                                            </div>

                                            <div class="cell v-middle">
                                                <button class="custom-btn custom-btn--medium custom-btn--style-2" type="submit" role="button">Get Started</button>
                                            </div>
                                        </div>
                                    </form>

                                     <p>
                                        <a class="link" href="#"><small>Do you have a question?</small></a> &nbsp;&nbsp; <a class="link" href="#"><small>What is Bitcoin?</small></a>
                                    </p> -->
                                </div>
                            </div>
                        </div>

                        <div class="grid grid--container  col--xs-align-bottom">
                            <div class="facts">
                                <div class="__inner">
                                    <div class="row row--xs-middle">
                                        <div class="col col--sm-4 col--md-4">
                                            <div class="__item text--sm-left">
                                                <span class="num js-count" data-from="0" data-to="40" data-decimals="1" data-before="$" data-after="M"></span><br>
                                                The amount of finance in the system
                                            </div>
                                        </div>

                                        <div class="col col--sm-4 col--md-3">
                                            <div class="__item text--sm-left">
                                                <span class="num js-count" data-from="0" data-to="25" data-decimals="3"></span><br>
                                                Active users
                                            </div>
                                        </div>

                                        <div class="col col--sm-4 col--md-3">
                                            <div class="__item text--sm-left">
                                                <span class="num js-count" data-from="0" data-to="32"></span><br>
                                                Supported countries
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <span class="scroll-discover hide show--md">scroll down <b></b></span>

        </div>
        <!-- end start screen -->

        <!-- start main -->
        <main role="main">
            <!-- start section -->
            <section class="section section--no-pt">
                <div class="grid grid--container">
                    <div class="logos">
                        <div class="__inner">
                            <div class="row row--xs-center row--xs-around">
                                <div class="col col--xs-auto">
                                    <img class="lazy" src="img/blank.gif" data-src="img/logos_img/14.png" alt="demo" />
                                </div>

                                <div class="col col--xs-auto">
                                    <img class="lazy" src="img/blank.gif" data-src="img/logos_img/15.png" alt="demo" />
                                </div>

                                <div class="col col--xs-auto">
                                    <img class="lazy" src="img/blank.gif" data-src="img/logos_img/16.png" alt="demo" />
                                </div>

                                <div class="col col--xs-auto">
                                    <img class="lazy" src="img/blank.gif" data-src="img/logos_img/17.png" alt="demo" />
                                </div>

                                <div class="col col--xs-auto">
                                    <img class="lazy" src="img/blank.gif" data-src="img/logos_img/18.png" alt="demo" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end section -->

            <!-- start section -->
            <section class="section section--no-pt">
                <div class="grid">
                    <div class="row row--md-center">
                        <div class="col col--md-5 col--lg-6 col--no-gutters">
                            <img class="img-responsive" src="img/img_4.1.jpg" alt="demo" />
                        </div>

                        <div class="col col--md-7 col--lg-6">
                            <div class="content-grid" style="margin-right: auto;max-width: 570px;">
                                <div data-aos="fade-left" data-aos-delay="150">
                                    <div class="section-heading  col-MB-30">
                                        <h5 class="__subtitle">Our mission</h5>

                                        <h2 class="__title">Crypvault Awesome Service that Works for You!</h2>
                                    </div>

                                    <p class="col-MB-35">
                                        Cryptvault is committed to empowering people to invest and trade, with confidence, in an innovative and reliable environment; supported by best-in-class personal service and uncompromising integrity.
            </p>. 
                                    </p>

                                    <p>
                                        <a class="custom-btn custom-btn--medium custom-btn--style-1" href="{{ route('about.home') }}">Discover</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col hide--md col-MB-40"></div>
                    </div>

                    <div class="row row--md-center row--md-reverse">
                        <div class="col col--md-5 col--lg-6 col--no-gutters">
                            <img class="img-responsive" src="img/img_4.png" alt="demo" />
                        </div>

                        <div class="col hide--md col-MB-40"></div>

                        <div class="col col--md-7 col--lg-6">
                            <div class="content-grid" style="margin-left: auto;max-width: 570px;">
                                <div data-aos="fade-right" data-aos-delay="150">
                                    <div class="section-heading col-MB-30">
                                        <h2 class="__title">Crypvault Wallet</h2>
                                    </div>

                                    <p class="col-MB-35">
                                        Cryptvault provides secure wallet service with end to end encryption.
                                    </p>

                                    <p>
                                        <a class="custom-btn custom-btn--medium custom-btn--style-1" href="{{ route('auth.register.form') }}">Discover</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end section -->

            <!-- start section -->
            <section class="section section--dark-bg section--custom-01">
                <style type="text/css">
                    @media only screen and (min-width: 768px)
                    {
                        .section--custom-01 .img-wrap
                        {
                            position: absolute;
                            top: 0;
                            left: 15px;
                            right: 0;
                            bottom: 0;
                            margin-left: 42%;
                            overflow: hidden;
                        }
                    }

                    @media only screen and (min-width: 992px)
                    {
                        .section--custom-01 .__content { margin-bottom: 90px; }

                        .section--custom-01 .img-wrap { margin-left: 45%; }
                    }
                </style>

                <div class="grid grid--container">
                    <div class="row">
                        <div class="col col--md-5 col--lg-5">
                            <div data-aos="fade-up" data-aos-easing="ease-out-cubic">
                                <div class="__content">
                                    <div class="section-heading section-heading--white col-MB-30">
                                        <h5 class="__subtitle">Crypvault Strong size</h5>

                                        <h2 class="__title">People choose Crypvault</h2>
                                    </div>

                                    <p class="col-MB-35">
                                        We Want You to Succeed – Learn from the best with our wide range of educational tools, economic calendar, technical and fundamental analysis and important market updates you don’t want to miss.
                                    </p>

                                    <p class="hide--md">
                                        <img class="img-responsive" src="img/img_3.jpg" alt="demo" />
                                    </p>

                                    <p>
                                        <a class="custom-btn custom-btn--medium custom-btn--style-2" href="{{ route('auth.register.form') }}">Explore More</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="img-wrap jarallax  hide show--md" data-speed="0.3">
                    <img class="jarallax-img" src="img/img_3.jpg" alt="demo" />
                </div>
            </section>
            <!-- end section -->

            <!-- start section -->
            <section class="section section--no-pt section--no-pb section--custom-02">
                <style type="text/css">
                    @media only screen and (min-width: 992px)
                    {
                        .section--custom-02 .feature--style-1 { margin-top: -140px; }
                    }
                </style>

                <!-- start feature -->
                <div class="feature feature--style-1  text--center text--sm-left">
                    <div class="row row--no-gutters">
                        <!-- start item -->
                        <div class="col col--no-gutters col--sm-6 col--lg-4 col--sm-flex">
                            <div class="__item  __item--first" data-aos="slide-up" data-aos-offset="-250" data-aos-duration="800" data-aos-delay="0">
                                <div class="__content">
                                    <i class="__ico">
                                        <img class="img-responsive lazy" src="img/blank.gif" data-src="img/feature_img/1.png" width="34" height="60" alt="demo" />
                                    </i>

                                    <h3 class="__title">Instant Withdrawals</h3>

                                    <p> Make Instant withdrawals from your wallet.</p>

                                    <p><a class="__more" href="#"><i class="fontello-right-1"></i></a></p>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col col--no-gutters col--sm-6 col--lg-4 col--sm-flex">
                            <div class="__item  __item--second" data-aos="slide-up" data-aos-offset="-250" data-aos-duration="800" data-aos-delay="150">
                                <div class="__content">
                                    <i class="__ico">
                                        <img class="img-responsive lazy" src="img/blank.gif" data-src="img/feature_img/2.png" width="46" height="60" alt="demo" />
                                    </i>

                                    <h3 class="__title">Insurance Protection</h3>

                                    <p>Digital currency stored on our servers is covered by our insurance policy.</p>

                                    <p><a class="__more" href="#"><i class="fontello-right-1"></i></a></p>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col col--no-gutters col--sm-6 col--lg-4 col--sm-flex">
                            <div class="__item  __item--third" data-aos="slide-up" data-aos-offset="-250" data-aos-duration="800" data-aos-delay="300">
                                <div class="__content">
                                    <i class="__ico">
                                        <img class="img-responsive lazy" src="img/blank.gif" data-src="img/feature_img/3.png" width="46" height="60" alt="demo" />
                                    </i>

                                    <h3 class="__title">Secure Storage</h3>

                                    <p>We store the vast majority of the digital assets in secure offline storage.</p>

                                    <p><a class="__more" href="#"><i class="fontello-right-1"></i></a></p>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->
                    </div>
                </div>
                <!-- end feature -->
            </section>
            <!-- end section -->



             <!-- start section -->
            <section class="section">
                <div class="grid grid--container">
                    <div class="section-heading section-heading--center  col-MB-60" data-aos="fade">

                    <h2 class="__title">Our Plans</h2>

                        <p>Cryptvault provides access to the next generation
of trading tools. Our robots have been developed with the latest market and trading innovations: MetaTrader Auto 4 and MetaTrader Auto 5. These robots have been sub-divided into plans to suit our clients and their pockets.</p>

                        
                    </div>

                    <!-- start pricing table -->
                    <div class="pricing-table pricing-table--style-4">
                        <div class="__inner">
                            <div class="row">
                                <!-- start item -->
                                <div class="col col--sm-6 col--lg-3 col--sm-flex">
                                    <div class="__item __item--color-1" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-delay="150">
                                        <div>
                                            <h4 class="__title">Silver Premium</h4>

                                            <p class="__price">0.022<i class="fa fa-btc"></i></p>
                                        </div>

                                        <ul class="__desc-list">
                                            <li>
                                                <strong>Minimum 1 BTC</strong> <br>

                                                <span class="__note">100 MB</span>
                                            </li>

                                            <li>
                                                ROI <br>

                                                <strong>50%</strong>
                                            </li>

                                            <li>
                                                 Duration <br>
                                                <strong>21 Days</strong>
                                            </li>
<li>
                                                 Affiliate Bonus <br>
                                                <strong>5% </strong>
                                            </li>

                                            <li>
                                                <strong>Makes use of two trading techniques.</strong> 
                                            </li>

                                        </ul>

                                        <a class="custom-btn custom-btn--medium custom-btn--style-2 wide" href="#">Get Started</a>
                                    </div>
                                </div>
                                <!-- end item -->

                                <!-- start item -->
                                <div class="col col--sm-6 col--lg-3 col--sm-flex">
                                    <div class="__item __item--color-2" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-delay="300">
                                        <div>
                                            <h4 class="__title">Gold Premium</h4>

                                            <p class="__price">0.043<i class="fa fa-btc"></i></p>
                                        </div>

                                        <ul class="__desc-list">
                                            <li>
                                                <strong>Minimum 5 BTC</strong> <br>

                                                <span class="__note">150 MB</span>
                                            </li>

                                            <li>
                                                ROI <br>

                                                <strong>70%</strong>
                                            </li>

                                            <li>
                                                 Duration <br>
                                                <strong>30 Days</strong>
                                            </li>
<li>
                                                 Affiliate Bonus <br>
                                                <strong>7% </strong>
                                            </li>

                                            <li>
                                                <strong>Makes use of three trading techniques.</strong> 
                                            </li>

                                        </ul>


                                        <a class="custom-btn custom-btn--medium custom-btn--style-2 wide" href="#">Get Started</a>
                                    </div>
                                </div>
                                <!-- end item -->

                                <!-- start item -->
                                <div class="col col--sm-6 col--lg-3 col--sm-flex">
                                    <div class="__item __item--color-3 __item--active" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-delay="450">
                                        <span class="__label">Recommended</span>

                                        <div>
                                            <h4 class="__title">Ruby Premium</h4>

                                            <p class="__price">0.065<i class="fa fa-btc"></i></p>
                                        </div>

                                        <ul class="__desc-list">
                                            <li>
                                                <strong>Minimum 10 BTC</strong> <br>

                                                
                                            </li>

                                            <li>
                                                ROI <br>

                                                <strong>100%</strong>
                                            </li>

                                            <li>
                                                 Duration <br>
                                                <strong>30 Days</strong>
                                            </li>
<li>
                                                 Affiliate Bonus <br>
                                                <strong>10% </strong>
                                            </li>

                                            <li>
                                                <strong>Makes use of five trading techniques + our latest robot updates.</strong> 
                                            </li>

                                        </ul>


                                        <a class="custom-btn custom-btn--medium custom-btn--style-2 wide" href="#">Get Started</a>
                                    </div>
                                </div>
                                <!-- end item -->

                                <!-- start item -->
                                <div class="col col--sm-6 col--lg-3 col--sm-flex">
                                    <div class="__item __item--color-4" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-delay="600">
                                        <div>
                                            <h4 class="__title">Sapphire Premium</h4>

                                            <p class="__price">1.0<i class="fa fa-btc"></i></p>
                                        </div>

                                        <ul class="__desc-list">
                                            <li>
                                                <strong>Minimum 100 BTC</strong> <br>

                                                
                                            </li>

                                            <li>
                                                ROI <br>

                                                <strong>
                                                300%</strong>
                                            </li>

                                            <li>
                                                 Duration <br>
                                                <strong>100 Days</strong>
                                            </li>
<li>
                                                 Affiliate Bonus <br>
                                                <strong>15% </strong>
                                            </li>

                                            <li>
                                                <strong>Makes use of all techniques + our latest robot updates.</strong> 
                                            </li>

                                        </ul>


                                        <a class="custom-btn custom-btn--medium custom-btn--style-2 wide" href="#">Get Started</a>
                                    </div>
                                </div>
                                <!-- end item -->
                            </div>
                        </div>
                    </div>
                    <!-- end pricing table -->
                </div>
            </section>
            <!-- end section -->


            <!-- start section -->
            <section class="section">
                <div class="grid grid--container">
                    <div class="section-heading section-heading--center  col-MB-60">
                        <h5 class="__subtitle">Popular Cryptocarrency prices</h5>

                        <h2 class="__title">Cryptocurrency Prices</h2>
                    </div>

                    <script>
                        (function(b,i,t,C,O,I,N) {
                            window.addEventListener('load',function() {
                                if(b.getElementById(C))return;
                                I=b.createElement(i),N=b.getElementsByTagName(i)[0];
                                I.src=t;I.id=C;N.parentNode.insertBefore(I, N);
                            },false)
                        })(document,'script','js/widget.js','btcwdgt');
                    </script>

                    <div class="btcwdgt-chart" bw-theme="light" style="max-width: 100% !important"></div>
                </div>
            </section>
            <!-- end section -->

           

            <!-- start section -->
            <section class="section jarallax" data-speed="0.4">
                <img class="jarallax-img" src="img/bg_1.jpg" alt="demo" />

                <div class="pattern"
                    style="background: -moz-linear-gradient(0deg, rgba(114,76,253,0.66) 0%, rgba(61,168,243,0.66) 100%);
                    background: -webkit-gradient(linear, left top, right top, color-stop(0%, rgba(114,76,253,0.66)), color-stop(100%, rgba(61,168,243,0.66)));
                    background: -webkit-linear-gradient(0deg, rgba(114,76,253,0.66) 0%, rgba(61,168,243,0.66) 100%);
                    background: -o-linear-gradient(0deg, rgba(114,76,253,0.66) 0%, rgba(61,168,243,0.66) 100%);
                    background: -ms-linear-gradient(0deg, rgba(114,76,253,0.66) 0%, rgba(61,168,243,0.66) 100%);
                    background: linear-gradient(90deg, rgba(114,76,253,0.66) 0%, rgba(61,168,243,0.66) 100%);"></div>

                <div class="grid grid--container">
                    <div class="section-heading section-heading--white section-heading--center  col-MB-60">
                        <h5 class="__subtitle">Calculator</h5>

                        <h2 class="__title">Crypto Converter</h2>
                    </div>

                    <div class="row row--xs-middle">
                        <div class="col col--md-10 col--lg-8">
                            <!-- start calculator -->
                            <div class="calculator">
                                <form action="#">
                                    <div class="row">
                                        <div class="col col--sm-6  col-MB-20 col-sm-MB-0">
                                            <span>Give</span>

                                            <div class="input-wrp">
                                                <input class="textfield" type="text" value="0.00" placeholder="" />

                                                <select class="js-select select-exchange">
                                                    <option value="0">USD</option>
                                                    <option value="1">EUR</option>
                                                    <option value="2">RUB</option>
                                                </select>
                                            </div>

                                            <span class="__desc">USD - 557,427.56 USD</span>
                                        </div>

                                        <div class="col col--sm-6">
                                            <span>Get</span>

                                            <div class="input-wrp">
                                                <input class="textfield" type="text" value="0.00" placeholder="" />

                                                <select class="js-select select-exchange">
                                                    <option value="0">BTC</option>
                                                    <option value="1">ETH</option>
                                                    <option value="2">DSH</option>
                                                    <option value="3">LTC</option>
                                                </select>
                                            </div>

                                            <span class="__desc">Bitcoin - 9.00 BTC</span>
                                        </div>
                                    </div>

                                    <button class="custom-btn custom-btn--medium custom-btn--style-2 wide" type="submit" role="button">Calculate</button>
                                </form>
                            </div>
                            <!-- end calculator -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- end section -->

            

            

            <!-- start section -->
            <section class="section jarallax" data-speed="0.5">
                <img class="jarallax-img" src="img/bg_.jpg" alt="demo" />

                <div class="pattern" style="background-color: rgba(0, 0, 0, 0.53);"></div>

                <div class="grid grid--container">
                    <div class="section-heading section-heading--center section-heading--white  col-MB-45">
                        <h2 class="__title">We can Help You</h2>
                    </div>

                    <div class="row row--xs-middle">
                        <div class="col col--xs-10">
                            <!-- start company contacts -->
                            <div class="company-contacts  text--center">
                                <div class="__inner">
                                    <div class="row row--xs-between">
                                        <!-- start item -->
                                        <div class="col col--lg-4 col--xl-3">
                                            <div class="__item">
                                                <p>1010 Avenue of the Moon New York, NY 10018 US.</p>
                                            </div>
                                        </div>
                                        <!-- end item -->

                                        <!-- start item -->
                                        <div class="col col--sm-6 col--lg-4 col--xl-3">
                                            <div class="__item">
                                                <p>Call Us: <a href="tel:+70000000000">(066) 052 39876</a></p>
                                            </div>
                                        </div>
                                        <!-- end item -->

                                        <!-- start item -->
                                        <div class="col col--sm-6 col--lg-4 col--xl-3">
                                            <div class="__item">
                                                <p>Email: <a href="mailto:info@mycryptvault.com">info@mycryptvault.com</a></p>
                                            </div>
                                        </div>
                                        <!-- end item -->
                                    </div>
                                </div>
                            </div>
                            <!-- end company contacts -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- end section -->
        </main>
        <!-- end main -->

        <!-- start footer -->
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

        <script src="{{ url('/') }}/js/jquery-2.2.4.min.js"></script>
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