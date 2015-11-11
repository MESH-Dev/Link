<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<?php

	if( is_page_template('templates/homepage-fullscreen.php') ) {
		$imageArray = get_field('background_image');
		$imageURL = $imageArray['sizes']['background-fullscreen'];
	}

?>

<html <?php if( is_page_template('templates/homepage-fullscreen.php') ) { ?> style="background: url('<?php echo $imageURL; ?>') no-repeat center center fixed;" class="background-fullscreen" <?php } ?>>

<head>


<head>
	<meta charset="utf-8">
	<title><?php bloginfo('name'); ?> // A New Way to Connect With Your Ride</title>

	<!-- Meta / og: tags -->
	<meta name="description" content="">
	<meta name="author" content="">


	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS (* with Edge Inspect Fix)
	================================================== -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/Link_Favicon_16px.png">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">



	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div id="page" class='hfeed site <?php if( is_page_template('templates/homepage-fullscreen.php') && is_front_page() ) { echo "content-fullscreen"; } ?>'>

		<header>

			<div class="container">

				<div class="twelve columns">
					<div class="logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(''); ?>/img/link-white.png" /></a>
					</div>

					<nav class="main-navigation animated bounceInDown">
						<ul>
							<div class="ball-why animated"></div>
							<li><a class="go-why">Why Link</a></li>
							<div class="ball-how animated"></div>
							<li><a class="go-how">How it Works</a></li>
							<div class="ball-where animated"></div>
							<li><a class="go-where">Link up in your City</a></li>
							<div class="ball-contact animated"></div>
							<li><a class="go-contact">Contact</a></li>
							<li class="social">
								<div class="social-icon"><a href="https://instagram.com/ridewithlink/" target="_blank"><i class="fa fa-instagram"></i></a></div>
								<div class="social-icon"><a href="https://twitter.com/ridewithlink" target="_blank"><i class="fa fa-twitter"></i></a></div>
								<div class="social-icon"><a href="https://www.facebook.com/pages/Ridewithlink/1648007138747950" target="_blank"><i class="fa fa-facebook"></i></a></div>
								<div class="social-icon"><a class="go-contact"><i class="fa fa-envelope"></i></a></div>
							</li>
						</ul>
					</nav>
					<div class="mobile-navigation-toggle">
						<i class="fa fa-bars"></i>
					</div>
				</div>

			</div>

			<div class="ribbon animated slideInRight">
				<div class="ribbon-title go-partner">
					<span>Become a partner</span>
				</div>
				<div class="ribbon-title go-driver">
					<span>Become a driver</span>
				</div>
			</div>


		</header>

		<div class="mobile-navigation">
			<ul>
				<li><a class="go-why">Why Link</a></li>
				<li><a class="go-how">How it Works</a></li>
				<li><a class="go-where">Link up in your City</a></li>
				<li><a class="go-contact">Contact</a></li>
				<li><a class="go-partner">Become a Partner</a></li>
				<li><a class="go-driver">Become a Driver</a></li>
			</ul>
		</div>
