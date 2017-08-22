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
      <div class="container--max">
        <div class="grid--flex grid--flex-start grid--75">
          <div class="col--25">
            <h4>Reportible</h4>
            <ul class="list--unstyled">
              <li><a href="#">Product</a></li>
              <li><a href="#">Enterprise</a></li>
              <li><a href="#">Pricing</a></li>
              <li><a href="#">Support</a></li>
              <li><a href="#">API</a></li>
            </ul>
          </div>
          <div class="col--25">
            <h4>Culture Stuff</h4>
            <ul class="list--unstyled">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Jobs</a></li>
              <li><a href="#">Blog</a></li>
            </ul>
          </div>
          <div class="col--25">
            <h4>Legal</h4>
            <ul class="list--unstyled">
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Security</a></li>
              <li><a href="#">Terms of Service</a></li>
              <li><a href="#">Policies</a></li>
            </ul>
          </div>
          <div class="col--25">
            <h4>Helpful Links</h4>
            <ul class="list--unstyled">
              <li><a href="#">FAQs</a></li>
            </ul>
          </div>
        </div>
      </div>
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
