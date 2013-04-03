<?php


function enqueue_theme_scripts() {

    $themeStyle = get_bloginfo('stylesheet_directory') . '/style.css';
    wp_register_style('themeStyle',$themeStyle);
    wp_enqueue_style( 'themeStyle');

	wp_enqueue_script( 'jquery');

    $slideshowjs = get_bloginfo('stylesheet_directory') . '/js/slideshow.js';
	wp_register_script('slideshowjs',$slideshowjs);
	wp_enqueue_script( 'slideshowjs',array('jquery'));


    $rocotillojs = get_bloginfo('stylesheet_directory') . '/js/rocotillo.js';
	wp_register_script('rocotillojs',$rocotillojs);
	wp_enqueue_script( 'rocotillojs',array('jquery'));


}

add_action('wp_enqueue_scripts', 'enqueue_theme_scripts');

	
	// Menus
	add_action( 'init', 'register_my_menu' );
	function register_my_menu() {
		register_nav_menu( 'top-navigation', __( 'Top Navigation' ) );
	}



/* Remove Width and Height attrs from inserted images */

add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}


?>