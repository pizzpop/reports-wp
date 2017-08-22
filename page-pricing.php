<?php 
/*
Template Name: Pricing
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

$card_color_array = ['green', 'blue', 'violet'];

?>

<?php while ( have_posts() ) : the_post(); ?>
      <div class="hero hero--small text--center">
        <div class="container--max grid--flex grid--flex-start">
          <div class="hero--content">
            <h1><?php the_field('pricing_header_text'); ?></h1>
            <p><?php the_field('pricing_header_paragraph'); ?></p>
          </div>
        </div>
      </div>


	<?php if( have_rows('pricing_card') ): $colorCount = 0; ?>
	 	<div class="container--max grid--flex grid--flex-start card--row">
	 
	    <?php while( have_rows('pricing_card') ): the_row(); ?>


	        <div class="col card">
	          <div class="card--top card--top-<?php echo $card_color_array[$colorCount]; ?>">
	            <h2><?php the_sub_field('card_label'); ?></h2>
	            <p><?php the_sub_field('card_description'); ?></p>
	            <div class="price">
	              <h3>$<?php the_sub_field('card_price'); ?></h3>
	              <p><?php the_sub_field('card_price_desc'); ?></p>
	            </div>
	            <a class="link--btn" href="#"><?php the_sub_field('card_button_text'); ?></a>
	          </div>
	          <div class="card--bottom">
				<?php if( have_rows('card_list') ): ?>
				 
				    <ul>
				 
				    <?php while( have_rows('card_list') ): the_row(); ?>
				 
				        <li><?php the_sub_field('card_list_item'); ?></li>
				        
				    <?php endwhile; ?>
				 
				    </ul>
				 
				<?php endif; ?>
	          </div>
	        </div>    	
	        
	    <?php 
	    	$colorCount++;
	    	endwhile; ?>
	 
	    </div>
	 
	<?php endif; ?>

<?php endwhile; // end of the loop. ?>

<?php
get_footer();
