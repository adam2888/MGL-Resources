<?php
function mytheme_add_woocommerce_support() {
add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );


function mgl_file(){

 wp_enqueue_script('main_uni_js',get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true );


 // link to google font
  wp_enqueue_style('alata', '//fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet"' );

  wp_enqueue_style('concert',"//fonts.googleapis.com/css?family=Concert+One&display=swap");

   wp_enqueue_style('poppins','https://fonts.googleapis.com/css?family=Poppins',false);

//W3 Stylesheet
	wp_enqueue_style('w3c', '//www.w3schools.com/lib/w3-colors-flat.css">');
	wp_enqueue_style('w3', '//www.w3schools.com/w3css/4/w3.css">');


// Font Awsome
  wp_enqueue_style('font_awsome', '//use.fontawesome.com/releases/v5.12.1/css/all.css">');

 //gets ths main  css stylesheet//
wp_enqueue_style('mgl_main_stylesheet', get_stylesheet_uri());
};
add_action('wp_enqueue_scripts','mgl_file');
