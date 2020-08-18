<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package responsiveblogily
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="featured-sidebar widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
<div class="frame_ads">
	<iframe class="frame_ads_cont" src="https://www.google.vn"></iframe>
</div>
<script>
document.getElementByClassname('frame_ads_cont').contentWindow.document.body.innerHTML
</script>