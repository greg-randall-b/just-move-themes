<?php
/**
 * Template Name: No Hero
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



<div id="formwrap" class="aboutwrap">

	<div class="<?php echo esc_html( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<div class="col-lg-12 text-center">
				<h1><?php if(get_the_id() == '348') { echo '&nbsp;'; } else { the_title(); } ?></h1>
			</div>

			<div class="col-lg-8 offset-lg-2">



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
