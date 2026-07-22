<?php
/**
 * Title: Footer
 * Slug: edukapro/footer
 * Categories: edukapro_footer
 * Block Types: core/template-part/footer
 * Description: Footer empat kolom dengan logo, tautan, kontak, dan sosial.
 *
 * @package Eduka_Pro
 * @since Eduka Pro 1.0
 */

?>
<!-- wp:group {"align":"full","style":{"color":{"background":"var:preset|color|contrast","text":"var:preset|color|base"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-contrast-background-color has-base-color has-text-color has-background" style="background-color:var(--wp--preset--color--contrast);color:var(--wp--preset--color--base);padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"width":"33%"} -->
			<div class="wp-block-column" style="flex-basis:33%">
				<!-- wp:site-logo /-->
				<!-- wp:site-title {"level":2} /-->
				<!-- wp:site-tagline /-->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"22%"} -->
			<div class="wp-block-column" style="flex-basis:22%">
				<!-- wp:heading {"level":3,"fontSize":"medium"} -->
				<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Tautan', 'edukapro' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Beranda', 'edukapro' ); ?>","url":"/"} /-->
					<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Program', 'edukapro' ); ?>","url":"/program"} /-->
					<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Berita', 'edukapro' ); ?>","url":"/berita"} /-->
					<!-- wp:navigation-link {"label":"<?php esc_html_e( 'PPDB', 'edukapro' ); ?>","url":"/pendaftaran"} /-->
					<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Kontak', 'edukapro' ); ?>","url":"/kontak"} /-->
				<!-- /wp:navigation -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"22%"} -->
			<div class="wp-block-column" style="flex-basis:22%">
				<!-- wp:heading {"level":3,"fontSize":"medium"} -->
				<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Kontak', 'edukapro' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:list {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20"}}}} -->
				<ul style="padding-left:var(--wp--preset--spacing--20)">
					<li><?php esc_html_e( 'Jl. Pendidikan No. 1, Jakarta', 'edukapro' ); ?></li>
					<li><?php esc_html_e( '(021) 123-4567', 'edukapro' ); ?></li>
					<li><?php esc_html_e( 'info@wpsekolah.id', 'edukapro' ); ?></li>
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"23%"} -->
			<div class="wp-block-column" style="flex-basis:23%">
				<!-- wp:heading {"level":3,"fontSize":"medium"} -->
				<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Ikuti Kami', 'edukapro' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p><a href="#"><?php esc_html_e( 'Facebook', 'edukapro' ); ?></a> &middot; <a href="#"><?php esc_html_e( 'Instagram', 'edukapro' ); ?></a> &middot; <a href="#"><?php esc_html_e( 'YouTube', 'edukapro' ); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:separator {"style":{"color":{"background":"var:preset|color|border"}},"className":"has-text-color has-base-color"} -->
		<hr class="wp-block-separator has-text-color has-base-color has-css-opacity" style="background-color:var(--wp--preset--color--border);color:var(--wp--preset--color--base)"/>
		<!-- /wp:separator -->

		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> <?php esc_html_e( 'WP Sekolah', 'edukapro' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><?php esc_html_e( 'Didukung WordPress', 'edukapro' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
