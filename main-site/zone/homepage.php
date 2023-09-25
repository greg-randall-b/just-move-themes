<?php
/**
 * Template Name: HOME PAGE
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>



<div class="wrapper herowrap" id="full-width-page-wrapper">

		<div id="pwrbtn">
			<img src="/wp-content/themes/zone/img/pwrbtn.svg" alt="Just Move Symbol" />
		</div>



		<div class="row herogroup">

			<!-- <div class="col-md-1  herotext">
				<div class="rotate"><h3><span style="font-size: 36px !important; color: #176FB8; text-transform: uppercase;">Just</span></h3></div>

				

			</div>

			<div class="col-md-3  herotext">

				<h3><?php echo do_shortcode('[text-slider]'); ?></h3>

			</div> -->

			<div class="col-md-5 offset-lg-7" id="herobanner">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'page' ); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :

							comments_template();

						endif;
						?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div>



		</div>



</div><!-- Wrapper end -->



<div class="wrapper dwrap" id="darkback">
    <div class="<?php echo esc_html( $container ); ?>" id="negtab">
        <div class="col-md-12">
        <h2>4 Great Clubs</h2>
        </div>
        <div class="row">
        <div class="col-md-3">
            <div class="clubclub">
            <?php the_field('third_row_a'); ?>
                <div class="homemap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3520.1182531761324!2d-81.96891868448041!3d28.08193558263828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88dd4746791d2b29%3A0x48c43253087678b2!2s3195+US+Hwy+98+N%2C+Lakeland%2C+FL+33805!5e0!3m2!1sen!2sus!4v1506361538552" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="clubclub">
            <?php the_field('third_row_b'); ?>
                <div class="homemap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3522.8623760542146!2d-81.96048228448194!3d27.998106682672265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88dd3934232f4231%3A0x2acadb67f1a23f4a!2s3625+Florida+Ave+S%2C+Lakeland%2C+FL+33803!5e0!3m2!1sen!2sus!4v1506361680621" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="clubclub">
            <?php the_field('third_row_c'); ?>
                <div class="homemap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3522.9646376964647!2d-81.68869178448195!3d27.994978282673745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88dd0d86ca77cf77%3A0x73acbf818679a95b!2s5636+Cypress+Gardens+Blvd%2C+Winter+Haven%2C+FL+33884!5e0!3m2!1sen!2sus!4v1506361713380" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="clubclub">
            <?php the_field('third_row_d'); ?>
                <div class="homemap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3521.363093527466!2d-81.74075328448103!3d28.04393608265378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88dd1329691bf83b%3A0x524c1a539416b3ce!2s1164+Havendale+Blvd+NW%2C+Winter+Haven%2C+FL+33881!5e0!3m2!1sen!2sus!4v1506361737332" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        </div>
        <br clear="all">&nbsp;
	</div>	
</div>

<div class="wrapper aboutwrap">
    <div class="<?php echo esc_html( $container ); ?>">
        <div class="row">
		    <div class="col-md-7" data-aos="fade-up">
		        <?php the_field('second_row'); ?>
		    </div>

		    <div class="col-md-5" id="lady" data-aos="fade-up">
		    	<img alt="woman enjoying fitness at just move" src="/wp-content/themes/zone/img/rocklady.png" />
		    	
		    	<div style="text-align: center; ">
		    	<div class="homebutton"><a href="/vip-pass/">FREE WORKOUT</a></div>
		    	</div>
		    	
		    	<p style="margin: 20px 80px;">Already a Member? Questions about the new brand?  <a href="/launch/">See what's new and what's not changed.</a></p>
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



 <?php get_footer(); ?> 
