<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dawn
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php if(is_home() || is_single() || is_search() || is_archive()) { ?>
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<?php } ?>
</div><!-- #secondary -->
