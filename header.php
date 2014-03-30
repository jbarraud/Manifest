<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package manifest
 * @since Manifest 2.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<script type="text/javascript" src="//use.typekit.net/mqz1dpf.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>
<?php
	$content_link_color = get_option('content_link_color');
?>
<style>
	body a { color:  <?php echo $content_link_color; ?>; }
</style>

</head>

<body <?php body_class(); ?>>


<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) { ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="custom-header" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<img src="<?php header_image(); ?>" alt="" />
			</a>
		<?php } // if ( ! empty( $header_image ) ) ?>
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

		<nav role="navigation" class="site-navigation main-navigation">
			<h1 class="assistive-text"><?php _e( 'Menu', 'manifest' ); ?></h1>
			<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'manifest' ); ?>"><?php _e( 'Skip to content', 'manifest' ); ?></a></div>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- .site-navigation .main-navigation -->

		<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>

			<?php 
				if ( has_nav_menu( 'social-top' ) ) {
					wp_nav_menu(
						array(
							'theme_location'  => 'social-top',
							'container'       => 'nav',
							'container_id'    => 'menu-social-media-header',
							'container_class' => 'menu-social',
							'menu_id'         => 'menu-social-media-header-items',
							'menu_class'      => 'menu-items',
							'link_before'     => '<span class="screen-reader-text">',
							'link_after'      => '</span>',
							'depth'           => 1,
							'fallback_cb'     => '',
						)
					);
				} 
			 ?>
	</header><!-- #masthead .site-header -->




	<div id="main" class="site-main">
