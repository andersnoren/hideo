<?php
/**
 * Title: An image gallery with an info box to the left.
 * Slug: hideo/media-gallery-with-info-box-left
 * Categories: hideo, hideo-media
 * Viewport width: 1200
 */
?>

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
	<!-- wp:column {"verticalAlignment":"bottom","style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
	<div class="wp-block-column is-vertically-aligned-bottom">
		<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left","contentSize":"382px"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"heading-4"} -->
			<h2 class="wp-block-heading has-heading-4-font-size" style="margin-top:0">Nuolja</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Nuolja (sapmi Njullá) is a mountain on the edge of Abisko National Park. Its highest point is 1169 meters
				above sea level.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Read
						more</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->

		<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img
				src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.png" alt=""
				style="aspect-ratio:4/3;object-fit:cover" /></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img
				src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.png" alt=""
				style="aspect-ratio:3/4;object-fit:cover" /></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->