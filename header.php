<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package reportible
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Lato:700|Open+Sans:300,400" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site wrapper">
	<!-- 	
	<a class="skip-link screen-reader-text" href="#content">
		<?php  // esc_html_e( 'Skip to content', 'reportible' ); ?>
	</a> -->
	<header id="masthead" class="site-header">
    	<nav>
      		<div class="container--max">
	      		<?php
				the_custom_logo(); ?>
				<a class="button" href="./sign-in.html">Sign Up</a>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
				?>
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"></button>		
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	<main>
