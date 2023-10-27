<?php
/**
 * Title: Compact call to action with a header, text and buttons.
 * Slug: hideo/cta-large-boxed-image-right
 * Categories: hideo, hideo-cta
 * Viewport width: 1200
 */
?>

<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"
	style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:column {"verticalAlignment":"center","layout":{"type":"constrained","justifyContent":"left","contentSize":"4.2em"},"fontSize":"heading-2"} -->
	<div class="wp-block-column is-vertically-aligned-center has-heading-2-font-size">
		<!-- wp:heading -->
		<h2 class="wp-block-heading">Ready to Give it a Try?</h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center">
		<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"fontSize":"large"} -->
			<p class="has-large-font-size">This is a Call to Action box. Lorem ipsum dolor sit amet, consectetur
				adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Primary</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a
						class="wp-block-button__link wp-element-button">Secondary</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->