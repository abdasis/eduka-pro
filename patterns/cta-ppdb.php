<?php
/**
 * Title: CTA PPDB
 * Slug: edukapro/cta-ppdb
 * Categories: edukapro_sections
 * Description: Pita full-width latar primary teks base, headline, periode, dan dua tombol (Daftar Sekarang, Cek Status).
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}},"color":{"background":"var:preset|color|primary"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-text-color has-background has-link-color" style="background-color:var(--wp--preset--color--primary);margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|fraunces","fontWeight":"600"}},"fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="font-family:var(--wp--preset--font-family--fraunces);font-weight:600"><?php esc_html_e( 'Pendaftaran PPDB Telah Dibuka', 'edukapro' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
		<p class="has-text-align-center has-large-font-size"><?php esc_html_e( 'Tahun Ajaran 2026/2027', 'edukapro' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
			<!-- wp:button {"style":{"color":{"background":"var:preset|color|accent","text":"var:preset|color|contrast"}}} -->
			<div class="wp-block-button has-text-color has-background" style="color:var(--wp--preset--color--contrast);background-color:var(--wp--preset--color--accent)"><a class="wp-block-button__link has-text-color has-background wp-element-button" href="/pendaftaran" style="color:var(--wp--preset--color--contrast);background-color:var(--wp--preset--color--accent)"><?php esc_html_e( 'Daftar Sekarang', 'edukapro' ); ?></a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/cek-status"><?php esc_html_e( 'Cek Status', 'edukapro' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->