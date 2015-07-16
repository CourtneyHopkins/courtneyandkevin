<?php

require_once 'functions-settings.php'; // menus and other action/filter functions
require_once 'functions-enqueue.php'; // enqueue css and js
require_once 'functions-image-sizes.php'; // set image sizes
require_once 'functions-post-types.php'; // custom post types
require_once 'functions-fields.php'; // custom fields 

// content width

if ( ! isset( $content_width ) ) { $content_width = 640; }

// add custom functionality below

function convoy_get_image_src( $id, $size ) {
    $src = '';
    if ( $id > 0 ) list( $src, $width, $height ) = wp_get_attachment_image_src( $id, $size );
    return $src;
}

// get excerpt function

function convoy_get_excerpt() {
    $limit = 50;
    $content = explode( ' ', get_the_content(), $limit );
    if ( count( $content ) >= $limit ) {
        array_pop( $content );
        $content = implode( " ", $content ) . '...';
    } else {
        $content = implode( " ", $content );
    } 
    $content = preg_replace('/\[.+\]/','', $content);
    $content = apply_filters('the_content', $content); 
    $content = str_replace(']]>', ']]&gt;', $content);
    return $content;
}

// add theme specific functions

require_once 'functions-custom.php';

?>
