<?php
/**
 * Title: Hero with a background, a heading, a paragraph and two buttons.
 * Slug: hideo/hero-cover
 * Categories: hideo, hideo-hero
 * Viewport width: 1200
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.png","dimRatio":70,"overlayColor":"100","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|body-margin","bottom":"var:preset|spacing|body-margin","left":"var:preset|spacing|body-margin","right":"var:preset|spacing|body-margin"}}}} -->
<div class="wp-block-cover alignfull"
	style="padding-top:var(--wp--preset--spacing--body-margin);padding-right:var(--wp--preset--spacing--body-margin);padding-bottom:var(--wp--preset--spacing--body-margin);padding-left:var(--wp--preset--spacing--body-margin)">
	<span aria-hidden="true"
		class="wp-block-cover__background has-100-background-color has-background-dim-70 has-background-dim"></span><img
		class="wp-block-cover__image-background" alt=""
		src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.png"
		data-object-fit="cover" />
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"bottom":"0"},"blockGap":"var:preset|spacing|50","padding":{"right":"0","left":"0","top":"0","bottom":"var:preset|spacing|body-margin"}},"dimensions":{"minHeight":"80vh"}},"textColor":"10","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
		<div class="wp-block-group alignfull has-10-color has-text-color"
			style="min-height:80vh;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--body-margin);padding-left:0">
			<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
				<!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|90"}}}} -->
				<h1 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--90)">Lorem Ipsum</h1>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|80","bottom":"0"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:0">
				<!-- wp:paragraph {"fontSize":"large"} -->
				<p class="has-large-font-size">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"is-style-fill"} -->
					<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"
							href="#">Primary ↗</a></div>
					<!-- /wp:button -->

					<!-- wp:button {"className":"is-style-outline"} -->
					<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"
							href="#">Secondary</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->