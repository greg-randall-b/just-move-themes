<?php
/**
 * Template Name: Covid Response
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

?>

<div class="announcement">
	<p><a href="/covid-19">Click here</a> to learn about our COVID-19 safety procedures.</p>
	</div>

<div class="wrapper covidwrap" id="full-width-page-wrapper">

	<img class="mobilehidme" src="/wp-content/themes/zone/img/jmovebgmobile.jpg" alt="Woman wearing a mask at just move." />

<video autoplay muted loop id="myVideo">
  <source src="/wp-content/themes/zone/img/comp2.mp4" type="video/mp4">
</video>

		


		<div class="row">

			<!-- <div class="col-md-1  herotext">
				<div class="rotate"><h3><span style="font-size: 36px !important; color: #176FB8; text-transform: uppercase;">Just</span></h3></div>

				

			</div>

			<div class="col-md-3  herotext">

				<h3><?php echo do_shortcode('[text-slider]'); ?></h3>

			</div> -->

			<div class="col-lg-12 text-center covidlogo">

				<img src="/wp-content/themes/zone/img/justmove2.png" alt="a power button that says a safer place to move." />
			</div>


			



		</div>



</div><!-- Wrapper end -->


<!-- <div class="text-center covidtitle" style="background-image: url('/wp-content/themes/zone/img/covidbg.jpg'); background-size: cover; padding: 15vh 0">
	<h2>A Safer Place to Move</h2>
</div>

 -->


<div class="wrap staffwrap covidstaffwrap">

	<div class="staffcon container text-center">

		<div class="row">

			<div class="col-lg-12">
				<h2>Just Move Staff</h2>

				<p>At Just Move, our team is doing everything we can to ensure you can enjoy our facilities with peace of mind. Here are just some of the measures that our staff have in place to provide you with a safe and healthy fitness environment:

						</p>

				
			</div>

		</div>

		<div class="row">
			<div class="col-sm">
				<img src="/wp-content/themes/zone/img/icon1w.png" alt="" />
				<p>All staff are required to wear face masks</p>
			</div>

			<div class="col-sm">
				<img src="/wp-content/themes/zone/img/icon2w.png" alt="" />
				<p>Implementation of enhanced cleaning procedures</p>
			</div>

			<div class="col-sm">
				<img src="/wp-content/themes/zone/img/icon3w.png" alt="" />

				<p>Hourly sanitation spray of the facility</p>
			</div>

			<div class="col-sm">
				<img src="/wp-content/themes/zone/img/icon4w.png" alt="" />
				<p>Increased time between classes for thorough cleaning</p>
			</div>

			<div class="col-sm">
				<img src="/wp-content/themes/zone/img/icon5w.png" alt="" /> 
				<p>Social distancing enforced in group classes</p>
			</div>
		</div>
	</div>


	<div class="container staffcon text-center">

		<div class="row">

			<div class="col-lg-12">
				<h2>Just Move Members</h2>

				
			</div>

		</div>

		<div class="row">

			<div class="col-lg-12">
				<p>As a valued member of our family, we ask that you also help us in fighting the spread of COVID-19. While visiting a Just Move Facility, please adhere to the following guidelines:</p>

				
			</div>

		</div>



		

		<div class="row">
			<div class="col-sm">
				<img src="/wp-content/themes/zone/img/icon6w.png" alt="" />
				<p>Wear your mask upon entry to the club. You may remove your mask during exercise.</p>
			</div>

			<div class="col-sm">
				<img src="/wp-content/themes/zone/img/icon7w.png" alt="" />
				<p>Pay attention to social distancing guidelines while in the facility</p>
			</div>

			<div class="col-sm">
				<img src="/wp-content/themes/zone/img/icon8w.png" alt="" />
				<p>Wipe down your equipment before and after each use </p>
			</div>

			<div class="col-sm">
				<img src="/wp-content/themes/zone/img/icon9w.png" alt="" />
				<p>Bring your own boxing gloves and yoga mat if you would like to take classes that require them</p>
			</div>

			<div class="col-sm">
				<img src="/wp-content/themes/zone/img/icon10w.png" alt="" />
				<p>Stay home if you are feeling ill</p>
			</div>
		</div>
	</div>
</div>




<?php get_footer(); ?>
