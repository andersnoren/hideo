<?php
/**
 * Title: Large, boxed call to action with an image to the right.
 * Slug: hideo/cta-large-boxed-image-right
 * Categories: hideo, hideo-cta
 * Viewport width: 1200
 */
?>

<!-- wp:media-text {"align":"wide","mediaType":"image","imageFill":true,"backgroundColor":"30"} -->
<div class="wp-block-media-text alignwide is-stacked-on-mobile is-image-fill has-30-background-color has-background">
	<figure class="wp-block-media-text__media"
		style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.png);background-position:50% 50%">
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.png" alt="" />
	</figure>
	<div class="wp-block-media-text__content">
		<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"50vh"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
		<div class="wp-block-group" style="min-height:50vh;margin-top:0;margin-bottom:0">
			<!-- wp:heading -->
			<h2 class="wp-block-heading">Take Action</h2>
			<!-- /wp:heading -->

			<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"0"}}},"layout":{"type":"constrained","justifyContent":"left"},"fontSize":"large"} -->
			<div class="wp-block-group has-large-font-size" style="margin-bottom:0">
				<!-- wp:paragraph -->
				<p><span style="caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);">This is a Call to Action box. Lorem
						ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
						et dolore magna aliqua.</span></p>
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
	</div>
</div>
<!-- /wp:media-text -->