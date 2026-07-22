<?php
/**
 * Title: 404
 * Slug: edukapro/hidden-404
 * Inserter: no
 * Categories: edukapro_page
 *
 * @package Eduka_Pro
 * @since Eduka Pro 1.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"level":1,"textAlign":"center","fontSize":"xx-large"} -->
		<h1 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php esc_html_e( 'Halaman Tidak Ditemukan', 'edukapro' ); ?></h1>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><?php esc_html_e( 'Maaf, halaman yang Anda cari tidak ada.', 'edukapro' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"edukapro/hidden-search"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
