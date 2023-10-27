<?php
/**
 * Title: Row with two featured items, each with background color and an image.
 * Slug: hideo/general-featured-items-boxed-image-2
 * Categories: hideo, hideo-general
 * Viewport width: 1200
 */
?>

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
	<!-- wp:column {"style":{"spacing":{"blockGap":"0"}},"fontSize":"heading-6"} -->
	<div class="wp-block-column has-heading-6-font-size">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"0","bottom":"var:preset|spacing|body-margin"},"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"100%"},"border":{"radius":"1em"}},"backgroundColor":"30","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"},"fontSize":"border-radius"} -->
		<div class="wp-block-group has-30-background-color has-background has-border-radius-font-size"
			style="border-radius:1em;min-height:100%;margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:var(--wp--preset--spacing--body-margin)">
			<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|body-margin"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
				<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"1em","topRight":"1em","bottomLeft":"0em","bottomRight":"0em"}}}} -->
				<figure class="wp-block-image size-full has-custom-border"><img
						src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.png" alt=""
						style="border-top-left-radius:1em;border-top-right-radius:1em;border-bottom-left-radius:0em;border-bottom-right-radius:0em;aspect-ratio:4/3;object-fit:cover" />
				</figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|body-margin","left":"var:preset|spacing|body-margin"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group"
					style="padding-right:var(--wp--preset--spacing--body-margin);padding-left:var(--wp--preset--spacing--body-margin)">
					<!-- wp:heading {"fontSize":"heading-4"} -->
					<h2 class="wp-block-heading has-heading-4-font-size">Block One</h2>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"right":"var:preset|spacing|body-margin","left":"var:preset|spacing|body-margin"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
			<div class="wp-block-group"
				style="padding-right:var(--wp--preset--spacing--body-margin);padding-left:var(--wp--preset--spacing--body-margin)">
				<!-- wp:paragraph {"fontSize":"medium"} -->
				<p class="has-medium-font-size">Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmo
					tempor incididunt ut l´abore et dolore.</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"textColor":"100","borderColor":"100","className":"is-style-outline"} -->
					<div class="wp-block-button is-style-outline"><a
							class="wp-block-button__link has-100-color has-text-color has-border-color has-100-border-color wp-element-button">Read
							More</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"style":{"spacing":{"blockGap":"0"}},"fontSize":"heading-6"} -->
	<div class="wp-block-column has-heading-6-font-size">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"0","bottom":"var:preset|spacing|body-margin"},"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"100%"},"border":{"radius":"1em"}},"backgroundColor":"30","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"},"fontSize":"border-radius"} -->
		<div class="wp-block-group has-30-background-color has-background has-border-radius-font-size"
			style="border-radius:1em;min-height:100%;margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:var(--wp--preset--spacing--body-margin)">
			<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|body-margin"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
				<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"1em","topRight":"1em","bottomLeft":"0em","bottomRight":"0em"}}}} -->
				<figure class="wp-block-image size-full has-custom-border"><img
						src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.png" alt=""
						style="border-top-left-radius:1em;border-top-right-radius:1em;border-bottom-left-radius:0em;border-bottom-right-radius:0em;aspect-ratio:4/3;object-fit:cover" />
				</figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|body-margin","left":"var:preset|spacing|body-margin"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group"
					style="padding-right:var(--wp--preset--spacing--body-margin);padding-left:var(--wp--preset--spacing--body-margin)">
					<!-- wp:heading {"fontSize":"heading-4"} -->
					<h2 class="wp-block-heading has-heading-4-font-size">Block Two</h2>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"right":"var:preset|spacing|body-margin","left":"var:preset|spacing|body-margin"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
			<div class="wp-block-group"
				style="padding-right:var(--wp--preset--spacing--body-margin);padding-left:var(--wp--preset--spacing--body-margin)">
				<!-- wp:paragraph {"fontSize":"medium"} -->
				<p class="has-medium-font-size">Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmo
					tempor incididunt ut l´abore et dolore.</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"textColor":"100","borderColor":"100","className":"is-style-outline"} -->
					<div class="wp-block-button is-style-outline"><a
							class="wp-block-button__link has-100-color has-text-color has-border-color has-100-border-color wp-element-button">Read
							More</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->