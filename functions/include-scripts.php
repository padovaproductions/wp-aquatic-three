<?php


function add_scripts(){  

    wp_enqueue_style('frontend-style', get_template_directory_uri() . '/build/css/frontend.css', null, ASSETS_VERSION);
    wp_enqueue_script('frontend-scripts', get_template_directory_uri() . '/build/js/frontend-bundle.js', null, ASSETS_VERSION, true);

    if(is_front_page()){
        
        wp_enqueue_script('three-scripts', get_template_directory_uri() . '/build/js/three-bundle.js', null, ASSETS_VERSION, true);


        // Some pages might use block library later but frontpage will not
        // Remove 10KB block library css from 'frontend - frontpage'
        wp_dequeue_style( 'wp-block-library' );
    }

}
add_action('wp_enqueue_scripts', 'add_scripts');




// Remove emoji scripts & CSS from the new WP releases
function disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
}
add_action( 'init', 'disable_emojis' );