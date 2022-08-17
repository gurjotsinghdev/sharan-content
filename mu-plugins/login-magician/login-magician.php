<?php
/*
Plugin Name: Login Magician
Description: Make your wordpress login page fresh and fun everytime single time.
Version: 1.0.0
Author: Gurjot Singh
Author URI: https://gurjotsinghdev.vercel.app
*/

function wp_login_magician() {
  echo '<style>
  #login h1, #nav, #backtoblog {
		  display:none;
  }

  body {
  background-image: url("https://source.unsplash.com/random/1920x1080/?wallpaper,landscape");
  background-repeat: no-repeat;
  background-size: cover;
  padding-top: 20vh;

  }  

  label {
	color:black;
  }

  #loginform {
	background-color: #ffffff60;
	border-radius: 11px;
	border: 0.5px solid grey;
	color: white;
  }	

  .forgetmenot label {
	  color:black;
  </style>';
}

add_action('login_head', 'wp_login_magician');