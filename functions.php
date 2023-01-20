<?php
add_action( 'after_setup_theme', 'simplecss_setup' );
function simplecss_setup() {
global $content_width;
if ( ! isset( $content_width ) ) { $content_width = 1920; }
register_nav_menus( array( 'main-menu' => esc_html__( 'Main Menu', 'simplecss' ) ) );
register_nav_menus( array( 'footer-menu' => esc_html__( 'Footer Menu', 'simplecss' ) ) );
}

add_action( 'wp_enqueue_scripts', 'simplecss_load_scripts' );
function simplecss_load_scripts() {
	wp_enqueue_style( 'simplecss-default-style', get_stylesheet_uri() );
	wp_enqueue_style( 'simplecss-style', get_stylesheet_directory_uri().'/simple.css' );
	wp_enqueue_style( 'simplecustomcss-style', get_stylesheet_directory_uri().'/simplecustom.css' );

}


add_theme_support( 'custom-logo', array(
			'height'      => 80,
			'width'       => 240,
			'flex-width'  => true,
			'flex-height' => true,
			) );

add_theme_support( 'post-thumbnails' );

add_theme_support( 'responsive-embeds' );
?>
