<?php
/**
 * Title: Hero Beranda
 * Slug: edukapro/hero-home
 * Categories: edukapro_sections
 * Description: Hero full-width dengan gradient primary, eyebrow, headline display, subtext, dan dua tombol.
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}},"color":{"gradient":"linear-gradient(135deg, var(--wp--preset--color--primary) 0%, color-mix(in srgb, var(--wp--preset--color--primary) 70%, #000) 100%)"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","dimensions":{"minHeight":"70vh"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-text-color has-background has-link-color" style="background:linear-gradient(135deg, var(--wp--preset--color--primary) 0%, color-mix(in srgb, var(--wp--preset--color--primary) 70%, #000) 100%);min-height:70vh;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
			<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"1.4px","textTransform":"uppercase","fontWeight":"600"}},"textColor":"accent","fontSize":"small"} -->
			<p class="has-accent-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:1.4px;text-transform:uppercase"><?php esc_html_e( 'Selamat Datang', 'edukapro' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|fraunces","fontWeight":"600","lineHeight":"1.1"}},"fontSize":"xx-large"} -->
			<h1 class="wp-block-heading has-xx-large-font-size" style="font-family:var(--wp--preset--font-family--fraunces);font-weight:600;line-height:1.1"><?php esc_html_e( 'Membangun Generasi Cerdas Berkarakter', 'edukapro' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"lineHeight":"1.6"}},"fontSize":"large"} -->
			<p class="has-large-font-size" style="margin-top:var(--wp--preset--spacing--40);line-height:1.6"><?php esc_html_e( 'Sekolah unggulan yang memadukan akademik, karakter, dan keterampilan untuk mempersiapkan siswa menghadapi masa depan.', 'edukapro' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
				<!-- wp:button {"style":{"color":{"background":"var:preset|color|accent","text":"var:preset|color|contrast"}}} -->
				<div class="wp-block-button has-text-color has-background" style="color:var(--wp--preset--color--contrast);background-color:var(--wp--preset--color--accent)"><a class="wp-block-button__link has-text-color has-background wp-element-button" href="/pendaftaran" style="color:var(--wp--preset--color--contrast);background-color:var(--wp--preset--color--accent)"><?php esc_html_e( 'Daftar PPDB', 'edukapro' ); ?></a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/tentang"><?php esc_html_e( 'Pelajari Lebih Lanjut', 'edukapro' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
			<!-- wp:group {"style":{"color":{"background":"color-mix(in srgb, var(--wp--preset--color--accent) 25%, transparent)"},"dimensions":{"minHeight":"340px"},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"nowrap"}}} -->
			<div class="wp-block-group has-background" style="background:color-mix(in srgb, var(--wp--preset--color--accent) 25%, transparent);min-height:340px;display:flex;flex-direction:column;justify-content:center">
				<!-- wp:paragraph {"textAlign":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.4px","fontWeight":"600"}},"fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size" style="font-weight:600;text-transform:uppercase;letter-spacing:1.4px"><?php esc_html_e( 'Foto Sekolah', 'edukapro' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
