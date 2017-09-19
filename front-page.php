<?php 
/*
Template Name: Home
Template Post Type: post, page, event
*/
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package reportible
 */

get_header(); 

?>

<div class="hero text--right wave">
	<div class="container--max grid--flex grid--flex-start">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="img--holder">
				<img src="<?php the_field('hero_image'); ?>" />
			</div>
			<div class="skew--left">
				<div class="hero--content">
					<h1><?php the_field('hero_text'); ?></h1>
					<p><?php the_field('hero_paragraph'); ?></p>
                    <a href="/[mc4wp_form id="49"]" class="link--btn"> Sign Up</a>                    
				</div>
			</div>			
		<?php endwhile; // end of the loop. ?>
	</div><!-- #content -->
</div><!-- #primary -->

<?php
get_footer();
