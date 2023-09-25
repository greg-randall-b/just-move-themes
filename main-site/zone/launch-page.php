<?php
/**
 * Template Name: LAUNCH PAGE
 *
 * Template for launch page.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="launch">
    <div class="<?php echo esc_html( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-8 offset-2 content-area" id="full-width-page-wrapper">

			</div>
			
		</div><!-- #primary -->

	</div><!-- .row end -->

</div><!-- Wrapper end -->



<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_html( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12" data-aos="fade-up">

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

			</div><!-- #primary -->
			
			

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->
<div class="wrapper" id="sparkles">

	<div class="<?php echo esc_html( $container ); ?>" id="content">		
		
		<div class="col-md-10 offset-1 content-area" data-aos="fade-up">
		<?php the_field('second_row'); ?>
		</div>
		
		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->
<div class="wrapper" id="">

	<div class="<?php echo esc_html( $container ); ?>" id="content">
		
		<div class="col-md-10 offset-1 content-area" data-aos="fade-up">
		<h3>Still have questions? Get in touch!</h3>
		<br /><br />
		<?php echo do_shortcode('[ninja_form id=3]'); ?>
		</div>
		<br clear="all" />

	</div><!-- Container end -->

</div><!-- Wrapper end -->


<?php get_footer(); ?>
