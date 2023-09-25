<?php
/**
 * The template for displaying all pages.
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

<div style="background: url('<?php the_post_thumbnail_url( 'large' ); ?>'); background-size: cover; background-repeat: no-repeat;" id="intwrap">
		<div id="pwrbtn">
			<img src="/wp-content/themes/zone/img/pwrbtn.svg" alt="Just Move Symbol" />
		</div>
		
		
			<?php if( get_the_ID() == '7783') { ?>
			<img src="/wp-content/themes/zone/img/make-a-fresh-start.png" alt="Make a Fresh Start" id="freshstart" />
			<?php } ?>
			
		
			<?php if( get_the_ID() == '8349') { ?>
			<img src="/wp-content/themes/zone/img/8weeks.png" alt="8 Week Challenge" id="freshstart8" />
			<?php } ?>

	<div class="container" id="content" tabindex="-1">

		<div class="row">

			<div class="col-md-12">

				<h1><?php the_title(); ?></h1>
				
				<?php if(get_the_id() == '7783') { ?>
				
				<!-- <img src="/wp-content/themes/zone/img/fresh-start-logo.png" alt="Fresh Start" id="fresh" /> -->
				
				<?php } ?>

			</div><!-- #main -->

		</div><!-- #primary -->

		<!-- Do the right sidebar check -->
		

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<div id="formwrap" class="aboutwrap">

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

			<div class="col-sm-6">
				<?php the_field('left_column'); ?>
				
			</div>

			<div class="col-sm-6">
				<?php the_field('right_column'); ?>
			</div>
		</div>

		<div class="row">

			<div class="col-sm-12">
				
				<?php the_field('second_row'); ?>
				
			</div>

		</div>




	</div>
</div>



<?php get_footer(); ?>
