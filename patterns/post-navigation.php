<?php
/**
 * Title: Navigasi Pos
 * Slug: edukapro/post-navigation
 * Categories: edukapro_query
 * Description: Tautan pos sebelumnya dan berikutnya.
 * Block Types: core/post-navigation-link
 *
 * @package Eduka_Pro
 * @since Eduka Pro 1.0
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"ariaLabel":"<?php esc_attr_e( 'Navigasi pos', 'edukapro' ); ?>","tagName":"nav","align":"wide","style":{"border":{"top":{"color":"var:preset|color|border","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<nav class="wp-block-group alignwide" aria-label="<?php esc_attr_e( 'Navigasi pos', 'edukapro' ); ?>" style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
		<!-- wp:post-navigation-link {"type":"previous","showTitle":true,"arrow":"arrow"} /-->
		<!-- wp:post-navigation-link {"showTitle":true,"arrow":"arrow"} /-->
	</nav>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
