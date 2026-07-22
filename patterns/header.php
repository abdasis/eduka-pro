<?php
/**
 * Title: Header
 * Slug: edukapro/header
 * Categories: edukapro_header
 * Block Types: core/template-part/header
 * Description: Header situs lengket dengan judul situs dan navigasi.
 *
 * @package Eduka_Pro
 * @since Eduka Pro 1.0
 */

?>
<!-- wp:group {"align":"full","style":{"position":{"type":"sticky","top":"0px"},"color":{"background":"var:preset|color|base"},"border":{"bottom":{"color":"var:preset|color|border","width":"1px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-base-background-color has-border-color" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
			<!-- wp:site-title {"level":0} /-->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
			<div class="wp-block-group">
				<!-- wp:navigation {"overlayMenu":"mobile","overlayBackgroundColor":"base","overlayTextColor":"contrast","ref":4,"layout":{"type":"flex","justifyContent":"right","flexWrap":"wrap"}} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
