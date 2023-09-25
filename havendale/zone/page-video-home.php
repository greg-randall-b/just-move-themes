<?php
/**
 * Template Name: Video Home Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>



<div class="wrapper herowrap" id="full-width-page-wrapper" style="padding: 0; height: 80vh; overflow: hidden;">
	
<video autoplay muted loop id="newVideo">
  <source src="/wp-content/themes/zone/img/HD.mp4" type="video/mp4">
</video>

		


		<div id="pwrbtn">
			<img src="/wp-content/themes/zone/img/pwrbtn.svg" alt="Just Move Symbol" />
		</div>



</div><!-- Wrapper end -->



<div class="wrapper aboutwrap">
    <div class="<?php echo esc_html( $container ); ?>">
        <div class="row">
		    <div class="col-lg-7" data-aos="fade-up">
		        <?php the_field('second_row'); ?>
		    </div>

		    <div class="col-lg-5" id="lady" data-aos="fade-up">
		    	<img alt="Just Move Fitness & Athletic Member" src="/wp-content/themes/zone/img/rocklady.png" />
		    </div>
		</div>
	</div>	
</div>

<div class="wrapper zonewrap">
    <div class="<?php echo esc_html( $container ); ?>">
        <div class="row">
		    <div class="col-lg-12" data-aos="fade-up">
		    		<?php the_field('zones'); ?>

		    </div>

		</div>
	</div>
</div>

<div class="wrapper feedwrap">
    <div class="<?php echo esc_html( $container ); ?>">
        <div class="row">
            <div class="col-md-2" data-aos="fade-up" id="feed1">
                <p>Follow us on Facebook</p>
                <a href="http://fb.me/JustMoveHavendale" target="_blank"><img src="/wp-content/themes/zone/img/large-facebook.png" alt="Follow us on Facebook" /></a>
            </div>
		    <div class="col-md-10" data-aos="fade-up" id="feed2">
		    	<?php echo do_shortcode('[instagram-feed]'); ?>
		    </div>
		 </div>
	</div>
</div>

<div class="wrapper dwrap" id="darkback">
    <div class="<?php echo esc_html( $container ); ?>">
        <div class="row">
		    <div class="col-lg-6" id="classes" data-aos="fade-up">
		        <h2>Today’s Group Classes</h2>
		        
		        <?php 
					date_default_timezone_set('America/New_York');
					$tddate = date('m/d/Y h:i:s a', time());

					// $weekday = 'Monday';

					
					$weekday = date('l', strtotime( $tddate));



					
				

					if ($weekday == 'Monday') {
						echo do_shortcode('[mp-timetable col="9" event_categ="2" title="1" time="1" row_height="45" font_size="" increment="1" view="none" label="All Events" hide_label="0" hide_hrs="1" hide_empty_rows="1" group="0" disable_event_url="1" text_align="center" text_align_vertical="default" id="" custom_class="" responsive="0"]');

						} 

					elseif ($weekday == 'Tuesday') {
						echo do_shortcode('[mp-timetable col="8" event_categ="2" title="1" time="1" row_height="45" font_size="" increment="1" view="none" label="All Events" hide_label="0" hide_hrs="1" hide_empty_rows="1" group="0" disable_event_url="1" text_align="center" text_align_vertical="default" id="" custom_class="" responsive="0"]');


					}

					elseif ($weekday == 'Wednesday') {
						echo do_shortcode('[mp-timetable col="10" event_categ="2" title="1" time="1" row_height="45" font_size="" increment="1" view="none" label="All Events" hide_label="0" hide_hrs="1" hide_empty_rows="1" group="0" disable_event_url="1" text_align="center" text_align_vertical="default" id="" custom_class="" responsive="0"]');


					}

					elseif ($weekday == 'Thursday') {
						echo do_shortcode('[mp-timetable col="21" event_categ="2" title="1" time="1" row_height="45" font_size="" increment="1" view="none" label="All Events" hide_label="0" hide_hrs="1" hide_empty_rows="1" group="0" disable_event_url="1" text_align="center" text_align_vertical="default" id="" custom_class="" responsive="0"]');


					}

					elseif ($weekday == 'Friday') {
						echo do_shortcode('[mp-timetable col="22" event_categ="2" title="1" time="1" row_height="45" font_size="" increment="1" view="none" label="All Events" hide_label="0" hide_hrs="1" hide_empty_rows="1" group="0" disable_event_url="1" text_align="center" text_align_vertical="default" id="" custom_class="" responsive="0"]');


					}

					elseif ($weekday == 'Saturday') {
						echo do_shortcode('[mp-timetable col="23" event_categ="2" title="1" time="1" row_height="45" font_size="" increment="1" view="none" label="All Events" hide_label="0" hide_hrs="1" hide_empty_rows="1" group="0" disable_event_url="1" text_align="center" text_align_vertical="default" id="" custom_class="" responsive="0"]');


					}

					elseif ($weekday == 'Sunday') {
						echo do_shortcode('[mp-timetable col="5" event_categ="2" title="1" time="1" row_height="45" font_size="" increment="1" view="none" label="All Events" hide_label="0" hide_hrs="1" hide_empty_rows="1" group="0" disable_event_url="1" text_align="center" text_align_vertical="default" id="" custom_class="" responsive="0"]');


					}

					else {
						echo "Click the button below to see our full schedule";
					}

					?>

				<div class="homebutton">

		    		<a href="/group-classes/">See Full Schedule</a>
		    	</div>

		    	<!-- <div class="homebutton">

		    		<a href="/class-pass/">Download Free Class Pass</a>
		    	</div> -->




					
		    </div>
		    <div class="col-lg-6" data-aos="fade-up" id="about">
		        <h3>About Personal Training</h3>
		        <p>Training can feel overwhelming at times. We understand. Let us help you get started on the right foot. Whether you’re a beginner looking to lose weight or a competitive athlete wanting to train up, we’ll pair you with a trainer and create a customized workout plan to meet your individual need.</p>

		        <div class="homebutton">

		    		<a href="/personal-training">Learn More</a>
		    	</div>


		    </div>
		</div>
	</div>	
</div>

<div class="wrapper aboutwrap">
    <div class="<?php echo esc_html( $container ); ?>">
        <div class="row">
		    <div class="col-lg-8" data-aos="fade-up" id="about">
		    	<h3>Group Fitness</h3>
		    	<p>With over 30 group fitness classes per week, Just Move has created a dynamic schedule that has something for everyone. Classes run seven days a week and cover everything from Les Mills BodyPump and Zumba to Silver Sneakers. Lace up and start sweating with friends. </p>

		    	<div class="homebutton">

		    		<a href="/group-classes/#not-set:all">See Class Schedule</a>
		    	</div>

		    </div>

		    <div class="col-lg-4" id="kettlebells" data-aos="fade-up"> 
		    	<img alt="Fitness & Strength training equipment" src="/wp-content/themes/zone/img/kettlebells.png" style="height: 300px;" />
		    </div>
		 </div>
	</div>
</div>




<div style="height: 250px; width: 100%;">

	<?php the_field('third_row_c'); ?>
</div>
 <?php get_footer(); ?> 
