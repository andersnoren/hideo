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
		register_block_style(
			'core/social-links',
			array(
				'name'         => 'pill-shape-with-border',
				'label'        => __( 'Pill shape with border', 'hideo' ),
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