<?php
/**
 * Title: Visi & Misi
 * Slug: edukapro/visi-misi
 * Categories: edukapro_sections
 * Description: Latar surface. Heading, dua kolom — Visi (paragraf) dan Misi (list gaya checkmark).
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|60"}},"color":{"background":"var:preset|color|surface"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:var(--wp--preset--color--surface);margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|fraunces","fontWeight":"600"}},"fontSize":"x-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="font-family:var(--wp--preset--font-family--fraunces);font-weight:600"><?php esc_html_e( 'Visi & Misi', 'edukapro' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"},"margin":{"top":"var:preset|spacing|60"}}}} -->
		<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--60)">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|fraunces"}},"textColor":"primary"} -->
				<h3 class="wp-block-heading has-primary-color has-text-color" style="font-family:var(--wp--preset--font-family--fraunces)"><?php esc_html_e( 'Visi', 'edukapro' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}}} -->
				<p style="line-height:1.7"><?php esc_html_e( 'Menjadi lembaga pendidikan unggulan yang membentuk pribadi cerdas, berkarakter, dan berwawasan global berlandaskan nilai-nilai keimanan dan budi pekerti.', 'edukapro' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|fraunces"}},"textColor":"primary"} -->
				<h3 class="wp-block-heading has-primary-color has-text-color" style="font-family:var(--wp--preset--font-family--fraunces)"><?php esc_html_e( 'Misi', 'edukapro' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:list {"className":"is-style-checkmark-list"} -->
				<ul class="is-style-checkmark-list">
					<!-- wp:list-item -->
					<li><?php esc_html_e( 'Menyelenggarakan pendidikan holistik yang memadukan akademik dan karakter.', 'edukapro' ); ?></li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li><?php esc_html_e( 'Mengembangkan tenaga pendidik profesional dan berdedikasi.', 'edukapro' ); ?></li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li><?php esc_html_e( 'Membekali siswa dengan keterampilan abad 21 dan penguasaan teknologi.', 'edukapro' ); ?></li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li><?php esc_html_e( 'Membangun lingkungan sekolah yang religius, aman, dan inklusif.', 'edukapro' ); ?></li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li><?php esc_html_e( 'Menjalin kemitraan dengan keluarga dan masyarakat dalam mendidik generasi.', 'edukapro' ); ?></li>
					<!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
