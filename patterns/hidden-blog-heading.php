<?php
/**
 * Title: Judul Blog
 * Slug: edukapro/hidden-blog-heading
 * Inserter: no
 * Categories: edukapro_page
 *
 * @package Eduka_Pro
 * @since Eduka Pro 1.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.4px","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
	<p class="has-text-color has-small-font-size" style="color:var(--wp--preset--color--accent);font-weight:600;letter-spacing:1.4px;text-transform:uppercase"><?php esc_html_e( 'Berita', 'edukapro' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
	<h1 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Berita &amp; Pengumuman', 'edukapro' ); ?></h1>
	<!-- /wp:heading -->
</div>
<!-- /wp:group -->
