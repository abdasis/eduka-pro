<?php
/**
 * Title: Ditulis Oleh
 * Slug: edukapro/hidden-written-by
 * Inserter: no
 * Categories: edukapro_query
 *
 * @package Eduka_Pro
 * @since Eduka Pro 1.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0.3em","margin":{"bottom":"var:preset|spacing|50"}}},"fontSize":"small","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:paragraph -->
	<p><?php esc_html_e( 'Oleh', 'edukapro' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:post-author-name {"isLink":true} /-->
	<!-- wp:paragraph -->
	<p>&middot;</p>
	<!-- /wp:paragraph -->
	<!-- wp:post-date {"isLink":true} /-->
</div>
<!-- /wp:group -->
