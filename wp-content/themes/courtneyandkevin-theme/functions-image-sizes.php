<?php 

// feature image support

add_theme_support( 'post-thumbnails' );

// image sizes

$sizes = array(
			array( 'headshot', 200, 200, true, '200px by 200px' )
			// array( 'custom-crop', 300, 300, array( 'center', 'top' ), '200px by 200px' )
		);

foreach ( $sizes as $size ) {
	add_image_size( $size[0], $size[1], $size[2], $size[3] );
}

// add image sizes to dropdown

add_filter( 'image_size_names_choose', 'convoy_image_size_names_choose' );
function convoy_image_size_names_choose( $sizes ) {
	$labels = array();
	foreach ( $sizes as $size ) {
		$labels[] = array( $size[0] => $size[4] );
	}
	return array_merge( $sizes, $labels );
}

?>