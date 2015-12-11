<?php
/**
 * The template for displaying the 404 page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div class="page">
		<h3>We Have Some Unfinished Business...</h3>
	</div>
	
	<div id="primary" class="site-content">
		<div id="content" role="main">

			
			<div class="message">		
				<p>Sorry, this page no longer exists or never existed.</p>
				<p>Wait, perhaps it was moved?</p>
				<p>No way.</p>
				<p>Way.</p>
				<p>We feel like complete jerks for totally misleading you.
					Take a look around our <a href="http://accelerate:8888/blog/">blog</a> or some of our featured <a href="http://accelerate:8888/case-studies/">work</a>.
				</p>
			</div>


			<?php while ( have_posts() ) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>


			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>