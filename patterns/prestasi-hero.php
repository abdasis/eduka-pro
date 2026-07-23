<?php
/**
 * Title: Hero Prestasi
 * Slug: edukapro/prestasi-hero
 * Categories: edukapro_sections
 * Description: Hero khusus arsip prestasi dengan eyebrow, headline, subteks, dan baris statistik ringkas.
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}},"color":{"gradient":"linear-gradient(135deg, var(--wp--preset--color--primary) 0%, color-mix(in srgb, var(--wp--preset--color--primary) 70%, #000) 100%)"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"textColor":"base","dimensions":{"minHeight":"60vh"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-text-color has-background has-link-color" style="background:linear-gradient(135deg, var(--wp--preset--color--primary) 0%, color-mix(in srgb, var(--wp--preset--color--primary) 70%, #000) 100%);min-height:60vh;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"nowrap"}} -->
	<div class="wp-block-group alignwide" style="display:flex;flex-direction:column;justify-content:center">
		<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"1.4px","textTransform":"uppercase","fontWeight":"600"}},"textColor":"accent","fontSize":"small"} -->
		<p class="has-accent-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:1.4px;text-transform:uppercase"><?php esc_html_e( 'Prestasi & Penghargaan', 'edukapro' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":1,"className":"prestasi-hero-title","style":{"typography":{"fontFamily":"var:preset|font-family|fraunces","fontWeight":"600","lineHeight":"1.1"}},"fontSize":"xx-large"} -->
		<h1 class="wp-block-heading prestasi-hero-title has-xx-large-font-size" style="font-family:var(--wp--preset--font-family--fraunces);font-weight:600;line-height:1.1"><?php esc_html_e( 'Jejak Prestasi Siswa', 'edukapro' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"lineHeight":"1.6"}},"fontSize":"large"} -->
		<p class="has-large-font-size" style="margin-top:var(--wp--preset--spacing--40);line-height:1.6"><?php esc_html_e( 'Daftar penghargaan siswa lintas tingkat kompetisi — kabupaten, provinsi, nasional, hingga internasional.', 'edukapro' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"},"blockGap":{"left":"var:preset|spacing|50","top":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
		<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60);display:flex;flex-wrap:wrap;column-gap:var(--wp--preset--spacing--50);row-gap:var(--wp--preset--spacing--30)">
			<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
			<div class="wp-block-group" style="display:flex;flex-direction:column;row-gap:0.25rem">
				<!-- wp:paragraph {"className":"prestasi-stat-num","style":{"typography":{"fontFamily":"var:preset|font-family|fraunces","fontWeight":"600","fontSize":"2.5rem","lineHeight":"1"}}} -->
				<p class="prestasi-stat-num" style="font-family:var(--wp--preset--font-family--fraunces);font-weight:600;font-size:2.5rem;line-height:1"><?php esc_html_e( '120+', 'edukapro' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.2px","fontWeight":"500"}},"fontSize":"small"} -->
				<p class="has-small-font-size" style="font-weight:500;letter-spacing:1.2px;text-transform:uppercase"><?php esc_html_e( 'Penghargaan', 'edukapro' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
			<div class="wp-block-group" style="display:flex;flex-direction:column;row-gap:0.25rem">
				<!-- wp:paragraph {"className":"prestasi-stat-num","style":{"typography":{"fontFamily":"var:preset|font-family|fraunces","fontWeight":"600","fontSize":"2.5rem","lineHeight":"1"}}} -->
				<p class="prestasi-stat-num" style="font-family:var(--wp--preset--font-family--fraunces);font-weight:600;font-size:2.5rem;line-height:1"><?php esc_html_e( '4', 'edukapro' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.2px","fontWeight":"500"}},"fontSize":"small"} -->
				<p class="has-small-font-size" style="font-weight:500;letter-spacing:1.2px;text-transform:uppercase"><?php esc_html_e( 'Tingkat Kompetisi', 'edukapro' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
			<div class="wp-block-group" style="display:flex;flex-direction:column;row-gap:0.25rem">
				<!-- wp:paragraph {"className":"prestasi-stat-num","style":{"typography":{"fontFamily":"var:preset|font-family|fraunces","fontWeight":"600","fontSize":"2.5rem","lineHeight":"1"}}} -->
				<p class="prestasi-stat-num" style="font-family:var(--wp--preset--font-family--fraunces);font-weight:600;font-size:2.5rem;line-height:1"><?php esc_html_e( '8', 'edukapro' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.2px","fontWeight":"500"}},"fontSize":"small"} -->
				<p class="has-small-font-size" style="font-weight:500;letter-spacing:1.2px;text-transform:uppercase"><?php esc_html_e( 'Tahun Berprestasi', 'edukapro' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->