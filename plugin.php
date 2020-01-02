<?php
/*
Plugin Name:	_ Devs Toolbox
Plugin URI:		https://oxyset.com/
Description:	Included CSS and jQuery for custom development. Powered with organized SCSS partials.
Version:		1.0.1
Author:			OxySet
Author URI:		https://oxyset.com
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

add_action( 'wp_enqueue_scripts', 'custom_enqueue_scripts');

function custom_enqueue_scripts() {
	wp_enqueue_script( 'core_js', plugin_dir_url( __FILE__ ) . 'assets/js/dev__core.js', '', '1.0.0', true );

}


function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'style-name', plugin_dir_url( __FILE__ ) . 'assets/css/dev__core.css', array('agency-base'), null );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts',  100, 1 ) ;
