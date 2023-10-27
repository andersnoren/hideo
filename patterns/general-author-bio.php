<?php
/**
 * Title: Author bio, designed for use in the single post template.
 * Slug: hideo/general-author-bio
 * Categories: hideo, hideo-general
 * Viewport width: 1200
 */
?>

<!-- wp:group {"align":"wide","style":{"border":{"radius":"1em"},"spacing":{"padding":{"top":"var:preset|spacing|body-margin","bottom":"var:preset|spacing|body-margin","left":"var:preset|spacing|body-margin","right":"var:preset|spacing|body-margin"}}},"backgroundColor":"30","layout":{"type":"constrained"},"fontSize":"border-radius"} -->
<div class="wp-block-group alignwide has-30-background-color has-background has-border-radius-font-size"
	style="border-radius:1em;padding-top:var(--wp--preset--spacing--body-margin);padding-right:var(--wp--preset--spacing--body-margin);padding-bottom:var(--wp--preset--spacing--body-margin);padding-left:var(--wp--preset--spacing--body-margin)">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"33.33%"} -->
		<div class="wp-block-column" style="flex-basis:33.33%">
			<!-- wp:group {"layout":{"type":"constrained","contentSize":"33.33%","justifyContent":"left"}} -->
			<div class="wp-block-group">
				<!-- wp:avatar {"size":170,"isLink":true,"style":{"border":{"radius":"999px"}},"className":"is-style-desaturated"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"66.66%","fontSize":"medium"} -->
		<div class="wp-block-column has-medium-font-size" style="flex-basis:66.66%">
			<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"},"spacing":{"blockGap":"6vw"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group" style="min-height:100%">
				<!-- wp:post-author-name {"isLink":true,"style":{"layout":{"selfStretch":"fit","flexSize":null},"typography":{"letterSpacing":"-0.01em","lineHeight":"1"}},"fontSize":"heading-2","fontFamily":"heading"} /-->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
				<div class="wp-block-group">
					<!-- wp:post-author-biography /-->

					<!-- wp:social-links {"iconColor":"0","iconColorValue":"#FFFFFF","iconBackgroundColor":"100","iconBackgroundColorValue":"#15151C","size":"has-normal-icon-size","style":{"spacing":{"blockGap":{"top":"0.5em","left":"0.5em"}}},"className":"is-style-default","layout":{"type":"flex","justifyContent":"left"}} -->
					<ul
						class="wp-block-social-links has-normal-icon-size has-icon-color has-icon-background-color is-style-default">
						<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->

						<!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->

						<!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /-->
					</ul>
					<!-- /wp:social-links -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->