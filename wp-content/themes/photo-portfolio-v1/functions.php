<?php
/*
* menu_order
*/
add_action( 'after_setup_theme', 'theme_alexander' );
function theme_alexander() {
	register_nav_menu( 'navbar', 'Primary Menu' );
    
    /*add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );*/

    add_theme_support( 'post-thumbnails' );
    
}
/**
 * Enqueue scripts and styles.
 */
function phot_scripts() {
	wp_enqueue_style( 'phot-style', get_template_directory_uri() . '/css/styles.css' );

	/*wp_enqueue_script( 'phot-navigation', get_template_directory_uri() . '/js/navigation.js');*/

	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'phot_scripts' );



?>