<?php
/**
 * Title: Row with two featured items, each with a background color.
 * Slug: hideo/general-featured-items-boxed-2
 * Categories: hideo, hideo-general
 * Viewport width: 1200
 */
?>

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
	<!-- wp:column {"style":{"spacing":{"blockGap":"0"}},"className":"is-style-aspect-ratio-4-3"} -->
	<div class="wp-block-column is-style-aspect-ratio-4-3">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60","padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"100%"},"border":{"radius":"1em"}},"backgroundColor":"30","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"},"fontSize":"border-radius"} -->
		<div class="wp-block-group has-30-background-color has-background has-border-radius-font-size"
			style="border-radius:1em;min-height:100%;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
			<!-- wp:group {"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"fontSize":"heading-4"} -->
				<h2 class="wp-block-heading has-heading-4-font-size">Block One</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
			<div class="wp-block-group">
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

	<!-- wp:column {"style":{"spacing":{"blockGap":"0"}},"className":"is-style-aspect-ratio-4-3"} -->
	<div class="wp-block-column is-style-aspect-ratio-4-3">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60","padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"100%"},"border":{"radius":"1em"}},"backgroundColor":"30","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"},"fontSize":"border-radius"} -->
		<div class="wp-block-group has-30-background-color has-background has-border-radius-font-size"
			style="border-radius:1em;min-height:100%;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
			<!-- wp:group {"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"fontSize":"heading-4"} -->
				<h2 class="wp-block-heading has-heading-4-font-size">Block Two</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
			<div class="wp-block-group">
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