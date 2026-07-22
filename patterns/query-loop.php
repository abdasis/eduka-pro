<?php
/**
 * Title: Daftar Pos Satu Kolom
 * Slug: edukapro/query-loop
 * Categories: edukapro_query
 * Block Types: core/query
 * Description: Daftar pos satu kolom dengan gambar unggulan, judul, tanggal, dan ringkasan.
 *
 * @package Eduka_Pro
 * @since Eduka Pro 1.0
 */

?>
<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-query alignfull">
	<!-- wp:post-template {"align":"full","layout":{"type":"default"}} -->
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","align":"full"} /-->
			<!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->
			<!-- wp:post-date {"isLink":true,"fontSize":"small"} /-->
			<!-- wp:post-excerpt /-->
		</div>
		<!-- /wp:group -->
		<!-- wp:separator {"style":{"color":{"background":"var:preset|color|border"}}} -->
		<hr class="wp-block-separator has-css-opacity" style="background-color:var(--wp--preset--color--border)"/>
		<!-- /wp:separator -->
	<!-- /wp:post-template -->

	<!-- wp:query-no-results -->
	<!-- wp:paragraph -->
	<p><?php esc_html_e( 'Tidak ada konten ditemukan.', 'edukapro' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- /wp:query-no-results -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
			<!-- wp:query-pagination-previous /-->
			<!-- wp:query-pagination-numbers /-->
			<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:query -->
