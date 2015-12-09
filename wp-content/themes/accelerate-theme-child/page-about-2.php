<?php
/**
 * The template for displaying the about page
 *
 * This is the template that displays the about page.
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div class="services">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="about-hero">
				<p><?php the_content(); ?></p>
		    </div>
	</div>
		<?php endwhile; // end of the loop. ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
		
			<div class="service-intro-container">
				<div class="service-intro">
					<h6><?php the_field('service_intro_title'); ?></h6>
					<p>	<?php the_field('service_intro'); ?></p>
				</div>	
			</div>
			
				
					<div class="services-container_1">
						<div class="icon_1">
							<img src="<?php the_field('service_icon_1'); ?>" />
						</div>
						<div class="description_1">
							<h5><?php the_field('service_name_1'); ?></h5>
							<p>	<?php the_field('service_description_1'); ?></p>
						</div>	
					 </div>
			
					<div class="services-container_2">
						<div class="description_1">
							<h5><?php the_field('service_name_2'); ?></h5>
							<p>	<?php the_field('service_description_2'); ?></p>
						</div>	
						<div class="icon_2">
							<img src="<?php the_field('service_icon_2'); ?>" />
						</div>
					 </div>

					 <div class="services-container_3">
						<div class="icon_3">
							<img src="<?php the_field('service_icon_3'); ?>" />
						</div>
						<div class="description_1">
							<h5><?php the_field('service_name_3'); ?></h5>
							<p>	<?php the_field('service_description_3'); ?></p>
						</div>	
					 </div>

					 <div class="services-container_4">
						<div class="description_4">
							<h5><?php the_field('service_name_4'); ?></h5>
							<p>	<?php the_field('service_description_4'); ?></p>
						</div>
						<div class="icon_4">
							<img src="<?php the_field('service_icon_4'); ?>" />
						</div>	
					 </div>

					 <div class="work-with-container">
					 	<div class="work-text">
							<h5><?php the_field('work_with_us'); ?></h5>
						</div>
						<div class="contact-button">
							<a href="<?php the_field('contact_us_button'); ?>">Contact Us </a>
						</div>
					 </div>




			

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>



