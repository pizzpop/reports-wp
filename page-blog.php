<?php 
/*
Template Name: Blog
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

<?php while ( have_posts() ) : the_post(); ?>
      <div class="hero hero--small text--center">
        <div class="container--max grid--flex grid--flex-start">
          <div class="hero--content">
            <h1><?php the_field('blog_header_text'); ?></h1>
            <p><?php the_field('blog_header_paragraph'); ?></p>
          </div>
        </div>
      </div>
<?php endwhile; // end of the loop. ?>

<div class="widthWrapper">

     <article>

		<?php // Display blog posts on any page @ https://m0n.co/l
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('posts_per_page=5' . '&paged='.$paged);
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

		<h2><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
		<?php the_excerpt(); ?>

		<?php endwhile; ?>

		<?php if ($paged > 1) { ?>

		<?php } ?>

		<?php wp_reset_postdata(); ?>

	</article>
</div>

<div class="colorblock colorblock--green">
      <div class="container--max text--center">
            <h2><?php the_field('content_block_header'); ?></h2>
            <p><?php the_field('content_block_paragraph'); ?></p>
			<a href="#" class="link--btn"><?php the_field('content_block_cta'); ?></a>
      </div>
</div>


<?php 
get_footer();

?>
