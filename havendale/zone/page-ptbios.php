<?php
/**
 * Template Name: Personal Trainers

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

				<?php the_title(); ?>

			</div><!-- #main -->

		</div><!-- #primary -->

		<!-- Do the right sidebar check -->
		

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<div id="formwrap" class="personaltrainers">



	<div class="container-fluid">

		<div class="row">
			<div class="col-lg-12 text-center">
				<p>Jump To: <br>
				<a href="#WinterHaven">Winter Haven Trainers</a>
				<a href="#Lakeland">Lakeland Trainers</a></p>
				
			</div>

		</div>

		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="trainertitle">Havendale Trainers</h2>
			</div>
	</div>

	<div class="row">

		<div class="col-lg-3">
			<img src="/wp-content/themes/zone/img/trainer-juan-disla.jpg" alt="" />
		</div>
		<div class="col-lg-3">
			<img src="/wp-content/themes/zone/img/trainer-cory-harmon.jpg" alt="" />
		</div>
		<div class="col-lg-3">
			<img src="/wp-content/themes/zone/img/trainer-jasmine-johnson.jpg" alt="" />
		</div>
		


		<div class="col-lg-3">
			<img src="/wp-content/themes/zone/img/trainer-abraham-martinez.jpg" alt="" />
		</div>
	</div>

	
	<div class="row mt-5">
		<div class="col-lg-3">
			<img src="/wp-content/themes/zone/img/trainer-elvin-santana.jpg" alt="" />
		</div>

		
	</div>




		
<a name="WinterHaven"></a>
	<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="trainertitle">Winter Haven Trainers</h2>
			</div>
	</div>

	<div class="row">


		<div class="col-lg-3">
			<img src="/wp-content/themes/zone/img/trainer-zach-aldaman.jpg" alt="" />
		</div>
		
		<div class="col-lg-3">

			<img src="/wp-content/themes/zone/img/trainer-john-austin.jpg" alt="" />
			
		</div>

		<div class="col-lg-3">

			<img src="/wp-content/themes/zone/img/trainer-jonathan-avery.jpg" alt="" />
		</div>

		<div class="col-lg-3">

			<img src="/wp-content/themes/zone/img/trainer-alanie-cora.jpg" alt="" />
		</div>

	</div>

	

	<div class="row">

		<div class="col-lg-4">


			<img src="/wp-content/themes/zone/img/ClarkH.jpg" alt="" />
		</div>

		
		<div class="col-lg-3">
			
			<img src="/wp-content/themes/zone/img/trainer-brad-parton.jpg" alt="" />
			
		</div>

		<div class="col-lg-4">
			<img src="/wp-content/themes/zone/img/TonyK.jpg" alt="" />
		</div>

	</div>


<a name="Lakeland"></a>
	

<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="trainertitle">Lakeland Trainers</h2>
			</div>
		</div>

<div class="row">

			

			<div class="col-lg-4">
				<img src="/wp-content/themes/zone/img/mattlivingston.jpg" alt="" /> 
			</div>

			

			<div class="col-lg-4">
				<img src="/wp-content/themes/zone/img/vert-stephens.jpg" alt="" />
			
			</div> 
		
		<div class="col-lg-4">
				<img src="/wp-content/themes/zone/img/kylefarmer.jpg" alt="" /> 
			</div>
		
			
		</div>
		
	<div class="row mt-5">
		
		<div class="col-lg-3">
				<img src="/wp-content/themes/zone/img/trainer-abel-armijo.jpg" alt="" /> 
		</div>
		
		<div class="col-lg-3">
				<img src="/wp-content/themes/zone/img/trainer-mario-aguir-yanes.jpg" alt="" /> 
		</div>
		<div class="col-lg-3">
				<img src="/wp-content/themes/zone/img/trainer-javi-garcia.jpg" alt="" /> 
		</div>
		<div class="col-lg-3">
				<img src="/wp-content/themes/zone/img/trainer-joey-phillips.jpg" alt="" /> 
		</div>
	</div>
	<div class="row mt-5">
		<div class="col-lg-3">
				<img src="/wp-content/themes/zone/img/trainer-brooke-patisaul.jpg" alt="" /> 
		</div>
		
		<div class="col-lg-3">
				<img src="/wp-content/themes/zone/img/trainer-eric-rodriguez-acevedo.jpg" alt="" /> 
		</div>


		<div class="col-lg-3">
				<img src="/wp-content/themes/zone/img/trainer-skye-tailor.jpg" alt="" />
		</div> 
		<div class="col-lg-3">
				<img src="/wp-content/themes/zone/img/trainer-nelson-velasquez.jpg" alt="" /> 
		</div>
	
	</div>
	<div class="row mt-5">	
		<div class="col-lg-3">
				<img src="/wp-content/themes/zone/img/trainer-everette-wagner.jpg" alt="" /> 
		</div>
		
	


	</div>



	</div>




		

		<div class="row">

			<div class="col-sm-12" style="text-align:center;">


				<div class="homebutton"><a onclick="showDiv()">Let's Meet</a></div>


				<div id="welcomeDiv"  style="display:none;" class="answer_list" >
				<?php the_field('second_row'); ?></div>


				
				
			</div>

		</div>




	</div>
</div>



<?php get_footer(); ?>
