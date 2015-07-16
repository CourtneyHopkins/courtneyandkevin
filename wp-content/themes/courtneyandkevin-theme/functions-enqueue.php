<?php

// version number for updating css/js

$convoy_version = '1.0.0';

// enqueue css & js

function convoy_wp_enqueue_scripts() {
    global $convoy_version;
    if ( ! is_admin() ) {
        wp_enqueue_style( 'convoy-style', get_template_directory_uri() . '/css/style.css', false, $convoy_version );
        wp_enqueue_script( 'modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', false, false, false );
        wp_deregister_script( 'jquery' );
        wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js', false, false, true );
        wp_enqueue_script( 'foundation', get_template_directory_uri() . '/bower_components/js/foundation.min.js', array( 'jquery' ), false, true );
        if ( $use_slick_slider ) wp_enqueue_script( 'slick-carousel-script', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.4.1/slick.min.js', array( 'jquery' ), false, true );
        if ( is_singular() && get_option( 'thread_comments' ) && ! is_front_page() ) wp_enqueue_script( 'comment-reply' );
        if ( $use_fitvids ) {
            wp_enqueue_script( 'fitvids', 'https://cdnjs.cloudflare.com/ajax/libs/fitvids/1.1.0/jquery.fitvids.min.js', array( 'jquery' ), false, true );
        } 
        wp_enqueue_script( 'convoy-theme', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), $convoy_version, true );
        $data = array( 'is_front_page' => is_front_page() );
        wp_localize_script( 'convoy-theme', 'convoy_options', $data );
    }
}

add_action( 'init', 'convoy_theme_init' );
function convoy_theme_init() {
	add_action( 'wp_enqueue_scripts', 'convoy_wp_enqueue_scripts', 999 );
}

// if we're using gravity forms, load js in footer

if ( $use_gravity_forms ) {
    add_filter('gform_init_scripts_footer', '__return_true');
    add_filter( 'gform_cdata_open', 'wrap_gform_cdata_open' );
    function wrap_gform_cdata_open( $content = '' ) {
        $content = 'document.addEventListener( "DOMContentLoaded", function() { ';
        return $content;
    }
    add_filter( 'gform_cdata_close', 'wrap_gform_cdata_close' );
    function wrap_gform_cdata_close( $content = '' ) {
        $content = ' }, false );';
        return $content;
    }
}

?>
