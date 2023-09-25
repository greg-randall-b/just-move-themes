<?php
/**

 *

 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

?>

<div style="background: url('/wp-content/uploads/2017/07/jmbg1.jpg'); background-size: cover; background-repeat: no-repeat;" id="intwrap">
<div id="pwrbtn">
			<img src="/wp-content/themes/zone/img/pwrbtn.svg" alt="Just Move Symbol" />
		</div>

	<div class="container" id="content" tabindex="-1">

		<div class="row">

			<div class="col-md-12">

				Amenities

			</div><!-- #main -->

		</div><!-- #primary -->

		<!-- Do the right sidebar check -->
		

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->




<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_html( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

	
			<?php	query_posts(array('cat'=>6,'posts_per_page'=>-1, 'orderby'=> 'title', 'order' => 'ASC')); ?>

				<?php while ( have_posts() ) : the_post(); ?>





					<div class="col-lg-3" id="amenities" data-aos="fade-up">	

						<p><?php the_title(); ?></p>




					<?php if ( has_post_thumbnail() ) : ?>
    
        				<?php the_post_thumbnail('full'); ?>
   	
					<?php endif; ?>

					
						
					</div>

					

					


					

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

		</div><!-- #primary -->

		
	</div><!-- .row -->

</div><!-- Container end -->



<?php get_footer(); ?>
