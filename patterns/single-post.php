<?php
/**
 * Title: Pos Tunggal
 * Slug: edukapro/single-post
 * Categories: edukapro_page
 * Description: Tata letak pos tunggal dengan gambar unggulan, meta, navigasi, dan komentar.
 *
 * @package Eduka_Pro
 * @since Eduka Pro 1.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:post-featured-image {"align":"wide","aspectRatio":"16/9"} /-->

		<!-- wp:post-title {"level":1,"isLink":false,"style":{"layout":{"selfStretch":"fit","flexSize":null}}} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|40"}}},"fontSize":"small","layout":{"type":"flex","flexWrap":"wrap"}} -->
		<div class="wp-block-group has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--40)">
			<!-- wp:post-date {"isLink":true} /-->
			<!-- wp:paragraph -->
			<p>&middot;</p>
			<!-- /wp:paragraph -->
			<!-- wp:post-author-name {"isLink":true} /-->
			<!-- wp:paragraph -->
			<p>&middot;</p>
			<!-- /wp:paragraph -->
			<!-- wp:post-terms {"term":"post_tag"} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:post-content {"layout":{"type":"constrained"}} /-->

		<!-- wp:separator {"style":{"color":{"background":"var:preset|color|border"}},"className":"has-text-color"} -->
		<hr class="wp-block-separator has-text-color has-css-opacity" style="background-color:var(--wp--preset--color--border)"/>
		<!-- /wp:separator -->

		<!-- wp:pattern {"slug":"edukapro/post-navigation"} /-->

		<!-- wp:comments {"className":"wp-block-comments-query-loop","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
		<div class="wp-block-comments wp-block-comments-query-loop" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)">
			<!-- wp:heading {"fontSize":"x-large"} -->
			<h2 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'Komentar', 'edukapro' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:comments-title {"level":3,"fontSize":"large"} /-->

			<!-- wp:comment-template -->
			<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-group" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40)">
				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group">
					<!-- wp:avatar {"size":48} /-->
					<!-- wp:group -->
					<div class="wp-block-group">
						<!-- wp:comment-date /-->
						<!-- wp:comment-author-name /-->
						<!-- wp:comment-content /-->
						<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
						<div class="wp-block-group">
							<!-- wp:comment-edit-link /-->
							<!-- wp:comment-reply-link /-->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- /wp:comment-template -->

			<!-- wp:comments-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
			<!-- wp:comments-pagination-previous /-->
			<!-- wp:comments-pagination-next /-->
			<!-- /wp:comments-pagination -->

			<!-- wp:post-comments-form /-->
		</div>
		<!-- /wp:comments -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
