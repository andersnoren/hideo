<?php
/**
 * Title: A messy image gallery.
 * Slug: hideo/media-gallery-messy
 * Categories: hideo, hideo-media
 * Viewport width: 1200
 */
?>

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"10vw","left":"var:preset|spacing|body-margin"}}}} -->
<div class="wp-block-columns alignwide">
	<!-- wp:column {"width":"60%","style":{"spacing":{"blockGap":"10vw"}}} -->
	<div class="wp-block-column" style="flex-basis:60%">
		<!-- wp:columns {"isStackedOnMobile":false} -->
		<div class="wp-block-columns is-not-stacked-on-mobile">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img
						src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.png" alt=""
						style="aspect-ratio:4/3;object-fit:cover" />
					<figcaption class="wp-element-caption">This is an image.</figcaption>
				</figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"30%"} -->
			<div class="wp-block-column" style="flex-basis:30%"></div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:columns {"isStackedOnMobile":false} -->
		<div class="wp-block-columns is-not-stacked-on-mobile">
			<!-- wp:column {"width":"30%"} -->
			<div class="wp-block-column" style="flex-basis:30%"></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img
						src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.png" alt=""
						/>
					<figcaption class="wp-element-caption">This is also an image.</figcaption>
				</figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"10%"} -->
			<div class="wp-block-column" style="flex-basis:10%"></div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
		<!-- wp:columns {"isStackedOnMobile":false} -->
		<div class="wp-block-columns is-not-stacked-on-mobile">
			<!-- wp:column {"width":"20%"} -->
			<div class="wp-block-column" style="flex-basis:20%"></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:image {"aspectRatio":"2/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img
						src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.png" alt=""
						style="aspect-ratio:2/3;object-fit:cover" />
					<figcaption class="wp-element-caption">This is also an image.</figcaption>
				</figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->