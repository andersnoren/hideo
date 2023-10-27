<?php
/**
 * Title: Contact details with a large image.
 * Slug: hideo/general-contact-details-image
 * Categories: hideo, hideo-general
 * Viewport width: 1200
 */
?>

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|70","left":"var:preset|spacing|body-margin"}}}} -->
<div class="wp-block-columns alignwide">
	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"330px"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"fontSize":"heading-5"} -->
			<h2 class="wp-block-heading has-heading-5-font-size">Contact Us</h2>
			<!-- /wp:heading -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph -->
				<p>123 Columbia St, Brooklyn, NY<br>12345, United States</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p>Phone: +12345678900<br>Email: <a href="mailto:example@example.com">example@example.com</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:social-links {"iconColor":"100","iconColorValue":"#15151C","iconBackgroundColorValue":"#FFFFFF","size":"has-normal-icon-size","className":"is-style-default"} -->
			<ul
				class="wp-block-social-links has-normal-icon-size has-icon-color has-icon-background-color is-style-default">
				<!-- wp:social-link {"url":"https://tumblr.com","service":"tumblr"} /-->

				<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->

				<!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img
				src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.png" alt=""
				style="aspect-ratio:1;object-fit:cover" /></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->