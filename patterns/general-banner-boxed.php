<?php
/**
 * Title: Boxed-in banner.
 * Slug: hideo/general-banner-boxed
 * Categories: hideo, hideo-general
 * Viewport width: 1200
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|body-margin"},"border":{"radius":"1em"}},"backgroundColor":"30","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"},"fontSize":"border-radius"} -->
<div class="wp-block-group alignwide has-30-background-color has-background has-border-radius-font-size"
	style="border-radius:1em;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
	<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"fontSize":"medium"} -->
		<p class="has-medium-font-size">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
			incididunt ut labore et dolore magna aliqua.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons">
		<!-- wp:button {"backgroundColor":"100","textColor":"0","className":"is-style-fill"} -->
		<div class="wp-block-button is-style-fill"><a
				class="wp-block-button__link has-0-color has-100-background-color has-text-color has-background wp-element-button">Primary</a>
		</div>
		<!-- /wp:button -->

		<!-- wp:button {"borderColor":"100","className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a
				class="wp-block-button__link has-border-color has-100-border-color wp-element-button">Secondary</a>
		</div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->