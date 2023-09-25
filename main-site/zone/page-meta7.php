<?php
/**
 * Template Name: Meta 7 - Workout Plan
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

get_header('meta');?>



</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WD7VRHC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="hfeed site" id="page">

<?php 

if( get_the_id() != '2') {

?>

	<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content',
		'understrap' ); ?></a>

		<nav class="navbar navbar-toggleable-md  navbar-inverse bg-inverse">

		
			<div class="container">


				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						
						
					
					<?php } else {
						if( get_the_id() != '208') {
						the_custom_logo();
						}
					} ?><!-- end custom logo -->

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'walker'          => new WP_Bootstrap_Navwalker(),
					)
				); ?>
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- .wrapper-navbar end -->

<?php } ?>


<?php

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

				<h1><?php the_title(); ?></h1>

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


		<div class="row" id="step">

			<div class="col-sm-2 offset-sm-1">
				
				<img src="/wp-content/themes/zone/img/step1.jpg" />
				
			</div>

			<div class="col-sm-8">
				
				<?php the_field('step_one'); ?>
				
			</div>

		</div>

		

		<div class="row">

			<div class="col-sm-3" data-aos="fade-up" id="vipbtn">
				
				<div class="btn"><a target="_blank" href="http://www.justmovenorthlakeland.com/vip-pass/">North Lakeland</a></div>
				<p>3195 US Highway 98 N<br>
				Lakeland (North), FL 33805<br>
				(863) 683-1900</p>
				
			</div>

			<div class="col-sm-3" data-aos="fade-up" id="vipbtn">
				
				<div class="btn"><a target="_blank" href="http://www.justmovesouthlakeland.com/vip-pass/">South Lakeland</a></div>
				<p>3625 S. Florida Avenue<br>
				Lakeland (South), FL 33803<br>
				(863) 646-3036</p>
				
			</div>


			<div class="col-sm-3" data-aos="fade-up" id="vipbtn">
				
				<div class="btn"><a target="_blank" href="http://www.justmovehavendale.com/vip-pass/">Havendale</a></div>
				<p>1164 Havendale Blvd.<br>
				Winter Haven, Florida 33881<br>
				(863) 294-4653</p>
				
			</div>

			<div class="col-sm-3" data-aos="fade-up" id="vipbtn">
				
				<div class="btn"><a target="_blank" href="http://www.justmovewinterhaven.com/vip-pass/">Winter Haven</a></div>
				<p>5636 Cypress Gardens Blvd.<br>
				Winter Haven, FL 33884<br>
				(863) 291-4653</p>
				
			</div>

		</div>

		<div class="row" id="step">

			<div class="col-sm-2 offset-sm-1">
				<img src="/wp-content/themes/zone/img/circle2.jpg" />
				
				
			</div>

			<div class="col-sm-8">
				
				<?php the_field('step_two'); ?>
				
			</div>

		</div>

		<div class="row" id="step">

			<div class="col-sm-2 offset-sm-1">
				
				<img src="/wp-content/themes/zone/img/step3.jpg" />
				
			</div>

			<div class="col-sm-8">
				
				<?php the_field('step_three'); ?>
				
			</div>

		</div>

		<div class="row">

			<div class="col-sm-3" data-aos="fade-up" id="vipbtn">
				
				<div class="btn"><a target="_blank" href="http://www.justmovenorthlakeland.com/class-pass/">North Lakeland</a></div>
				<p>3195 US Highway 98 N<br>
				Lakeland (North), FL 33805<br>
				(863) 683-1900</p>
				
			</div>

			<div class="col-sm-3" data-aos="fade-up" id="vipbtn">
				
				<div class="btn"><a target="_blank" href="http://www.justmovesouthlakeland.com/class-pass/">South Lakeland</a></div>
				<p>3625 S. Florida Avenue<br>
				Lakeland (South), FL 33803<br>
				(863) 646-3036</p>
				
			</div>


			<div class="col-sm-3" data-aos="fade-up" id="vipbtn">
				
				<div class="btn"><a target="_blank" href="http://www.justmovehavendale.com/class-pass/">Havendale</a></div>
				<p>1164 Havendale Blvd.<br>
				Winter Haven, Florida 33881<br>
				(863) 294-4653</p>
				
			</div>

			<div class="col-sm-3" data-aos="fade-up" id="vipbtn">
				
				<div class="btn"><a target="_blank" href="http://www.justmovewinterhaven.com/class-pass/">Winter Haven</a></div>
				<p>5636 Cypress Gardens Blvd.<br>
				Winter Haven, FL 33884<br>
				(863) 291-4653</p>
				
			</div>

		</div>

		<div class="row" id="step">

			<div class="col-sm-2 offset-sm-1">
				<img src="/wp-content/themes/zone/img/step5.jpg" />
				
			</div>

			<div class="col-sm-8">
				
				<?php the_field('step_4'); ?>
				
			</div>

		</div>

		<div class="row" id="step">

			<div class="col-sm-2 offset-sm-1">
				<img src="/wp-content/themes/zone/img/step4.jpg" />
				
				
			</div>

			<div class="col-sm-8">
				
				<?php the_field('step_5'); ?>
				
			</div>

		</div>

		<div class="row">

			<div class="col-sm-3" data-aos="fade-up" id="vipbtn">
				
				<div class="btn"><a target="_blank" href="https://www.facebook.com/JustMoveNorthLakeland"><img src="/wp-content/themes/zone/img/fb_white.png"></a></div>
				<div class="btn"><a target="_blank" href="https://www.instagram.com/justmovenl/"><img src="/wp-content/themes/zone/img/insta_white.png"></a></div>
				<p>North Lakeland<br>
				3195 US Highway 98 N<br>
				Lakeland (North), FL 33805<br>
				(863) 683-1900</p>
				
			</div>

			<div class="col-sm-3" data-aos="fade-up" id="vipbtn">
				
				<div class="btn"><a target="_blank" href="https://www.facebook.com/JustMoveSouthLakeland"><img src="/wp-content/themes/zone/img/fb_white.png"></a></div>
				<div class="btn"><a target="_blank" href="https://www.instagram.com/justmovesl/"><img src="/wp-content/themes/zone/img/insta_white.png"></a></div>
				<p>South Lakeland<br>
					3625 S. Florida Avenue<br>
				Lakeland (South), FL 33803<br>
				(863) 646-3036</p>
				
			</div>


			<div class="col-sm-3" data-aos="fade-up" id="vipbtn">
				
				<div class="btn"><a target="_blank" href="https://www.facebook.com/JustMoveHavendale"><img src="/wp-content/themes/zone/img/fb_white.png"></a></div>
				<div class="btn"><a target="_blank" href="https://www.instagram.com/justmovehd/"><img src="/wp-content/themes/zone/img/insta_white.png"></a></div>
				<p>Havendale<br>
				1164 Havendale Blvd.<br>
				Winter Haven, Florida 33881<br>
				(863) 294-4653</p>
				
			</div>

			<div class="col-sm-3" data-aos="fade-up" id="vipbtn">
				
				<div class="btn"><a target="_blank" href="https://www.facebook.com/JustMoveWinterHaven"><img src="/wp-content/themes/zone/img/fb_white.png"></a></div>
				<div class="btn"><a target="_blank" href="https://www.instagram.com/justmovewh/"><img src="/wp-content/themes/zone/img/insta_white.png"></a></div>
				<p>Winter Haven<br>
				5636 Cypress Gardens Blvd.<br>
				Winter Haven, FL 33884<br>
				(863) 291-4653</p>
				
			</div>

		</div>



	</div>
</div>



<?php get_footer(); ?>
