<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package savannatech
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'savannatech' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-header-inner">
			<div class="site-branding">
				<a href="">
					<?php the_custom_logo();?>
				</a>
			</div><!-- .site-branding -->





			<nav id="site-navigation" class="main-navigation site-sidebar">
			
			
			<div class="nav-logo-mobile">
				<?php the_custom_logo();?>
			</div> <!-- mobile logo -->

			<!-- display primary navigation -->
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>

			
			</nav><!-- #site-navigation -->

			<div class="nav-mobile">
					<span class="bar one"></span>
					<span class="bar two"></span>
					<span class="bar three"></span>
			</div>
		</div>	
	</header><!-- #masthead -->
