<?php
/*
Plugin Name: Login Magician
Description: Make your wordpress login page fresh and fun everytime single time.
Version: 1.0.0
Author: Gurjot Singh
Author URI: https://gurjotsinghdev.vercel.app
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Current plugin version.
 */
define( 'LOGIN_MAGICIAN_VERSION', '1.0.0' );

function wp_login_magician_assets () {
  wp_enqueue_style( 'login_magician', plugins_url('/assets/style.css', __FILE__) );
}

add_action('login_head', 'wp_login_magician_assets');
