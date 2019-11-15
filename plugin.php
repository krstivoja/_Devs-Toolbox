<?php
/*
Plugin Name:	Developers Toolbox by OxySet
Plugin URI:		https://oxyset.com/
Description:	Load JS & CSS for custom developmenn
Version:		1.0.0
Author:			Marko Krstic
Author URI:		https://markokrstic.com
License:		GPL-2.0+
License URI:	http://www.gnu.org/licenses/gpl-2.0.txt

This plugin is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

This plugin is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with This plugin. If not, see {URI to Plugin License}.
*/

if ( ! defined( 'WPINC' ) ) {
	die;
}

add_action( 'wp_enqueue_scripts', 'custom_enqueue_files' );

function custom_enqueue_files() {
	// if this is not the front page, abort.
	// if ( ! is_front_page() ) {
	// 	return;
	// }


	/*========================================
	=            External plugins            =
	========================================*/
	// node_modules goes here
	

	/*=====================================
	=            Core CSS & JS            =
	=====================================*/

	wp_enqueue_style( 'core_css', plugin_dir_url( __FILE__ ) . 'assets/css/oxyset_dev-core.css' );
	wp_enqueue_script( 'core_js', plugin_dir_url( __FILE__ ) . 'assets/js/oxyset_dev-core.js', '', '9.9.0', true );


}