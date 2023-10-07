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