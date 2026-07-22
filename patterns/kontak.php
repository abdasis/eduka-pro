<?php
/**
 * Title: Kontak
 * Slug: edukapro/kontak
 * Categories: edukapro_sections
 * Description: Dua kolom — kiri heading "Hubungi Kami" plus daftar kontak (alamat, telepon, email), kanan placeholder info.
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"55%"} -->
		<div class="wp-block-column" style="flex-basis:55%">
			<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"1.4px","textTransform":"uppercase","fontWeight":"600"}},"textColor":"accent","fontSize":"small"} -->
			<p class="has-accent-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:1.4px;text-transform:uppercase"><?php esc_html_e( 'Kontak', 'edukapro' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"style":{"typography":{"fontFamily":"var:preset|font-family|fraunces","fontWeight":"600"}},"fontSize":"x-large"} -->
			<h2 class="wp-block-heading has-x-large-font-size" style="font-family:var(--wp--preset--font-family--fraunces);font-weight:600"><?php esc_html_e( 'Hubungi Kami', 'edukapro' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}}} -->
			<p style="line-height:1.7"><?php esc_html_e( 'Punya pertanyaan seputar pendaftaran atau program sekolah? Tim kami siap membantu Anda.', 'edukapro' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
			<ul class="wp-block-list" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Alamat: Jl. Pendidikan No. 1, Kota Sekolah', 'edukapro' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Telepon: (021) 123-4567', 'edukapro' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Email: info@sekolah.id', 'edukapro' ); ?></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"45%"} -->
		<div class="wp-block-column" style="flex-basis:45%">
			<!-- wp:group {"style":{"color":{"background":"var:preset|color|surface"},"dimensions":{"minHeight":"320px"},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"nowrap"}}} -->
			<div class="wp-block-group has-background" style="background-color:var(--wp--preset--color--surface);min-height:320px;display:flex;flex-direction:column;justify-content:center">
				<!-- wp:paragraph {"textAlign":"center","textColor":"muted","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.4px"}},"fontSize":"small"} -->
				<p class="has-text-align-center has-muted-color has-text-color has-small-font-size" style="text-transform:uppercase;letter-spacing:1.4px"><?php esc_html_e( 'Peta Lokasi', 'edukapro' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->