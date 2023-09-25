<?php
/**
 * Template Name: Specials - New Year 2022
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div style="background: url('<?php the_post_thumbnail_url( 'large' ); ?>'); background-size: cover; background-repeat: no-repeat;" id="intwrap">


	<div class="container" id="content" tabindex="-1">

		<div class="row">

			<div class="col-md-12">
			
			<img src="https://www.justmovefitnessclub.com/wp-content/uploads/2022/12/resolution-solution-2.png" alt="The Resolution Solution" id="newyear" />
			

				<?php #the_title(); ?>

			</div><!-- #main -->

		</div><!-- #primary -->

		<!-- Do the right sidebar check -->
		

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->


<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_html( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'page' ); ?>

						

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->
		
<?php
#echo strtotime('now');
if ( '1672894800' > strtotime('now') ) {
	$url = 'resolution-solution';
} else {
	$url = 'newyear-2023';
}

?>
		
		
<div class="wrapper" id="specialpage">
    <div class="container">
        <div class="row">
        <div class="col-md-3">
            <div class="clubclub">
            <h2>North Lakeland</h2>
<p>3195 US Highway 98 N<br>
Lakeland (North), FL 33805<br>
<strong>(863) 683-1900</strong></p>
<div class="homebutton"><a href="https://www.justmovenorthlakeland.com/join/<?php echo $url; ?>/">JOIN NOW</a></div>
                
            </div>
        </div>
        <div class="col-md-3">
            <div class="clubclub">
            <h3>South Lakeland</h3>
<p>3625 S. Florida Avenue<br>
Lakeland (South), FL 33803<br>
<strong>(863) 232-5411</strong></p>
<div class="homebutton"><a href="https://www.justmovesouthlakeland.com/join/<?php echo $url; ?>/">JOIN NOW</a></div>
                
            </div>
        </div>
        <div class="col-md-3">
            <div class="clubclub">
            <h3>Winter Haven</h3>
<p>5636 Cypress Gardens Blvd.<br>
Winter Haven, FL 33884<br>
<strong>(863) 291-4653</strong></p>
<div class="homebutton"><a href="https://www.justmovewinterhaven.com/join/<?php echo $url; ?>/">JOIN NOW</a></div>
                
            </div>
        </div>
        <div class="col-md-3">
            <div class="clubclub">
            <h3>Havendale</h3>
<p>1164 Havendale Blvd.<br>
Winter Haven, Florida 33881<br>
<strong>(863) 294-4653</strong></p>
<div class="homebutton"><a href="https://www.justmovehavendale.com/join/<?php echo $url; ?>/">JOIN NOW</a></div>
                
            </div>
        </div>
        </div>
        <br clear="all">&nbsp;
	</div>	
</div>

		
		

	</div><!-- Container end -->

</div><!-- Wrapper end -->


<?php get_footer(); ?>
