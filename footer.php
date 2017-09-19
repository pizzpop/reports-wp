<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package reportible
 */

?>

	</main><!-- #content -->

	<footer class="home">
     
      <div class="contactbar">
        <div class="container--max">
          <span><img src="<?php echo get_template_directory_uri(); ?>/icons/twitter-white.svg" /></span>
          <span><img src="<?php echo get_template_directory_uri(); ?>/icons/slack-white.svg" /></span>
          <span><img src="<?php echo get_template_directory_uri(); ?>/icons/mail-white.svg" /></span>
          <a href="#contact">Contact Us</a>
        </div>
      </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
