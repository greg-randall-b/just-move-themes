<?php
/**
 * Template Name: Specials with Clubs
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
			<?php if( get_the_ID() == '9028') { ?>
			<img src="/wp-content/uploads/2021/06/4cent.png" alt="July 4th Special: 4 Cent Start Up!" id="cent4" />
			
			<?php } ?>
			<?php if( get_the_ID() == '9665') { ?>
			<img src="/wp-content/uploads/2021/09/fallintofitness.png" alt="Fall into Fitness: Join for $1" id="cent4" />
			
			<?php } ?>
			<?php if( get_the_ID() == '9695') { ?>
			<h1 class="spooky"><?php the_title(); ?></h1>
			<!-- <h2 class="spooky"> Potential zombie apocalypse? You're going to have to outrun them. <span>Sign up for a VIP membership for just $1</span> anytime in October to start training cardio.</h2> -->
			<?php } ?>
			<?php if( get_the_ID() == '10002') { ?>
			<img src="/wp-content/uploads/2023/03/wacky-wednesday-3.png" alt="Wacky Wednesday: 4 weeks for $0.04" id="cent4" />
			<?php } ?>
			<?php if( get_the_ID() == '10007') { ?>
			<img src="/wp-content/uploads/2021/12/resolution-solution.png" alt="The Resolution Solution" id="newyear" />
			<?php } ?>
			<?php if( get_the_ID() == '10959') { ?>
			<img src="/wp-content/uploads/2022/04/springintofitness.png" alt="Spring Into Fitness" id="newyear" />
			<?php } ?>
			<?php if( get_the_ID() == '14292') { ?>
			<img src="/wp-content/uploads/2023/05/schools-out.png" alt="Free Summer" id="summer" />
			<?php } ?>
			<?php if( get_the_ID() == '12804') { ?>
			<?php the_title(); ?>
			<?php } ?>
			<?php if( get_the_ID() == '14846') { ?>
			<?php the_title(); ?>
			<?php } ?>
			<?php if( get_the_ID() == '13459') { ?>
			<img src="/wp-content/uploads/2023/01/friday-13.png" alt="Special Offer" id="kickoff" />
			<?php } ?>
			<?php if( get_the_ID() == '14196') { ?>
			<img src="/wp-content/uploads/2023/05/springfit.png" alt="Spring Into Fitness" id="kickoff" />
			<?php } ?>
			<?php if( get_the_ID() == '13679') { ?>
			<?php the_title(); ?>
			<?php } ?>
			<?php if( get_the_ID() == '13684') { ?>
			<?php the_title(); ?>
			<?php } ?>
			<?php if( get_the_ID() == '14243') { ?>
			<?php the_title(); ?>
			<?php } ?>
			<?php if( get_the_ID() == '14484') { ?>
			<?php the_title(); ?>
			<?php } ?>
			<?php if( get_the_ID() == '9381') { ?>
			<?php the_title(); ?>
			<?php } ?>

				<?php #the_title(); ?>

			</div><!-- #main -->

		</div><!-- #primary -->

		<!-- Do the right sidebar check -->
		

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->



<?php if( (get_the_ID() == '14243') OR (get_the_ID() == '14292')  ) { $link = 'summerfree'; } 
else if( (get_the_ID() == '14484')  ) { $link = 'christmasinjuly'; }
else { $link = 'now'; } ?>






<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_html( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'page' ); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :

							comments_template();

						endif;
						?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->
		
		
<div class="wrapper" id="specialpage">
    <div class="container">
        <div class="row">
        <div class="col-md-3">
            <div class="clubclub">
            <h2>North Lakeland</h2>
<p>3195 US Highway 98 N<br>
Lakeland (North), FL 33805<br>
<strong>(863) 683-1900</strong></p>
<div class="homebutton"><a href="https://www.justmovenorthlakeland.com/join/<?php echo $link; ?>/">JOIN NOW</a></div>
                
            </div>
        </div>
        <div class="col-md-3">
            <div class="clubclub">
            <h3>South Lakeland</h3>
<p>3625 S. Florida Avenue<br>
Lakeland (South), FL 33803<br>
<strong>(863) 232-5411</strong></p>
<div class="homebutton"><a href="https://www.justmovesouthlakeland.com/join/<?php echo $link; ?>/">JOIN NOW</a></div>
                
            </div>
        </div>
        <div class="col-md-3">
            <div class="clubclub">
            <h3>Winter Haven</h3>
<p>5636 Cypress Gardens Blvd.<br>
Winter Haven, FL 33884<br>
<strong>(863) 291-4653</strong></p>
<div class="homebutton"><a href="https://www.justmovewinterhaven.com/join/<?php echo $link; ?>/">JOIN NOW</a></div>
                
            </div>
        </div>
        <div class="col-md-3">
            <div class="clubclub">
            <h3>Havendale</h3>
<p>1164 Havendale Blvd.<br>
Winter Haven, Florida 33881<br>
<strong>(863) 294-4653</strong></p>
<div class="homebutton"><a href="https://www.justmovehavendale.com/join/<?php echo $link; ?>/">JOIN NOW</a></div>
                
            </div>
        </div>
        </div>
        <br clear="all">&nbsp;
	</div>	
</div>

		
		

	</div><!-- Container end -->

</div><!-- Wrapper end -->


<?php get_footer(); ?>
