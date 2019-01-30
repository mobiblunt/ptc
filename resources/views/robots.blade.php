@extends('fronthead')

@section('title', 'Plans')

@section('content')
<!-- start intro -->
    <div id="intro" class="jarallax" data-speed="0.5" style="background-image: url(img/intro_img/1.jpg);">
      <div class="grid grid--container">
        <div class="row row--xs-middle">
          <div class="col col--lg-5 text--center">
            <h1 class="__title">Our Plans</h1>
            
          </div>
        </div>
      </div>
    </div>
    <!-- end intro -->
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

                                        <a class="custom-btn custom-btn--medium custom-btn--style-2 wide" href="{{ route('auth.register.form') }}">Get Started</a>
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


                                        <a class="custom-btn custom-btn--medium custom-btn--style-2 wide" href="{{ route('auth.register.form') }}">Get Started</a>
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


                                        <a class="custom-btn custom-btn--medium custom-btn--style-2 wide" href="{{ route('auth.register.form') }}">Get Started</a>
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


                                        <a class="custom-btn custom-btn--medium custom-btn--style-2 wide" href="{{ route('auth.register.form') }}">Get Started</a>
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
                                                
                                            </div>
                                        </div>
                                        <!-- end item -->

                                        <!-- start item -->
                                        <div class="col col--sm-6 col--lg-4 col--xl-3">
                                            <div class="__item">
                                                <p> <a href="mailto:admin@cryptvault.trade">admin@cryptvault.trade</a></p>
                                                
                                            </div>
                                        </div>
                                        <!-- end item -->

                                        <!-- start item -->
                                        <div class="col col--sm-6 col--lg-4 col--xl-3">
                                            <div class="__item">
                                                
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

@stop