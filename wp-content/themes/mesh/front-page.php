<?php get_header(); ?>

<main id="content">

  <section class="hero">
    <div class="container">
  		<div class="row">
  			<div class="four columns offset-by-two">

          <div class="hero-callout animated fadeInLeft">
            <div class="hero-logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo-color-1.png" />
            </div>
            <div class="hero-text">
              <h2>A new way to connect with your ride</h2>
              <p>
                With our easy-to-use app, choose your own vehicle, track its route to you, and get to where you need to be.
              </p>
            </div>
            <div class="hero-input">
              <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 3, 'title' => false, 'description' => false ) ); ?>
            </div>
            <div class="apps">
              <div class="apple">
                <a href="https://itunes.apple.com/us/app/c-h-taxi/id974603810?mt=8" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/applestore.png" /></a>
              </div>
              <div class="google">
                <a href="https://play.google.com/store/apps/details?id=itcurves.mars.chtaxi" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/googleplay.png" /></a>
              </div>
            </div>
          </div>

        </div>
        <div class="six columns">
          <div class="phones animated bounceInUp">
            <img src="<?php echo get_template_directory_uri(); ?>/img/phones.png" />
          </div>

          <div class="bubble animated">
            <p>
              <span>Hi!</span> Enter your cell number here and we'll text you a free downloadable link to start using our app on iPhone or Android!
            </p>
          </div>
        </div>
  		</div>
  	</div>
  </section>

  <section class="why" id="why">
    <div class="cover" style="background-color: rgba(110, 201, 190, 0.8);">

      <div class="container">
        <div class="row">
          <div class="twelve columns">
            <h1 class="center">Why Link</h1>
          </div>
        </div>

        <div class="row">

          <div class="squiggle animated slideInUp">
            <img src="<?php echo get_template_directory_uri(''); ?>/img/squiggle.png" />
          </div>

          <div class="four columns offset-by-one left">
            <div class="content-block block-1 animated fadeInRight">
              <h2>Travel safely and comfortably</h2>
              <p>
                Your safety is our priority. All service providers are certified by their proper authorities for standards and regulations, and the drivers are vetted before getting behind the wheel to ensure that you have a safe, comfortable ride.
              </p>
            </div>

            <div class="content-block animated fadeInLeft mobile">
              <h2>No busy signals, no hold time, no hassle</h2>
              <p>
                Connect directly through our app without having to make a call. Just log on, book your trip, and your reservation is complete.
              </p>
            </div>


            <div class="content-block block-3 animated fadeInRight">
              <h2>Choose your own ride</h2>
              <p>
                Our app lets you view all service providers in your area, their rates, and an estimated wait time once a driver accepts your trip. Select the ride that best fits your needs, hit "Hail", and the car will make its way to you.
              </p>
            </div>

            <div class="content-block animated fadeInLeft mobile">
              <h2>Track your car on the map</h2>
              <p>
                After making your selection, watch your car make its way to you in real time. Our app will keep you updated on your car's progress, and tell you the make and model so you'll know what to look for when it arrives.
              </p>
            </div>

            <div class="content-block block-5 animated fadeInRight">
              <h2>Know your payment options</h2>
              <p>
                Payment options vary between service providers, and our app will let you know which are available to you before you confirm your reservation. Options can include cash, credit card payment through the Link app, or an in-car credit card processor.
              </p>
            </div>
          </div>



          <div class="four columns offset-by-three right">
            <div class="content-block block-2 animated fadeInLeft">
              <h2>No busy signals, no hold time, no hassle</h2>
              <p>
                Connect directly through our app without having to make a call. Just log on, book your trip, and your reservation is complete.
              </p>
            </div>
            <div class="content-block block-4 animated fadeInLeft">
              <h2>Track your car on the map</h2>
              <p>
                After making your selection, watch your car make its way to you in real time. Our app will keep you updated on your car's progress, and tell you the make and model so you'll know what to look for when it arrives.
              </p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section class="how" id="how">

    <div class="container">
      <div class="row">
        <div class="twelve columns">
          <h1 class="center">How it works</h1>
        </div>
      </div>

      <div class="row">

        <div class="arrow">
          <img src="<?php echo get_template_directory_uri(''); ?>/img/arrow.png" />
          <div class="point point-1">1</div>
          <div class="point point-2">2</div>
          <div class="point point-3">3</div>
          <div class="point point-4">4</div>
        </div>

        <div class="four columns offset-by-one left">
          <div class="content-block block-6 animated fadeInRight">
            <img src="<?php echo get_template_directory_uri(''); ?>/img/link.png" />
            <h2>Download the app</h2>
            <p>
              The Link app is free to download and easy to use. Download the app to your smartphone to get started.
            </p>
          </div>

          <div class="content-block animated fadeInLeft mobile">
            <img src="<?php echo get_template_directory_uri(''); ?>/img/destination.png" />
            <h2>Find your ride</h2>
            <p>
              Once the app is downloaded to your phone, select "current location" or enter a pick up address. Then select your destination address and Link will show you the service providers nearby that can get you where you're going.
            </p>
          </div>

          <div class="content-block block-8 animated fadeInRight">
            <img src="<?php echo get_template_directory_uri(''); ?>/img/hail.png" />
            <h2>"Hail" and track your ride</h2>
            <p>
              Link will show each car near you and try to match you to the closest vehicle, or you have the option to view the vehicle type and driver information to choose your own ride. Just hit the green "hail" button to connect directly to the driver. Once a driver accepts your trip request, you will get an estimated wait time and you can watch the car make its way to you on the app.
            </p>
          </div>

          <div class="content-block animated fadeInLeft mobile">
            <img src="<?php echo get_template_directory_uri(''); ?>/img/car.png" />
            <h2>Hop in!</h2>
            <p>
              After you've hailed your car, Link will tell you the exact make and model so you know what to look for. When you car arrives, simply hop in and relax -- you're on your way!
            </p>
          </div>
        </div>
        <div class="four columns offset-by-three right">
          <div class="content-block block-7 animated fadeInLeft">
            <img src="<?php echo get_template_directory_uri(''); ?>/img/destination.png" />
            <h2>Find your ride</h2>
            <p>
              Once the app is downloaded to your phone, select "current location" or enter a pick up address. Then select your destination address and Link will show you the service providers nearby that can get you where you're going.
            </p>
          </div>
          <div class="content-block block-9 animated fadeInLeft">
            <img src="<?php echo get_template_directory_uri(''); ?>/img/car.png" />
            <h2>Hop in!</h2>
            <p>
              After you've hailed your car, Link will tell you the exact make and model so you know what to look for. When you car arrives, simply hop in and relax -- you're on your way!
            </p>
          </div>
        </div>
      </div>
    </div>

  </section>

  <section class="where" id="where">
    <div class="cover-where" style="background-color: rgba(249, 191, 25, 0.6);">

      <div class="container">
        <div class="row">
          <div class="twelve columns">
            <h1 class="center">Link up in your city</h1>
          </div>
        </div>

        <div class="row">

          <div class="zigzag animated slideInUp">
            <img src="<?php echo get_template_directory_uri(''); ?>/img/zig.png" />
          </div>

          <div class="three columns offset-by-two">
            <div class="cities animated fadeInRight">
              <ul>
                <li>Charleston, WV</li>
                <li>Montgomery County, MD</li>
                <li>Washington, DC</li>
                <li>Denver, CO</li>
                <li>Frederick, MD</li>
                <li>Indianapolis, IN</li>
                <li>Cromwell, CT</li>
                <li>Harrisburg, PA</li>
              </ul>
            </div>
          </div>
          <div class="three columns offset-by-three">
            <div class="cities animated fadeInLeft">
              <ul>
                <li>Plainville, CT</li>
                <li>Ventura, CA</li>
                <li>Bloomington, IN</li>
                <li>Memphis, TN</li>
                <li>Colorado Springs, CO</li>
                <li>Prince William County, VA</li>
                <li>Mobile, AL</li>
              </ul>
            </div>
          </div>

          <div class="ball-link animated"></div>

        </div>
      </div>

    </div>
  </section>

  <section class="contact" id="contact">

    <div class="container">
      <div class="row">
        <div class="twelve columns">
          <h1 class="center">Contact Link</h1>
        </div>
      </div>

      <div class="row">
        <div class="eight columns offset-by-two">
          <div class="contact-container">
            <p>
              <strong>Questions? Comments? We'd love to hear from you!</strong> Send us an email using the form below and we'll respond as soon as we can. This email form cannot be used to reserve a car; if you need a ride, please download the app and make your reservation.
            </p>
            <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2, 'title' => false, 'description' => false ) ); ?>
          </div>
        </div>
      </div>
    </div>

  </section>

  <section class="become" id="become">

    <div class="banner">
      <div class="banner-partner">
        <div class="banner-title">Become a partner</div>
      </div>
      <div class="banner-driver">
        <div class="banner-title">Become a driver</div>
      </div>
    </div>

    <div class="become-section">
      <div class="container">
        <div class="row">
          <div class="text-driver" id="driver">
            <div class="four columns offset-by-two">
              <p class="interested">
                Interested in becoming a driver? Fill out the form below to apply!
              </p>
            </div>
            <div class="four columns">
              <p>
                Interested in becoming a driver? Fill out the form below to learn more! Link can match you with a service provider, who can help you obtain a car and insurance; provide you with maintenance and training; and link you directly with your passengers. Please note, you must be at least 25 years old with a clean driving record, and have at least 5 years of driving experience.
              </p>
            </div>
          </div>
          <div class="text-partner" id="partner">
            <div class="four columns offset-by-two">
              <p class="interested">
                Interested in partnering with Link? Fill out the form below to apply!
              </p>
            </div>
            <div class="four columns">
              <p>
                Partnering with Link lets you implement our app and updated technologies within your current fleet, linking your services to a larger customer base. Please note, to qualify as a service partner, you must be certified by the proper authorities in your area.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="eight columns offset-by-two">
            <div class="contact-container">
              <div class="text-driver">
              <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 8, 'title' => false, 'description' => false ) ); ?>
              </div>
              <div class="text-partner">
                <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 9, 'title' => false, 'description' => false ) ); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

</main><!-- End of Content -->

<?php get_footer(); ?>
