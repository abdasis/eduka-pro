<?php
/**
 * Title: Arsip Prestasi
 * Slug: edukapro/prestasi-archive
 * Categories: edukapro_query
 * Description: Grid arsip prestasi dengan kartu kaya (gambar, badge tingkat, peraih, judul, tanggal), filter visual, dan pagination.
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|60"}},"color":{"background":"var:preset|color|surface"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:var(--wp--preset--color--surface);margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
		<div class="wp-block-group" style="display:flex;flex-direction:column;row-gap:var(--wp--preset--spacing--20)">
			<!-- wp:paragraph {"textAlign":"center","style":{"typography":{"letterSpacing":"1.4px","textTransform":"uppercase","fontWeight":"600"}},"textColor":"primary","fontSize":"small"} -->
			<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:1.4px;text-transform:uppercase"><?php esc_html_e( 'Arsip', 'edukapro' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|fraunces","fontWeight":"600"}},"fontSize":"x-large"} -->
			<h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="font-family:var(--wp--preset--font-family--fraunces);font-weight:600"><?php esc_html_e( 'Prestasi Terbaru', 'edukapro' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textAlign":"center","textColor":"muted","style":{"typography":{"lineHeight":"1.6"}},"fontSize":"medium"} -->
			<p class="has-text-align-center has-muted-color has-text-color has-medium-font-size" style="line-height:1.6"><?php esc_html_e( 'Kumpulan prestasi siswa dari berbagai bidang dan tingkat kompetisi.', 'edukapro' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- ponytail: filter bar dekoratif tanpa JS — ceiling upgrade: sambungkan ke WP taxonomy filter saat backend siap. -->
		<!-- wp:group {"className":"prestasi-filter","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":{"left":"0.5rem","top":"0.5rem"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
		<div class="wp-block-group prestasi-filter" style="margin-top:var(--wp--preset--spacing--50);display:flex;flex-wrap:wrap;column-gap:0.5rem;row-gap:0.5rem">
			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
			<p style="font-weight:600"><a href="#" class="prestasi-filter__pill is-active"><?php esc_html_e( 'Semua', 'edukapro' ); ?></a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><a href="#" class="prestasi-filter__pill"><?php esc_html_e( 'Kabupaten', 'edukapro' ); ?></a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><a href="#" class="prestasi-filter__pill"><?php esc_html_e( 'Provinsi', 'edukapro' ); ?></a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><a href="#" class="prestasi-filter__pill"><?php esc_html_e( 'Nasional', 'edukapro' ); ?></a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><a href="#" class="prestasi-filter__pill"><?php esc_html_e( 'Internasional', 'edukapro' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:query {"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-query alignwide" style="margin-top:var(--wp--preset--spacing--60)">
			<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
				<!-- wp:group {"className":"prestasi-card","style":{"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem","left":"0.5rem","right":"0.5rem"},"blockGap":"var:preset|spacing|30"},"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"1rem"},"color":{"background":"var:preset|color|base"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
				<div class="wp-block-group prestasi-card has-border-color has-background" style="border-color:var(--wp--preset--color--border);border-width:1px;border-style:solid;border-radius:1rem;background-color:var(--wp--preset--color--base);padding-top:0.5rem;padding-right:0.5rem;padding-bottom:0.5rem;padding-left:0.5rem;display:flex;flex-direction:column;row-gap:var(--wp--preset--spacing--30)">
					<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"border":{"radius":"0.5rem"}}} /-->
					<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0.25rem","left":"0.25rem","right":"0.25rem"},"blockGap":"0.5rem"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
					<div class="wp-block-group" style="padding-top:0;padding-right:0.25rem;padding-bottom:0.25rem;padding-left:0.25rem;display:flex;flex-direction:column;row-gap:0.5rem">
						<!-- wp:post-terms {"term":"post_tag","className":"prestasi-badge"} /-->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"},"spacing":{"margin":{"top":"0"}}},"textColor":"muted"} -->
						<p class="has-muted-color has-text-color" style="font-size:0.875rem;margin-top:0"><?php esc_html_e( 'Peraih:', 'edukapro' ); ?> <!-- wp:post-author-name {"fontWeight":"600","isLink":false} /--></p>
						<!-- /wp:paragraph -->
						<!-- wp:post-title {"isLink":true,"fontSize":"large","style":{"typography":{"fontWeight":"600"}}} /-->
						<!-- wp:post-date {"fontSize":"small"} /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			<!-- /wp:post-template -->

			<!-- wp:query-no-results -->
			<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
			<p class="has-text-align-center has-muted-color has-text-color"><?php esc_html_e( 'Belum ada prestasi tercatat.', 'edukapro' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- /wp:query-no-results -->

			<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--20)">
				<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
					<!-- wp:query-pagination-previous /-->
					<!-- wp:query-pagination-numbers /-->
					<!-- wp:query-pagination-next /-->
				<!-- /wp:query-pagination -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:query -->

		<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/prestasi/prestasi/"><?php esc_html_e( 'Lihat Semua Prestasi', 'edukapro' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->