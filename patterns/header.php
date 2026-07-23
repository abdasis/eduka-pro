<?php
/**
 * Title: Header
 * Slug: edukapro/header
 * Categories: edukapro_header
 * Block Types: core/template-part/header
 * Description: Header standar situs sekolah: top bar identitas (NPSN + Akreditasi) dan portal cepat, brand dua baris (judul + tagline), navigasi, pencarian, CTA PPDB.
 *
 * @package Eduka_Pro
 * @since Eduka Pro 1.0
 */

?>
<!-- wp:group {"align":"full","className":"edukapro-header-wrap","style":{"position":{"type":"sticky","top":"0px"},"color":{"background":"var:preset|color|base"},"border":{"bottom":{"color":"var:preset|color|border","width":"1px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull edukapro-header-wrap has-base-background-color has-border-color" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px">
	<!-- wp:group {"align":"full","className":"edukapro-topbar","style":{"color":{"background":"var:preset|color|contrast","text":"var:preset|color|base"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignfull edukapro-topbar has-contrast-background-color has-base-color has-text-color has-background" style="background-color:var(--wp--preset--color--contrast);color:var(--wp--preset--color--base);padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"edukapro-badge-chip has-small-font-size","fontSize":"small"} -->
			<p class="edukapro-badge-chip has-small-font-size"><?php esc_html_e( 'NPSN: 20100001', 'edukapro' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"edukapro-badge-chip has-small-font-size","fontSize":"small"} -->
			<p class="edukapro-badge-chip has-small-font-size"><?php esc_html_e( 'Akreditasi A', 'edukapro' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"edukapro-portal-link has-small-font-size","fontSize":"small"} -->
			<p class="edukapro-portal-link has-small-font-size"><a href="<?php echo esc_url( home_url( '/akademik' ) ); ?>"><?php esc_html_e( 'Akademik', 'edukapro' ); ?></a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"edukapro-portal-link has-small-font-size","fontSize":"small"} -->
			<p class="edukapro-portal-link has-small-font-size"><a href="<?php echo esc_url( home_url( '/perpustakaan' ) ); ?>"><?php esc_html_e( 'Perpustakaan', 'edukapro' ); ?></a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"edukapro-portal-link has-small-font-size","fontSize":"small"} -->
			<p class="edukapro-portal-link has-small-font-size"><a href="<?php echo esc_url( home_url( '/e-learning' ) ); ?>"><?php esc_html_e( 'E-Learning', 'edukapro' ); ?></a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"edukapro-portal-link has-small-font-size","fontSize":"small"} -->
			<p class="edukapro-portal-link has-small-font-size"><a href="<?php echo esc_url( home_url( '/alumni' ) ); ?>"><?php esc_html_e( 'Alumni', 'edukapro' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"align":"wide","className":"edukapro-header-main","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group alignwide edukapro-header-main" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:site-logo {"width":44} /-->
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:site-title {"level":0} /-->
					<!-- wp:site-tagline {"fontSize":"small"} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"right"}} -->
			<div class="wp-block-group">
				<!-- wp:navigation {"overlayMenu":"mobile","overlayBackgroundColor":"base","overlayTextColor":"contrast","ref":4,"className":"edukapro-nav","layout":{"type":"flex","justifyContent":"right","flexWrap":"wrap"}} /-->
				<!-- wp:search {"label":"Cari","placeholder":"Cari...","buttonText":"Cari","buttonPosition":"button-only","buttonUseIcon":true,"className":"edukapro-search"} /-->
				<!-- wp:buttons {"className":"edukapro-header-cta"} -->
				<div class="wp-block-buttons edukapro-header-cta">
					<!-- wp:button -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/pendaftaran' ) ); ?>"><?php esc_html_e( 'Daftar PPDB', 'edukapro' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->