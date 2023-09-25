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

			<div class="col-lg-3">

				<p>JUST MOVE FITNESS<br />
				3195 US Highway 98 N<br />
				Lakeland (North), FL 33805<br />
				(863) 683-1900<br>
				<a href="mailto:info@JustMoveFitnessClub.com" style="color: #fff;">info@JustMoveFitnessClub.com</a></p>

				<p style="display: none;"><a href="/join">Join Today</a></p>

				<p><a href="/privacy-policy/">Privacy Policy</a></p>


			</div>

			<div class="col-lg-3">

				<p>Gym Hours</p>

				<p>
					Monday: 4am - 12am<br />
					Tuesday - Friday: 24 Hours<br />
					Saturday: 12am – 10pm<br />
					Sunday: 6am - 8pm
					</p>

				
			</div>

			<div class="col-lg-3">


				<p>Kid's Club Hours</p>

				<p>Mon-Thurs: 8:30am - 12:30pm and 4:30pm - 8:30pm<br />
					Fri-Sat: 8:30am - 12:30pm<br />
					Sun: Closed
				</p>

			</div>






			<div class="col-lg-3">

				<p>GET SOCIAL</p>

	
				<a href="https://www.facebook.com/JustMoveNorthLakeland" target="_blank"><img src="/wp-content/themes/zone/img/fb.png" alt="Facebook" /></a>


				<a href="https://www.instagram.com/justmovenl" target="_blank"><img src="/wp-content/themes/zone/img/insta.png" alt="Instagram" /></a>

				

			</div>

		</div><!-- row end -->

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

 <script>
    	function showDiv() {
  	 document.getElementById('welcomeDiv').style.display = "block";
			}
    </script>

    

</body>

</html>

