<?php
/**
 * Template Name: Personal Training

 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

?>

<div class="wrapper personaltraining">


	<div class="container" id="content" tabindex="-1">

		<div class="row">

			<div class="col-md-12">

				<h1><?php the_title(); ?></h1>

				<iframe src="https://player.vimeo.com/video/492193277" width="100%" height="500" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>

			</div><!-- #main -->

		</div><!-- #primary -->

		<!-- Do the right sidebar check -->
		

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<div id="formwrap">

	<div class="<?php echo esc_html( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<div class="col-lg-12">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'page' ); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>
			</div>
		</div>


		<div class="row">

			<div class="col-lg-6" id="ptcol">
				<?php the_field('left_column'); ?>
				
			</div>

			<div class="col-lg-6" id="ptcol">
				<?php the_field('right_column'); ?>
			</div>
		</div>

		<div class="row">

			<div class="col-sm-12" style="text-align:center;">


				<div class="homebutton"><a onclick="showDiv()">Let's Meet</a></div>


				<div id="welcomeDiv"  style="display:none;" class="answer_list" >
				<?php the_field('second_row'); ?></div>


				
				
			</div>

		</div>




	</div>
</div>



<?php get_footer(); ?>
