<?php
/**
 * Template Name: Team Training
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

	<div class="container" id="content" tabindex="-1">

		<div class="row">

			<div class="col-md-12">

				<h1><?php if(get_the_id() == '350') { echo '&nbsp;'; } else { the_title(); } ?></h1>

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
			<div class="col-lg-6 text-center">
				<?php the_field('third_row_a'); ?>
			</div>

			<div class="col-lg-6 text-center">
				<?php the_field('third_row_b'); ?>
			</div>



		</div>

		<div class="row">
<a name="start"></a>
			<div class="col-sm-12" style="text-align:center;">


				<div class="homebutton"><a onclick="showDiv()">Get Started</a></div>


				<div id="welcomeDiv"  style="display:none;" class="answer_list" >
				<?php the_field('second_row'); ?></div>


				
				
			</div>

		</div>




	</div>
</div>

<div id="getstarted">
	<h3><span style="color:#176FB8">Start Training Today</span> | Enjoy unlimited Team Training access with your Premium + membership! Sign up to get started with your fitness transformation today. </h3>

	<div class="homebutton"><a onclick="showDiv()" href="#start">Get Started</a></div>

</div>


<?php get_footer(); ?>
