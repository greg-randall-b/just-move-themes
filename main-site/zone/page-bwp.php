<?php
/**
 * Template Name: Business Wellness Program
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

<div class="bwpherowrap">
 

	<div class="container" id="content" tabindex="-1">

		<div class="row">

			<div class="col-md-7 offset-md-5">

				<img src="/wp-content/themes/zone/img/bwplogo.png" alt="Join Our Business Wellness Program" />
			</div><!-- #main -->

		</div><!-- #primary -->

		<!-- Do the right sidebar check -->
		

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<div class="bwpsubhead">

	<div class="<?php echo esc_html( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<div class="col-lg-8 offset-lg-2">
				<h2>Give back to yourself, your employees, and your business this year by taking advantage of our <span class="dark">Business Wellness Program</span>! </h2>
			</div>

		</div>
	</div>

</div>

<div class="formwrap2">
<div class="bwpabout">

	<div class="<?php echo esc_html( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

		

			<div class="col-lg-6 bwpleft">
				
				<p>Improve the health and well-being of your team by providing them with a comprehensive, cost-effective employee wellness program that includes all of the following facility benefits: </p>

				<ul class="bwpul">
					<li>Multi-Club Access</li>
					<li>Huge Cardio & Strength Areas </li>
					<li>Cardio Theatre </li>
					<li>Functional Training Turf</li>
					<li>Personal Training </li>
					<li>Unlimited Group Classes</li>
					<li>On-Site Child Care </li>
					<li>Executive Locker Rooms</li>
					<li>Tanning & More</li>

				</ul>

				<p>With Just Move’s Business Wellness Program, you can keep your employees happy and heathy while improving their individual work performance as well as the company’s collective success! </p>
				
			</div>

			<div class="col-lg-6">
				
				<h4>Fill out the form below to schedule a tour and to learn more about our program:</h4>

				<?php echo do_shortcode('[ninja_form id=8]'); ?>

			</div>
		</div>
		





	</div>
</div>

<div id="statswrap">

	<div class="<?php echo esc_html( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<div class="col-lg-8">
				<h2>See the Statistics!</h2>
			</div>


			<div class="col-lg-6">
				
				<p>Want to learn more about all of the benefits of a healthy workforce? See below learn more about important statistics and information regarding the health of your valuable employees. </p>

				
			
					<h4>Don’t hesitate – fill out the form above to get your company on the fast track to wellness today!</h4>
			</div>

			<div class="col-lg-6">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="statistics">
								<p>Nearly <span>67%</span> of American adults are now officially classified as overweight or obese and these numbers have staggering implications for businesses.</p>
							</div>
						</div>

						<div class="col-lg-6">
							<div class="statistics">
								<p>The direct cost of obesity in the U.S. is <span>$93 billion</span></p>
							</div>
						</div>

						<div class="col-lg-6">
							<div class="statistics">
								<p>According to the Milken Institute Report of 2017, for every dollar spent on an Employee Wellness Program, businesses save around 3 to 6 dollars in costs! </p>
							</div>
						</div>

						<div class="col-lg-6">
							<div class="statistics">
								<p>Employee wellness plans can result in benefits such as a reduction in sick leave, a decrease in health care, and reduces worker’s compensation claims. </p>
							</div>
						</div>
					</div>
				</div>
			</div>

			
		</div>
		





	</div>
</div>

</div>



<?php get_footer(); ?>
