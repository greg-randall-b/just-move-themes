<?php
/**
 * Template Name: Appointment Thanks
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

get_header('appt');

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

?>


<div class="wrapper" style="background-image: url('/wp-content/themes/zone/img/jm_background_nov19.jpg'); background-size: cover;">
	<div class="container">

		<div class="row">
			
		      <div class="col-lg-12 jumbotron">
		      <h2>Black Friday Sale!</h2>
		    <h1 class="display-4">Join for $1 & <span style="color:#ff0; font-weight:bold;">no payments until 2023 on ALL PLANS!</span></h1>
		   <!--    <p style="color:#fff;">Gift card redeemable at brand name stores like Nike, Starbucks, and Athleta.</p> -->
		        <!--<img src="/wp-content/themes/zone/img/blackfriday.png" alt="Black Friday Only" id="burst" /> -->
		    </div>
		  
	    

	 </div>

	
	     <div class="row">
	     	<div class="col-lg-12 text-center formwrapper">
	     		<h2>Your appointment has been booked! We look forward to meeting you in the club on Friday. </h2>
	     	

	     	</div>
   		 </div>
</div>
</div>



<?php get_footer(); ?>
