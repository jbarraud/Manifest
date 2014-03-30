<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package manifest
 * @since Manifest 2.0
 */
?>

			<?php 
				if ( has_nav_menu( 'social' ) ) {
			?>
			<header class="social-header">
				<div class="entry-meta">
							<span>Elsewhere</span>
			
				</div><!-- .entry-meta -->
			</header>			
			<?php 
					wp_nav_menu(
						array(
							'theme_location'  => 'social',
							'container'       => 'nav',
							'container_id'    => 'menu-social-media-footer',
							'container_class' => 'menu',
							'menu_id'         => 'menu-social-media-footer-items',
							'menu_class'      => 'menu-items',
							'link_before'     => '<span class="screen-reader-text">',
							'link_after'      => '</span>',
							'depth'           => 1,
							'fallback_cb'     => '',
						)
					);
				} 
			 ?>
		<!-- .site-navigation .main-navigation -->

	</div><!-- #main .site-main -->

	<div class="widgets">

<?php get_sidebar(); ?>

	</div>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'manifest_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'manifest' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'manifest' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'manifest' ), 'Manifest', '<a href="http://jimbarraud.com/" rel="designer">Jim Barraud</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>