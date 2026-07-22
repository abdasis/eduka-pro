<?php
/**
 * Title: Fasilitas
 * Slug: edukapro/fasilitas
 * Categories: edukapro_sections
 * Description: Heading dan grid 3 kolom (dua baris) kartu fasilitas dengan placeholder warna, judul, dan deskripsi.
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|fraunces","fontWeight":"600"}},"fontSize":"x-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="font-family:var(--wp--preset--font-family--fraunces);font-weight:600"><?php esc_html_e( 'Fasilitas', 'edukapro' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|60"}}}} -->
		<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--60)">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"color":{"background":"var:preset|color|primary-soft"},"dimensions":{"minHeight":"120px"}}} -->
				<div class="wp-block-group has-background" style="background-color:var(--wp--preset--color--primary-soft);min-height:120px"></div>
				<!-- /wp:group -->
				<!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}},"typography":{"fontFamily":"var:preset|font-family|fraunces"}}} -->
				<h4 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--fraunces);margin-top:var(--wp--preset--spacing--30)"><?php esc_html_e( 'Perpustakaan', 'edukapro' ); ?></h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
				<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Koleksi buku lengkap dan ruang baca yang nyaman.', 'edukapro' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"color":{"background":"var:preset|color|primary-soft"},"dimensions":{"minHeight":"120px"}}} -->
				<div class="wp-block-group has-background" style="background-color:var(--wp--preset--color--primary-soft);min-height:120px"></div>
				<!-- /wp:group -->
				<!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}},"typography":{"fontFamily":"var:preset|font-family|fraunces"}}} -->
				<h4 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--fraunces);margin-top:var(--wp--preset--spacing--30)"><?php esc_html_e( 'Laboratorium', 'edukapro' ); ?></h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
				<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Lab IPA, komputer, dan bahasa yang terlengkap.', 'edukapro' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"color":{"background":"var:preset|color|primary-soft"},"dimensions":{"minHeight":"120px"}}} -->
				<div class="wp-block-group has-background" style="background-color:var(--wp--preset--color--primary-soft);min-height:120px"></div>
				<!-- /wp:group -->
				<!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}},"typography":{"fontFamily":"var:preset|font-family|fraunces"}}} -->
				<h4 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--fraunces);margin-top:var(--wp--preset--spacing--30)"><?php esc_html_e( 'Lapangan', 'edukapro' ); ?></h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
				<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Lapangan olahraga serbaguna untuk semua jenjang.', 'edukapro' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|50"}}}} -->
		<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--50)">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"color":{"background":"var:preset|color|primary-soft"},"dimensions":{"minHeight":"120px"}}} -->
				<div class="wp-block-group has-background" style="background-color:var(--wp--preset--color--primary-soft);min-height:120px"></div>
				<!-- /wp:group -->
				<!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}},"typography":{"fontFamily":"var:preset|font-family|fraunces"}}} -->
				<h4 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--fraunces);margin-top:var(--wp--preset--spacing--30)"><?php esc_html_e( 'Mushola', 'edukapro' ); ?></h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
				<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Tempat ibadah yang bersih dan nyaman untuk siswa.', 'edukapro' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"color":{"background":"var:preset|color|primary-soft"},"dimensions":{"minHeight":"120px"}}} -->
				<div class="wp-block-group has-background" style="background-color:var(--wp--preset--color--primary-soft);min-height:120px"></div>
				<!-- /wp:group -->
				<!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}},"typography":{"fontFamily":"var:preset|font-family|fraunces"}}} -->
				<h4 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--fraunces);margin-top:var(--wp--preset--spacing--30)"><?php esc_html_e( 'Kantin', 'edukapro' ); ?></h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
				<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Kantin sehat dengan menu bergizi dan terjangkau.', 'edukapro' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"color":{"background":"var:preset|color|primary-soft"},"dimensions":{"minHeight":"120px"}}} -->
				<div class="wp-block-group has-background" style="background-color:var(--wp--preset--color--primary-soft);min-height:120px"></div>
				<!-- /wp:group -->
				<!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}},"typography":{"fontFamily":"var:preset|font-family|fraunces"}}} -->
				<h4 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--fraunces);margin-top:var(--wp--preset--spacing--30)"><?php esc_html_e( 'Ruang Multimedia', 'edukapro' ); ?></h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
				<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Ruang berbasis teknologi untuk pembelajaran modern.', 'edukapro' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->