<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lisalemons
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lisalemons' ); ?></a>

	<header id="masthead" class="site-header">
        <nav id="site-navigation" class="border-bottom-yellow navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <!-- Your site title as branding in the menu -->
                <?php if ( ! has_custom_logo() ) { ?>

                <?php if ( is_front_page() && is_home() ) : ?>

                    <h1 class="navbar-brand site-title mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>

                <?php else : ?>

                    <a class="navbar-brand site-title" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>

                <?php endif; ?>


                <?php } else {
                    the_custom_logo();
                } ?><!-- end custom logo -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- The WordPress Menu goes here -->
	            <?php wp_nav_menu(
		            array(
			            'theme_location'  => 'menu-1',
			            'container_class' => 'collapse navbar-collapse',
			            'container_id'    => 'navbarNavDropdown',
			            'menu_class'      => 'navbar-nav',
			            'fallback_cb'     => '',
			            'menu_id'         => 'primary-menu',
			            'walker'          => new WP_Bootstrap_Navwalker(),
		            )
	            ); ?>

            </div><!-- .container -->
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
