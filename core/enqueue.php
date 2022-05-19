<?php

//////////////////////////CSS/////////////////////////
function theme_load_css(){
    wp_enqueue_style( 'css_bootstrap', get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css', array(),1 );
    wp_enqueue_style( 'font_NeueHaasPro', get_template_directory_uri().'/assets/css/NeueHaasGroteskTextPro.css', array(),1 );
    wp_enqueue_style( 'font_awesome', get_template_directory_uri().'/assets/fonts/fontawesome-all.min.css', array(),1 );
    wp_enqueue_style( 'style_components', get_template_directory_uri().'/assets/css/components.css', array(), 2 );
    wp_enqueue_style( 'style_theme', get_template_directory_uri().'/assets/css/styles.css', array(), 2 );
}
add_action( 'wp_enqueue_scripts', 'theme_load_css' );

//////////////////////////JS//////////////////////////

function theme_load_js(){
    wp_enqueue_script( 'js_bootstrap', get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js', array( 'jquery' ), 1, true );
    wp_enqueue_script( 'js_lottie', get_template_directory_uri().'/assets/js/lottie.js', array( 'jquery' ), 1, true );
    wp_enqueue_script( 'js_parallax', get_template_directory_uri().'/assets/js/parallax.min.js', array( 'jquery' ), 1, true );
    wp_enqueue_script( 'js_theme', get_template_directory_uri().'/assets/js/scripts.js', array( 'jquery' ), 1, true );
}
add_action( 'wp_enqueue_scripts', 'theme_load_js' );