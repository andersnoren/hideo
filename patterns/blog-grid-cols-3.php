<?php
/**
 * Title: Three column blog post grid with featured image, post date, and title.
 * Slug: hideo/blog-grid-cols-3
 * Categories: hideo-blog
 */
?>
<!-- wp:query {"queryId":1,"query":{"perPage":"9","pages":"100","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","sticky":"","inherit":true},"displayLayout":{"type":"flex","columns":3}} -->
<div class="wp-block-query">

	<!-- wp:post-template -->

	<!-- wp:post-featured-image {"isLink":true,"style":{"spacing":{"margin":{"top":"0px","bottom":"1em"}}}} /-->

	<!-- wp:group {"style":{"spacing":{"blockGap":"0.25em","padding":{"bottom":"1em"},"margin":{"top":"0px","bottom":"0px"}}}} -->
	<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-bottom:1em">

		<!-- wp:post-date {"isLink":"true","textColor":"primary","style":{"typography":{"fontWeight":"600"}}} /-->

		<!-- wp:post-title {"isLink":true,"fontSize":"heading-6"} /-->

	</div>
	<!-- /wp:group -->

	<!-- /wp:post-template -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"8vh"}}}} -->
	<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:8vh">
		<!-- wp:query-pagination {"paginationArrow":"arrow","textColor":"primary","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<!-- wp:query-pagination-previous {"label":"Previous","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"small"} /-->

		<!-- wp:query-pagination-numbers {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"small"} /-->

		<!-- wp:query-pagination-next {"label":"Next","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"small"} /-->
		<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:query -->