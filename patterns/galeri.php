<?php
/**
 * Title: Galeri
 * Slug: edukapro/galeri
 * Categories: edukapro_sections
 * Description: Heading dan grid 3 kolom placeholder kotak berwarna sebagai ganti foto, plus tautan "Lihat Semua Galeri".
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|fraunces","fontWeight":"600"}},"fontSize":"x-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="font-family:var(--wp--preset--font-family--fraunces);font-weight:600"><?php esc_html_e( 'Galeri', 'edukapro' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|60"}}}} -->
		<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--60)">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"color":{"background":"var:preset|color|primary-soft"},"dimensions":{"minHeight":"200px"}}} -->
				<div class="wp-block-group has-background" style="background-color:var(--wp--preset--color--primary-soft);min-height:200px"></div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"color":{"background":"var:preset|color|accent"},"dimensions":{"minHeight":"200px"}}} -->
				<div class="wp-block-group has-background" style="background-color:var(--wp--preset--color--accent);min-height:200px"></div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"color":{"background":"var:preset|color|primary"},"dimensions":{"minHeight":"200px"}}} -->
				<div class="wp-block-group has-background" style="background-color:var(--wp--preset--color--primary);min-height:200px"></div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40"}}}} -->
		<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--40)">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"color":{"background":"var:preset|color|accent"},"dimensions":{"minHeight":"200px"}}} -->
				<div class="wp-block-group has-background" style="background-color:var(--wp--preset--color--accent);min-height:200px"></div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"color":{"background":"var:preset|color|primary"},"dimensions":{"minHeight":"200px"}}} -->
				<div class="wp-block-group has-background" style="background-color:var(--wp--preset--color--primary);min-height:200px"></div>
				<!-- /wp:group -->
			</div>
			<!-- wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"color":{"background":"var:preset|color|primary-soft"},"dimensions":{"minHeight":"200px"}}} -->
				<div class="wp-block-group has-background" style="background-color:var(--wp--preset--color--primary-soft);min-height:200px"></div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/galeri"><?php esc_html_e( 'Lihat Semua Galeri', 'edukapro' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->