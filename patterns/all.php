<?php
/**
 * Title: All patterns
 * Slug: hideo/all
 * Viewport width: 1200
 * Inserter: no
 */

$patterns = list_files( get_template_directory() . '/patterns/', 100 );
if ( ! $patterns ) return;
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	
	<?php
	foreach ( $patterns as $pattern ) :
		$pattern_name = basename( $pattern, '.php' );
		if ( $pattern_name == 'all' ) continue;
		?>

		<!-- wp:pattern {"slug":"hideo/<?php echo $pattern_name; ?>"} /-->

		<!-- wp:separator {"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"30","className":"is-style-wide"} -->
		<hr class="wp-block-separator alignfull has-text-color has-30-color has-alpha-channel-opacity has-30-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"/>
		<!-- /wp:separator -->

		<?php 
	endforeach;
	?>

</div>
<!-- /wp:group -->