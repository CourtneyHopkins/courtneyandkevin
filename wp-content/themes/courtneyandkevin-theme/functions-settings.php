<?php

$use_slick_slider = true;
$use_gravity_forms = true;
$use_fitvids = false;

// wp title

function convoy_wp_title( $title, $sep ) {
	global $page, $paged;
	if ( is_feed() ) { return $title; }
	$title .= get_bloginfo( 'name', 'display' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title .= " $sep $site_description";
	}
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
		$title .= " $sep " . sprintf( __( 'Page %s', '_s' ), max( $paged, $page ) );
	}
	return $title;
}
add_filter( 'wp_title', 'convoy_wp_title', 10, 2 );

// register menus

function convoy_register_menus() {
	register_nav_menus(
		array(
		  'main-menu' => __( 'Main Menu', 'convoy_theme' )
		)
	);
}
add_action( 'init', 'convoy_register_menus' );

// automatically add fitvids to oembed youtube videos

function convoy_embed_filter( $output, $data, $url ) {
    $return = '<div class="video">' . $output . '</div>';
    return $return;
}
add_filter( 'oembed_dataparse', 'convoy_embed_filter', 90, 3 );

// remove emoji

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

// disable pingback

add_filter( 'xmlrpc_methods', function( $methods ) {
    unset( $methods['pingback.ping'] );
    return $methods;
} );

// feed links

add_theme_support( 'automatic-feed-links' );

?>