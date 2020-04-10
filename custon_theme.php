<?php
/*
Plugin Name:	Deveopers Toolbox
Plugin URI:		https://oxyset.com/
Description:	Custom Theme  (( Scripts & Styles ))
Version:		2.0.0
Author:			OxySet
Author URI:		https://oxyset.com/

*/
if ( ! defined( 'WPINC' ) ) {
	die;
}



/*==============================
=            Styles            =
==============================*/
function theme_styles() {
    wp_enqueue_style( 'theme_css', plugin_dir_url( __FILE__ ) . 'assets/css/theme.css', array(), null );
}
add_action( 'wp_enqueue_scripts', 'theme_styles',  1000, 1 ) ;



/*========================================================
=            Scripts loaded on front end only            =
========================================================*/
add_action( 'oxygen_enqueue_frontend_scripts', 'theme_scripts_outside_oxygen' );
// Load assets on front end only.
function theme_scripts_outside_oxygen() {
	
	// ScrollMagic
	wp_enqueue_script( 'smagic', plugin_dir_url( __FILE__ ) . 		'node_modules/scrollmagic/scrollmagic/minified/ScrollMagic.min.js', '', '2.0.7', true );
	wp_enqueue_script( 'smagicjq', plugin_dir_url( __FILE__ ) . 	'node_modules/scrollmagic/scrollmagic/minified/plugins/jquery.ScrollMagic.min.js', '', '2.0.7', true );
	wp_enqueue_script( 'smagicgsap', plugin_dir_url( __FILE__ ) . 	'node_modules/scrollmagic/scrollmagic/minified/plugins/animation.gsap.min.js', '', '2.0.7', true );	

	// GreenSock
	wp_enqueue_script( 'gsap', plugin_dir_url( __FILE__ ) . 		'gsap-business-green/minified/gsap.min.js', '', '3.0.4', true );

	/*===========================================================
	=            Debug Tools remove wen you are done            =
	===========================================================*/
	// ScrollMagic
	wp_enqueue_script( 'debug', plugin_dir_url( __FILE__ ) . 		'node_modules/scrollmagic/scrollmagic/minified/plugins/debug.addIndicators.min.js', '', '2.0.7', true );
	// GSap Dev Tools
	wp_enqueue_script( 'debug', plugin_dir_url( __FILE__ ) . 		'gsap-business-green/minified/GSDevTools.min.js', '', '2.0.7', true );


	// Animations
	wp_enqueue_script( 'animations', plugin_dir_url( __FILE__ ) . 	'assets/js/animations.js', '', '1.0.0', true );
		
}



/*======================================================================
=            Scrips loaded on both on front-end and builder            =
======================================================================*/
function theme_scripts() {
	wp_enqueue_script( 'theme_js', plugin_dir_url( __FILE__ ) . 'assets/js/theme.js', '', '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts');




/*================================================
=            Include CPT & Taxonomies            =
================================================*/

//include '/inc/cpt_and_tax.php';

