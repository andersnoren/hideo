<?php
/**
 * Title: Large, boxed call to action.
 * Slug: hideo/cta-large-boxed
 * Categories: hideo, hideo-cta
 * Viewport width: 1200
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|90"},"border":{"radius":"1em"},"dimensions":{"minHeight":"50vh"}},"backgroundColor":"30","layout":{"type":"flex","orientation":"vertical","justifyContent":"left","verticalAlignment":"space-between"},"fontSize":"border-radius"} -->
<div class="wp-block-group alignwide has-30-background-color has-background has-border-radius-font-size"
	style="border-radius:1em;min-height:50vh;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:heading -->
	<h2 class="wp-block-heading">Take Action</h2>
	<!-- /wp:heading -->

	<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"0"}}},"layout":{"type":"constrained"},"fontSize":"large"} -->
	<div class="wp-block-group has-large-font-size" style="margin-bottom:0">
		<!-- wp:paragraph -->
		<p><span style="caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);">This is a Call to Action box. Lorem ipsum dolor
				sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
				aliqua.</span></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"100","textColor":"0"} -->
			<div class="wp-block-button"><a
					class="wp-block-button__link has-0-color has-100-background-color has-text-color has-background wp-element-button">Primary</a>
			</div>
			<!-- /wp:button -->

			<!-- wp:button {"textColor":"100","style":{"border":{"width":"1px"}},"borderColor":"100","className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a
					class="wp-block-button__link has-100-color has-text-color has-border-color has-100-border-color wp-element-button"
					style="border-width:1px">Secondary</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->