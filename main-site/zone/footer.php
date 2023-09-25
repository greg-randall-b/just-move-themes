<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>



<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_html( $container ); ?>">

		<div class="row">

			<div class="col-md-3">

				<p>JUST MOVE FITNESS<br />
				3195 US Highway 98 N<br />
				Lakeland (North), FL 33805<br />
				(863) 683-1900<br>
				<a href="mailto:info@JustMoveFitnessClub.com" style="color: #fff;">info@JustMoveFitnessClub.com</a></p>
				
				<p><a href="http://www.justmovenorthlakeland.com">Join Now</a></p>


			</div><!--col end -->

			<div class="col-md-3">

				<p>JUST MOVE FITNESS<br />
				3625 S. Florida Avenue<br />
				Lakeland (South), FL 33803<br />
				(863) 232-5411<br>
				<a href="mailto:info@JustMoveFitnessClub.com" style="color: #fff;">info@JustMoveFitnessClub.com</a></p>
				
				<p><a href="http://www.justmovesouthlakeland.com">Join Now</a></p>


			</div>

			<div class="col-md-3">

				<p>JUST MOVE FITNESS<br />
				5636 Cypress Gardens Blvd.<br />
				Winter Haven, FL 33884<br />
				(863) 291-4653<br>
				<a href="mailto:info@JustMoveFitnessClub.com" style="color: #fff;">info@JustMoveFitnessClub.com</a></p>
				
				<p><a href="http://www.justmovewinterhaven.com">Join Now</a></p>


			</div>

			<div class="col-md-3">

				<p>JUST MOVE FITNESS<br />
				1164 Havendale Blvd.<br />
				Winter Haven, Florida 33881<br />
				(863) 294-4653<br>
				<a href="mailto:info@JustMoveFitnessClub.com" style="color: #fff;">info@JustMoveFitnessClub.com</a></p>
				
				<p><a href="http://www.justmovehavendale.com">Join Now</a></p>


			</div>

		</div><!-- row end -->

		<div class="row">

			<div class="col-md-12">
				<p><a href="/privacy-policy" style="text-align: center;">Privacy Policy</a></p>
			</div>

		</div>

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>


    <script src="/wp-content/themes/zone/dist/aos.js"></script>
    <script>
      AOS.init({
        easing: 'ease-in-out-sine'
      });
    </script>

 

    

</body>

</html>

