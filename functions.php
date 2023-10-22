<?php

/*	-----------------------------------------------------------------------------------------------
	THEME SUPPORTS
--------------------------------------------------------------------------------------------------- */

function hideo_setup() {
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'hideo_setup' );


/*	-----------------------------------------------------------------------------------------------
	ENQUEUE STYLESHEETS
--------------------------------------------------------------------------------------------------- */

function hideo_styles() {
	wp_enqueue_style( 'hideo-styles', get_theme_file_uri( '/style.css' ), array(), wp_get_theme( 'hideo' )->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'hideo_styles' );


/*	-----------------------------------------------------------------------------------------------
	REGISTER BLOCK STYLES
--------------------------------------------------------------------------------------------------- */

if ( ! function_exists( 'hideo_block_styles' ) ) :
	function hideo_block_styles() {

		$desatured_style_blocks = array( 
			'core/avatar', 
			'core/image',
			'core/post-featured-image' 
		);

		foreach ( $desatured_style_blocks as $block_name ) {
			register_block_style(
				$block_name,
				array(
					'name'         => 'desaturated',
					'label'        => __( 'Desaturated', 'hideo' ),
					'inline_style' => "",
				)
			);
		}

		register_block_style(
			'core/column',
			array(
				'name'         => 'aspect-ratio-1-1',
				'label'        => __( '1:1 Aspect Ratio', 'hideo' ),
				'inline_style' => ".is-style-aspect-ratio-1-1 { aspect-ratio: 1/1; }",
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'         => 'aspect-ratio-4-3',
				'label'        => __( '4:3 Aspect Ratio', 'hideo' ),
				'inline_style' => ".is-style-aspect-ratio-4-3 { aspect-ratio: 4/3; }",
			)
		);

		register_block_style(
			'core/post-terms',
			array(
				'name'         => 'pill-shape-with-border',
				'label'        => __( 'Pill Shape With Border', 'hideo' ),
				'inline_style' => "
				.wp-block-post-terms.is-style-pill-shape-with-border {
					display: flex;
					flex-wrap: wrap;
					gap: .75em;
				}
				.wp-block-post-terms.is-style-pill-shape-with-border a {
					border: 1px solid var( --wp--preset--color--30 ) !important;
					border-radius: 999px;
					padding: .44em 1em;
				}
				.is-style-pill-shape-with-border .wp-block-post-terms__separator {
					display: none;
				}",
			)
		);

		register_block_style(
			'core/post-date',
			array(
				'name'         => 'pill-shape',
				'label'        => __( 'Pill Shape', 'hideo' ),
				'inline_style' => "
				.wp-block-post-date.is-style-pill-shape {
					border-radius: 99px;
				}",
			)
		);

		register_block_style(
			'core/quote',
			array(
				'name'         => 'has-quotation-mark',
				'label'        => __( 'Quotation Mark', 'hideo' ),
				'inline_style' => "",
			)
		);

		register_block_style(
			'core/social-links',
			array(
				'name'         => 'pill-shape-with-border',
				'label'        => __( 'Default With Border', 'hideo' ),
				'inline_style' => "
				:root .is-style-pill-shape-with-border .wp-block-social-link-anchor {
					border: 1px solid var( --wp--preset--color--30 ) !important;
					border-radius: 999px;
					padding: .33em;
				}",
			)
		);
		
	}
endif;
add_action( 'init', 'hideo_block_styles' );


/*	-----------------------------------------------------------------------------------------------
	MODIFY wp_list_categories() MARKUP

	In the output, wrap the category count in a span element so it can be styled separately.
--------------------------------------------------------------------------------------------------- */

if ( ! function_exists( 'hideo_modify_wp_list_categories_markup' ) ) :
	function hideo_modify_wp_list_categories_markup( $output, $args ) {

		if ( $args['show_count'] === true ) {
			$output = str_replace(
				array( '</a> (', ')' ), 
				array( '</a><span class="count">', '</span>' ),
				$output
			);
		}

		return $output;

	}
endif;
add_filter( 'wp_list_categories', 'hideo_modify_wp_list_categories_markup', 10, 2 );
