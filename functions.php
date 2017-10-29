<?php
/**
 * Enqueue scripts and styles.
 */
function sod_scripts() {

	wp_enqueue_style( 'remcast', get_stylesheet_uri() );

	// wp_enqueue_style( 'remcast', get_template_directory_uri() . '/css/lightslider.css', array(), '20151215', true );

	wp_enqueue_style( 'remcastslider', get_template_directory_uri() . '/css/lightslider.css',false,'1.1','all');

	wp_enqueue_script('remcastjquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', array(), '3', true);

	wp_enqueue_script('remcast-isotope', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.4/isotope.pkgd.js', array(), '3', true);


	// wp_enqueue_script( 'remcast-isotope', get_template_directory_uri() . '/js/isotope.js', array(), '20151215', true );

	wp_enqueue_script( 'remcast-jquery', get_template_directory_uri() . '/js/sketch.js', array(), '20151215', true );

	wp_enqueue_script( 'remcast-slider', get_template_directory_uri() . '/js/lightslider.js', array(), '20151215', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sod_scripts' );

add_theme_support('html5', array('search-form'));
?>