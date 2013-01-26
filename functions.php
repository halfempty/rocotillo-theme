<?php


function enqueue_theme_scripts() {

    $themeStyle = get_bloginfo('stylesheet_directory') . '/style.css';
    wp_register_style('themeStyle',$themeStyle);
    wp_enqueue_style( 'themeStyle');

	wp_enqueue_script( 'jquery');

	// Markers
    $slideshowjs = get_bloginfo('stylesheet_directory') . '/js/slideshow.js';
	wp_register_script('slideshowjs',$slideshowjs);
	wp_enqueue_script( 'slideshowjs',array('jquery'));

}

add_action('wp_enqueue_scripts', 'enqueue_theme_scripts');

	
	// Menus
	add_action( 'init', 'register_my_menu' );
	function register_my_menu() {
		register_nav_menu( 'top-navigation', __( 'Top Navigation' ) );
	}


?>