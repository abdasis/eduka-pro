<?php
/**
 * Title: Statistik Sekolah
 * Slug: edukapro/statistik
 * Categories: edukapro_sections
 * Description: Pita full-width latar contrast dengan empat kolom angka besar (font fraunces) dan label.
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","right":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}},"color":{"background":"var:preset|color|contrast"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-text-color has-background has-link-color" style="background-color:var(--wp--preset--color--contrast);margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontFamily":"var:preset|font-family|fraunces","fontWeight":"600","lineHeight":"1.1"}},"fontSize":"xx-large"} -->
			<p class="has-text-align-center has-xx-large-font-size" style="font-family:var(--wp--preset--font-family--fraunces);font-weight:600;line-height:1.1"><?php esc_html_e( '1200+', 'edukapro' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","textColor":"muted","fontSize":"small"} -->
			<p class="has-text-align-center has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Siswa', 'edukapro' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontFamily":"var:preset|font-family|fraunces","fontWeight":"600","lineHeight":"1.1"}},"fontSize":"xx-large"} -->
			<p class="has-text-align-center has-xx-large-font-size" style="font-family:var(--wp--preset--font-family--fraunces);font-weight:600;line-height:1.1"><?php esc_html_e( '80', 'edukapro' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","textColor":"muted","fontSize":"small"} -->
			<p class="has-text-align-center has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Guru', 'edukapro' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontFamily":"var:preset|font-family|fraunces","fontWeight":"600","lineHeight":"1.1"}},"fontSize":"xx-large"} -->
			<p class="has-text-align-center has-xx-large-font-size" style="font-family:var(--wp--preset--font-family--fraunces);font-weight:600;line-height:1.1"><?php esc_html_e( '30', 'edukapro' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","textColor":"muted","fontSize":"small"} -->
			<p class="has-text-align-center has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Ekstrakurikuler', 'edukapro' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontFamily":"var:preset|font-family|fraunces","fontWeight":"600","lineHeight":"1.1"}},"fontSize":"xx-large"} -->
			<p class="has-text-align-center has-xx-large-font-size" style="font-family:var(--wp--preset--font-family--fraunces);font-weight:600;line-height:1.1"><?php esc_html_e( '25', 'edukapro' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","textColor":"muted","fontSize":"small"} -->
			<p class="has-text-align-center has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Tahun', 'edukapro' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
