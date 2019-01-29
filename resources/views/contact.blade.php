@extends('fronthead')

@section('title', 'Contact')

@section('content')
<!-- start intro -->
    <div id="intro" class="jarallax" data-speed="0.5" style="background-image: url(img/intro_img/1.jpg);">
      <div class="grid grid--container">
        <div class="row row--xs-middle">
          <div class="col col--lg-5 text--center">
            <h1 class="__title">Get In Touch</h1>
            
          </div>
        </div>
      </div>
    </div>
    <!-- end intro -->
    <section class="section section--no-pt section--no-pb">
        <!-- this is demo key "AIzaSyBXQROV5YMCERGIIuwxrmaZbBl_Wm4Dy5U" -->
        <div id="g_map--0001" class="g_map" data-api-key="AIzaSyBXQROV5YMCERGIIuwxrmaZbBl_Wm4Dy5U" data-longitude="44.958309" data-latitude="34.109925" data-marker="img/marker.png"></div>

        <style type="text/css">
          #g_map--0001 { height: 380px }

          @media only screen and (min-width: 560px)
          {
            #g_map--0001 { height: 475px }
          }
        </style>
      </section>
      <!-- end section -->

      <!-- start section -->
      <section class="section section--light-bg">
        <div class="grid grid--container">
          <div class="row">
            <div class="col col--md-5 col--lg-4">
              <!-- start company address -->
              <address class="company-address">
                <div class="__inner">
                  <div class="row">
                    <!-- start item -->
                    <div class="col col--sm-6 col--md-12">
                      <div class="__item">
                        <i class="__ico">
                          <img class="img-responsive lazy" src="img/blank.gif" data-src="img/ico/ico_phone.png" width="24" height="44" alt="demo" />
                        </i>

                        <div>
                          <h4 class="__title h5">Phone Numbers</h4>

                          <span>
                            <a href="tel:+14815162342">+1 481 516 2342</a>
                            <br>
                            <a href="tel:+14815162342">+1 481 516 2342</a>
                          </span>
                        </div>
                      </div>
                    </div>
                    <!-- end item -->

                    <!-- start item -->
                    <div class="col col--sm-6 col--md-12">
                      <div class="__item">
                        <i class="__ico">
                          <img class="img-responsive lazy" src="img/blank.gif" data-src="img/ico/ico_marker.png" width="32" height="44" alt="demo" />
                        </i>

                        <div>
                          <h4 class="__title h5">Location</h4>

                          <span>
                            1010 Avenue of the Moon
                            <br>
                            New York, NY 10018 US.
                          </span>
                        </div>
                      </div>
                    </div>
                    <!-- end item -->

                    <!-- start item -->
                    <div class="col col--sm-6 col--md-12">
                      <div class="__item">
                        <i class="__ico">
                          <img class="img-responsive lazy" src="img/blank.gif" data-src="img/ico/ico_mail.png" width="44" height="34" alt="demo" />
                        </i>

                        <div>
                          <h4 class="__title h5">Email</h4>

                          <span>
                            <a href="mailto:hello@mycryptvault.com">hello@mycryptvault.com</a>
                          </span>
                        </div>
                      </div>
                    </div>
                    <!-- end item -->
                  </div>
                </div>
              </address>
              <!-- end company address -->
            </div>

            <div class="col hide--md col-MB-40"></div>

            <div class="col col--md-7 col--lg-8">
              <div class="posts-feedback">
                <form class="js-contact-form" action="#">
                  <div class="row">
                    <div class="col col--sm-6 col--md-12 col--lg-6">
                      <div class="input-wrp">
                        <input class="textfield" name="name" type="text" value="" placeholder="Name" />
                      </div>
                    </div>

                    <div class="col col--sm-6 col--md-12 col--lg-6">
                      <div class="input-wrp">
                        <input class="textfield" name="email" type="text" value="" placeholder="Email" />
                      </div>
                    </div>
                  </div>

                  <div class="input-wrp">
                    <textarea class="textfield" name="message" placeholder="Comments"></textarea>
                  </div>

                  <button class="custom-btn custom-btn--medium custom-btn--style-1" type="submit" role="button">Send a message</button>

                  <div class="form__note"></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end section -->


@stop