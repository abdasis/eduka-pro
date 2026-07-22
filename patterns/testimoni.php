<?php
/**
 * Title: Testimoni
 * Slug: edukapro/testimoni
 * Categories: edukapro_sections
 * Description: Heading "Apa Kata Mereka" dan tiga kolom testimoni dengan kutipan, avatar placeholder, nama, dan peran.
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|60"}},"color":{"background":"var:preset|color|surface"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:var(--wp--preset--color--surface);margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|fraunces","fontWeight":"600"}},"fontSize":"x-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="font-family:var(--wp--preset--font-family--fraunces);font-weight:600"><?php esc_html_e( 'Apa Kata Mereka', 'edukapro' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|60"}}}} -->
		<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--60)">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:quote {"className":"is-style-plain","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"fontSize":"large"} -->
				<blockquote class="wp-block-quote is-style-plain has-large-font-size">
					<!-- wp:paragraph -->
					<p><?php esc_html_e( 'Sekolah ini memberikan perhatian penuh pada perkembangan anak saya, baik akademik maupun karakter.', 'edukapro' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
					<div class="wp-block-group" style="display:flex;flex-wrap:nowrap;align-items:center">
						<!-- wp:group {"style":{"color":{"background":"var:preset|color|primary"},"dimensions":{"width":"64px","height":"64px"},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"nowrap"}}} -->
						<div class="wp-block-group has-background" style="background-color:var(--wp--preset--color--primary);width:64px;height:64px;display:flex;flex-direction:column;justify-content:center"></div>
						<!-- /wp:group -->
						<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|30"}}}} -->
						<div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--30)">
							<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
							<p style="font-weight:600"><?php esc_html_e( 'Siti Rahmawati', 'edukapro' ); ?></p>
							<!-- /wp:paragraph -->
							<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
							<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Orang Tua', 'edukapro' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</blockquote>
				<!-- /wp:quote -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:quote {"className":"is-style-plain","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"fontSize":"large"} -->
				<blockquote class="wp-block-quote is-style-plain has-large-font-size">
					<!-- wp:paragraph -->
					<p><?php esc_html_e( 'Banyak pelajaran berharga dan pengalaman berharga yang saya dapatkan di sini hingga sukses di bangku kuliah.', 'edukapro' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
					<div class="wp-block-group" style="display:flex;flex-wrap:nowrap;align-items:center">
						<!-- wp:group {"style":{"color":{"background":"var:preset|color|accent"},"dimensions":{"width":"64px","height":"64px"},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"nowrap"}}} -->
						<div class="wp-block-group has-background" style="background-color:var(--wp--preset--color--accent);width:64px;height:64px;display:flex;flex-direction:column;justify-content:center"></div>
						<!-- /wp:group -->
						<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|30"}}}} -->
						<div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--30)">
							<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
							<p style="font-weight:600"><?php esc_html_e( 'Budi Santoso', 'edukapro' ); ?></p>
							<!-- /wp:paragraph -->
							<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
							<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Alumni', 'edukapro' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</blockquote>
				<!-- /wp:quote -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:quote {"className":"is-style-plain","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"fontSize":"large"} -->
				<blockquote class="wp-block-quote is-style-plain has-large-font-size">
					<!-- wp:paragraph -->
					<p><?php esc_html_e( 'Lingkungan belajar yang aman dan guru-guru yang kompeten membuat anak saya betah belajar.', 'edukapro' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
					<div class="wp-block-group" style="display:flex;flex-wrap:nowrap;align-items:center">
						<!-- wp:group {"style":{"color":{"background":"var:preset|color|primary-soft"},"dimensions":{"width":"64px","height":"64px"},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"nowrap"}}} -->
						<div class="wp-block-group has-background" style="background-color:var(--wp--preset--color--primary-soft);width:64px;height:64px;display:flex;flex-direction:column;justify-content:center"></div>
						<!-- /wp:group -->
						<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|30"}}}} -->
						<div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--30)">
							<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
							<p style="font-weight:600"><?php esc_html_e( 'Dewi Lestari', 'edukapro' ); ?></p>
							<!-- /wp:paragraph -->
							<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
							<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Orang Tua', 'edukapro' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</blockquote>
				<!-- /wp:quote -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->