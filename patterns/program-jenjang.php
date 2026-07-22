<?php
/**
 * Title: Program Jenjang
 * Slug: edukapro/program-jenjang
 * Categories: edukapro_sections
 * Description: Heading dan empat kartu jenjang (TK, SD, SMP, SMA) dengan pita warna, judul, deskripsi, dan tautan.
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|fraunces","fontWeight":"600"}},"fontSize":"x-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="font-family:var(--wp--preset--font-family--fraunces);font-weight:600"><?php esc_html_e( 'Program Jenjang', 'edukapro' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
		<p class="has-text-align-center has-muted-color has-text-color"><?php esc_html_e( 'Jenjang pendidikan kami dari taman kanak-kanak hingga sekolah menengah atas.', 'edukapro' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|60"}}}} -->
		<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--60)">
			<!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"var:preset|spacing|40","left":"0"}}}} -->
			<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0">
				<!-- wp:group {"style":{"color":{"background":"var:preset|color|primary"},"dimensions":{"minHeight":"24px"}}} -->
				<div class="wp-block-group has-background" style="background-color:var(--wp--preset--color--primary);min-height:24px"></div>
				<!-- /wp:group -->

				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"fontFamily":"var:preset|font-family|fraunces"}}} -->
				<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--fraunces);margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e( 'TK', 'edukapro' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
				<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Pendidikan anak usia dini yang menyenangkan dan kreatif.', 'edukapro' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}} ,"fontSize":"small"} -->
				<p class="has-small-font-size" style="margin-top:var(--wp--preset--spacing--30)"><a href="/jenjang/tk"><?php esc_html_e( 'Selengkapnya', 'edukapro' ); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"var:preset|spacing|40","left":"0"}}}} -->
			<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0">
				<!-- wp:group {"style":{"color":{"background":"var:preset|color|accent"},"dimensions":{"minHeight":"24px"}}} -->
				<div class="wp-block-group has-background" style="background-color:var(--wp--preset--color--accent);min-height:24px"></div>
				<!-- /wp:group -->

				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"fontFamily":"var:preset|font-family|fraunces"}}} -->
				<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--fraunces);margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e( 'SD', 'edukapro' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
				<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Fondasi akademik dan karakter yang kuat untuk siswa SD.', 'edukapro' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontSize":"small"} -->
				<p class="has-small-font-size" style="margin-top:var(--wp--preset--spacing--30)"><a href="/jenjang/sd"><?php esc_html_e( 'Selengkapnya', 'edukapro' ); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"var:preset|spacing|40","left":"0"}}}} -->
			<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0">
				<!-- wp:group {"style":{"color":{"background":"var:preset|color|primary-soft"},"dimensions":{"minHeight":"24px"}}} -->
				<div class="wp-block-group has-background" style="background-color:var(--wp--preset--color--primary-soft);min-height:24px"></div>
				<!-- /wp:group -->

				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"fontFamily":"var:preset|font-family|fraunces"}}} -->
				<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--fraunces);margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e( 'SMP', 'edukapro' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
				<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Pengembangan kritis, kreatif, dan kepemimpinan siswa SMP.', 'edukapro' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontSize":"small"} -->
				<p class="has-small-font-size" style="margin-top:var(--wp--preset--spacing--30)"><a href="/jenjang/smp"><?php esc_html_e( 'Selengkapnya', 'edukapro' ); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"var:preset|spacing|40","left":"0"}}}} -->
			<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0">
				<!-- wp:group {"style":{"color":{"background":"var:preset|color|contrast"},"dimensions":{"minHeight":"24px"}}} -->
				<div class="wp-block-group has-background" style="background-color:var(--wp--preset--color--contrast);min-height:24px"></div>
				<!-- /wp:group -->

				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"fontFamily":"var:preset|font-family|fraunces"}}} -->
				<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--fraunces);margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e( 'SMA', 'edukapro' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
				<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Persiapan perguruan tinggi dan karier bagi siswa SMA.', 'edukapro' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontSize":"small"} -->
				<p class="has-small-font-size" style="margin-top:var(--wp--preset--spacing--30)"><a href="/jenjang/sma"><?php esc_html_e( 'Selengkapnya', 'edukapro' ); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
