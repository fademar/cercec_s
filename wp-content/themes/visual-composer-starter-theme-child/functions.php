<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

/* Register Secondary Menu */

function register_secondary_menu() {
    register_nav_menu('secondary-menu',__( 'Secondary Menu' ));
  }

add_action( 'init', 'register_secondary_menu' );