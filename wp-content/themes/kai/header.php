<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kai
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'kai' ); ?></a>

	<header id="masthead" class="site-header grid-wide">
		<div class="site-branding col-3-12">
			<?php the_custom_logo();?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation col-9-12">

			<?php
				wp_nav_menu(array(
			     'container_id' => 'cssmenu',
			     'theme_location' => 'menu-1',
			     'fallback_cb'       => 'Kai_Menu_Walker::fallback',
			     'walker' => new Kai_Menu_Walker(),
			    ));
			?>
		</nav><!-- #site-navigation -->
		<?php do_action('pro-portfolio-intro'); ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
