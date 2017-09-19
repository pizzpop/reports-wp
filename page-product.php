<?php 
/*
Template Name: Product
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
            <h1><?php the_field('product_header_text'); ?></h1>
            <p><?php the_field('product_header_paragraph'); ?></p>
          </div>
        </div>
      </div>

<?php if( have_rows('product_card') ): ?>
		<?php while ( have_rows('product_card') ) : the_row(); ?>
			<div id="section" class="content-area">
				<div class="container">
					<div id="halfimg" class="half">
						<img src="<?php the_sub_field('product_card_image'); ?>">
					</div>
					<div id="halftext" class="half">
						<h2><?php the_sub_field('product_card_header'); ?></h2>
                        <p><?php the_sub_field('product_card_paragraph'); ?></p>
					</div>
				</div>
			</div>
<?php endwhile; // end of the loop. ?>
<?php endif; ?>

<?php endwhile; // end of the loop. ?>
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
