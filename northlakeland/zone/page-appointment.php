<?php
/**
 * Template Name: Appointment
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
		      
		        <!-- <img src="/wp-content/themes/zone/img/blackfriday.png" alt="Black Friday Only" id="burst" /> -->
		    </div>

	    

	 </div>

	
	     <div class="row">
	     	<div class="col-lg-12 text-center formwrapper">
	     		<h2>Book your appointment now to save your spot.</h2>
	     		<div class="forminner"><?php echo do_shortcode('[ninja_form id=8]'); ?></div>

	     	</div>
   		 </div>
</div>
<!-- 

 <div data-type="countdown" data-id="1594302" class="tickcounter" style="width: 50%; position: relative; padding-bottom: 12%; margin:0 auto;"><a href="//www.tickcounter.com/countdown/1594302/black-friday" title="Black Friday">Black Friday</a><a href="//www.tickcounter.com/" title="Countdown">Countdown</a></div><script>(function(d, s, id) { var js, pjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//www.tickcounter.com/static/js/loader.js"; pjs.parentNode.insertBefore(js, pjs); }(document, "script", "tickcounter-sdk"));</script>

</div>
 -->

    



<?php get_footer(); ?>
