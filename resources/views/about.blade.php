@extends('fronthead')

@section('title', 'About')

@section('content')
<!-- start intro -->
    <div id="intro" class="jarallax" data-speed="0.5" style="background-image: url(img/intro_img/1.jpg);">
      <div class="grid grid--container">
        <div class="row row--xs-middle">
          <div class="col col--lg-5 text--center">
            <h1 class="__title">About Us</h1>
            
          </div>
        </div>
      </div>
    </div>
    <!-- end intro -->

    <main role="main">
      <!-- start section -->
      <section class="section">
        <div class="grid grid--container">
          <div class="section-heading section-heading--center  col-MB-60">
            <h5 class="__subtitle">Our mission</h5>

            <h2 class="__title">Cryptvault is commited to making you money!</h2>
          </div>

          <div class="row row--xs-middle">
            <div class="col col--lg-10 col--xl-8">
              <p>
                Cryptvault is committed to empowering people to invest and trade, with confidence, in an innovative and reliable environment; supported by best-in-class personal service and uncompromising integrity.
              </p>

              <p>
                Within a few short years, Cryptvault has expanded enormously, with 200,000 registered customers globally executing more than two million trades a month.

The company’s total trading volumes surpass $30 billion per month. Cryptvault’s user-oriented perspective, combined with solid financial backing, is unique in the field of online trading. From its 24-hour multilingual support desks to its broad range of platforms and services, Evergrowth has created the optimal trading environment for every level of trader. Cryptvault’s wide scope includes a full spectrum of trading instruments including Forex, stocks, commodities and indices..
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- end section -->

      <!-- start section -->
      <section class="section section--light-blue-bg section--custom-13">
        <style type="text/css">
          .section--custom-13
          {
            background-image: url(img/sectoin_bg_2.png);
            background-position: 50% 50%;
            background-repeat: no-repeat;
          }
        </style>

        <div class="grid grid--container">
          <div class="row row--md-middle">
            <div class="col col--lg-10 col--xl-8">
              <!-- start feature -->
              <div class="facts facts--dark-color  text--center text--sm-left">
                <div class="__inner">
                  <div class="row row--md-between">
                    <div class="col col--sm-6 col--md-3">
                      <div class="__item">
                        <span class="num js-count" data-from="0" data-to="20" data-decimals="1" data-before="$" data-after="M"></span><br>
                        The amount of finance in the system
                      </div>
                    </div>

                    <div class="col col--sm-6 col--md-3">
                      <div class="__item">
                        <span class="num js-count" data-from="0" data-to="25" data-decimals="3"></span><br>
                        Active users
                      </div>
                    </div>

                    <div class="col col--sm-6 col--md-3">
                      <div class="__item">
                        <span class="num js-count" data-from="0" data-to="32"></span><br>
                        Supported countries
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end feature -->
            </div>
          </div>
        </div>
      </section>
      <!-- end section -->

      <!-- start section -->
      <section class="section">
        <div class="grid grid--container">
          <div class="row">
            <div class="col col--md-6">
              <div data-aos="zoom-in">
                <img class="img-responsive lazy" src="img/stock.png" data-src="img/stock.png" alt="demo" />
              </div>
            </div>

            <div class="col hide--md col-MB-40"></div>

            <div class="col col--md-6">
              <div data-aos="fade-left">
                <div class="section-heading  col-MB-30">
                  <h5 class="__subtitle">Benefits</h5>

                  <h2 class="__title">Cryptvault is a Trusted Platform for you</h2>
                </div>

                <p class="col-MB-35">
                  Cryptvault is a multi-national company with regional offices and sales centers in Paris, Dublin, Milan, Tokyo and Sydney. The company’s administrative headquarters are in California, USA.

Whether you are an experienced trader or a novice, Cryptvault’s adaptable trading platforms and services provide you with the right balance of simplicity and sophistication. 

We invite you to join the thousands of traders and affiliates who have chosen Cryptvault as their preferred trading portal.

                </p>

                <p>
                  <a class="custom-btn custom-btn--medium custom-btn--style-1" href="{{ route('auth.register.form') }}">Get Started</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end section -->

      <!-- start section -->
      
      <!-- end section -->

      

      
      
    </main>
    <!-- end main -->

@stop