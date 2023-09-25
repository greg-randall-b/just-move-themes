<?php
/**
 * Template Name: Video Included

 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

?>

<div style="background: url('<?php the_post_thumbnail_url( 'large' ); ?>'); background-size: cover; background-repeat: no-repeat;" id="intwrapvideo">
<div id="pwrbtn">
			<img src="/wp-content/themes/zone/img/pwrbtn.svg" alt="Just Move Symbol" />
		</div>

	<div class="container" id="content" tabindex="-1">

		<div class="row">

			<div class="col-md-8 offset-md-2">

				 <h1 style="color: #fff; margin-bottom:20px; font-weight:bold;text-transform:uppercase;text-shadow: 0px 0px 5px #000;"><?php if(get_the_id() == '350') { echo '&nbsp;'; } else { the_title(); } ?></h1> 
			
				<div class="video-container">
				<?php the_field('video_embed'); ?>
				</div>

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
