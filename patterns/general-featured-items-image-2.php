<?php
/**
 * Title: Row with two featured items, each with an image.
 * Slug: hideo/general-featured-items-image-2
 * Categories: hideo, hideo-general
 * Viewport width: 1200
 */
?>

<!-- wp:columns {"align":"full","style":{"spacing":{"blockGap":{"top":"0","left":"0"}},"border":{"bottom":{"color":"var:preset|color|30","width":"1px"},"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}}} -->
<div class="wp-block-columns alignfull"
	style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--30);border-bottom-width:1px;border-left-style:none;border-left-width:0px">
	<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|body-margin","right":"var:preset|spacing|body-margin"},"blockGap":"var:preset|spacing|40"},"border":{"top":{"width":"1px","color":"var:preset|color|30"},"right":{"color":"var:preset|color|30","width":"1px"},"bottom":{"width":"0px","style":"none"},"left":{"style":"none","width":"0px"}}}} -->
	<div class="wp-block-column"
		style="border-top-color:var(--wp--preset--color--30);border-top-width:1px;border-right-color:var(--wp--preset--color--30);border-right-width:1px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--body-margin);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--body-margin)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"},"fontSize":"heading-6"} -->
		<div class="wp-block-group has-heading-6-font-size" style="min-height:100%;margin-top:0;margin-bottom:0">
			<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|body-margin"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
				<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img
						src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.png" alt=""
						style="aspect-ratio:4/3;object-fit:cover" /></figure>
				<!-- /wp:image -->

				<!-- wp:group {"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"fontSize":"heading-4"} -->
					<h2 class="wp-block-heading has-heading-4-font-size">Block One</h2>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->
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
					<!-- wp:button {"textColor":"100","className":"is-style-outline"} -->
					<div class="wp-block-button is-style-outline"><a
							class="wp-block-button__link has-100-color has-text-color wp-element-button">Read More</a>
					</div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|body-margin","right":"var:preset|spacing|body-margin"},"blockGap":"var:preset|spacing|40"},"border":{"top":{"width":"1px","color":"var:preset|color|30"},"right":{"color":"var:preset|color|30","width":"1px"},"bottom":{"width":"0px","style":"none"},"left":{"style":"none","width":"0px"}}}} -->
	<div class="wp-block-column"
		style="border-top-color:var(--wp--preset--color--30);border-top-width:1px;border-right-color:var(--wp--preset--color--30);border-right-width:1px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--body-margin);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--body-margin)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"},"fontSize":"heading-6"} -->
		<div class="wp-block-group has-heading-6-font-size" style="min-height:100%;margin-top:0;margin-bottom:0">
			<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|body-margin"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
				<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img
						src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.png" alt=""
						style="aspect-ratio:4/3;object-fit:cover" /></figure>
				<!-- /wp:image -->

				<!-- wp:group {"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"fontSize":"heading-4"} -->
					<h2 class="wp-block-heading has-heading-4-font-size">Block Two</h2>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->
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
					<!-- wp:button {"textColor":"100","className":"is-style-outline"} -->
					<div class="wp-block-button is-style-outline"><a
							class="wp-block-button__link has-100-color has-text-color wp-element-button">Read More</a>
					</div>
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