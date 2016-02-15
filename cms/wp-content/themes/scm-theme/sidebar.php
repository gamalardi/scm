<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package scm
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<aside id="secondary" class="sidebar widget-area col-xs-12 col-sm-3" role="complementary">
		<?php dynamic_sidebar(); ?>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>
