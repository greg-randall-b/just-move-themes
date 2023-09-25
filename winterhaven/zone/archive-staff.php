<?php
/**
 
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_html( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

		

			<main class="site-main" id="main">

					<div class="col-lg-12">	
					<h1>Our Staff</h1>
					</div>

				<?php while ( have_posts() ) : the_post(); ?>

					
					<div class="col-lg-12">	

						<h2 style="margin-top: 60px;"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<?php the_field('job_title'); ?>
					</div>

					<div class="col-lg-12">
						<?php echo the_content(); ?>
						
					</div>

					<div class="col-lg-3" id="bluebtn"><a href="<?php the_permalink(); ?>">Read More</a></div>

					
							
					

					


					

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

		</div><!-- #primary -->

		
	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
