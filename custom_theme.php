<?php
/*
Plugin Name:	Deveopers Toolbox
Plugin URI:		https://oxyset.com/
Description:	Custom Theme  (( Scripts & Styles ))
Version:		2.0.1
Author:			OxySet
Author URI:		https://oxyset.com/

*/
if ( ! defined( 'WPINC' ) ) {
	die;
}


/*============================================
=            Note about GreenSock            =
============================================*/
	
// In this folder you can find gsap-business-green. 
// That is purchased files and I included it for personal projects since I have licence for it.
// If you want to use it please purchase your own licence on: https://greensock.com/ 

define('CP_THEME_URL', plugin_dir_url(__FILE__));
define('CP_THEME_DIR', plugin_dir_path(__FILE__));

function asset_version($path)
{
    $file = CP_THEME_DIR . $path;
    if (is_file($file)) {
        return filemtime($file);
    }

    return null;
}


/*==============================
=            Styles            =
==============================*/
// Website Styles
add_action('wp_enqueue_scripts', function () {
    // Do not add styles on the Oxygen builder UI
    if (defined("SHOW_CT_BUILDER") && !defined("OXYGEN_IFRAME")) return;

	// Lightbox
    wp_enqueue_style( 'glightbox_css', plugin_dir_url( __FILE__ ) . 'node_modules/glightbox/dist/css/glightbox.min.css', array(), null );

    // Slider
    wp_enqueue_style( 'slider_css', plugin_dir_url( __FILE__ ) . 'node_modules/flickity/dist/flickity.min.css', array(), null );

    // Theme CSS    
    wp_enqueue_style('theme_css', CP_THEME_URL . 'assets/css/theme.css', [], asset_version('assets/css/theme.css'));


}, 1000, 1);

/*========================================================
=            Scripts loaded on front end only            =
========================================================*/

// Load assets on front end only.
function theme_scripts_outside_oxygen() {
	
	// GreenSock
	wp_enqueue_script( 'gsap', plugin_dir_url( __FILE__ ) . 		'node_modules/gsap/dist/gsap.min.js', '', '3.3.3', true );

	// Lightbox
	wp_enqueue_script( 'glightbox', plugin_dir_url( __FILE__ ) . 	'node_modules/glightbox/dist/js/glightbox.min.js', '', '2.0.6', true );

	// Slider
	wp_enqueue_script( 'slider', plugin_dir_url( __FILE__ ) . 	'node_modules/flickity/dist/flickity.pkgd.min.js', '', '2.2.1', true );
		
}
add_action( 'oxygen_enqueue_frontend_scripts', 'theme_scripts_outside_oxygen' );


/*======================================================================
=            Scrips loaded on both on front-end and builder            =
======================================================================*/
function theme_scripts() {

	// Theme scripts
	wp_enqueue_script( 'theme_js', plugin_dir_url( __FILE__ ) . 'assets/js/theme.js', '', '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'theme_scripts');




