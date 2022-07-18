<?php

/* Load Styles */
function load_styles() {

    wp_register_style('styles-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '5.1.3', 'all' );
    wp_enqueue_style('styles-bootstrap'); 

    wp_register_style('styles-bundle', get_template_directory_uri() . '/dist/css/bundle.css', array(), '1.6', 'all' );
    wp_enqueue_style('styles-bundle');
}

add_action('wp_enqueue_scripts', 'load_styles');
/* Load Styles */

/* Load Scripts */
function load_js() {
    wp_register_script('bootstrap-scripts', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true );
    wp_enqueue_script('bootstrap-scripts');

    wp_enqueue_script( 'scripts-bundle', get_template_directory_uri() . '/dist/js/bundle.js', array(), null, true );
    
  }
  add_action('wp_enqueue_scripts', 'load_js');
/* /Load Scripts */