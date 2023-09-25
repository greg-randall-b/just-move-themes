<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header();
?>

<?php
$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<div style="background: url('/wp-content/themes/zone/img/jmbg2.jpg'); background-size: cover; background-repeat: no-repeat;" id="intwrap">
<div id="pwrbtn">
			<img src="/wp-content/themes/zone/img/pwrbtn.svg" alt="Just Move Symbol" />
		</div>

	<div class="container" id="content" tabindex="-1">

		<div class="row">

			<div class="col-md-12">

				Just Move Blog

			</div><!-- #main -->

		</div><!-- #primary -->

		<!-- Do the right sidebar check -->
		

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->




<div class="wrapper" id="archive-wrapper">

	<div class="<?php echo esc_html( $container ); ?>" id="content" tabindex="-1">

		

			
			<main class="site-main" id="main">
			
			        
                    
                <div class="row">
					<div class="col-lg-8 blogroll">	

				<?php if ( have_posts() ) : ?>
                    
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', get_post_format() );
						?>

					<?php endwhile; ?>

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>
				    </div>
				    
				    
			        <?php get_sidebar( 'right' ); ?>

                    
                </div> <!-- .row -->
			</main><!-- #main -->

			

		

		



</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
