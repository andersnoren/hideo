<?php
/**
 * Title: Full-width banner.
 * Slug: hideo/general-banner-full
 * Categories: hideo, hideo-general
 * Viewport width: 1200
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|body-margin","bottom":"var:preset|spacing|body-margin","left":"0","right":"0"},"blockGap":"var:preset|spacing|body-margin"}},"backgroundColor":"30","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignfull has-30-background-color has-background"
	style="padding-top:var(--wp--preset--spacing--body-margin);padding-right:0;padding-bottom:var(--wp--preset--spacing--body-margin);padding-left:0">
	<!-- wp:paragraph -->
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons">
		<!-- wp:button {"borderColor":"100","className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a
				class="wp-block-button__link has-border-color has-100-border-color wp-element-button">Primary</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->