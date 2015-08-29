<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-144x144.png">
	<?php wp_head(); ?>
	<link href='http://fonts.googleapis.com/css?family=Vollkorn:400,400italic,700,700italic|Lato:400,300,700,900|Great+Vibes|Oswald' rel='stylesheet' type='text/css'>
</head>
<body <?php body_class(); ?>>
    <div class="off-canvas-wrap" data-offcanvas>
        <div class="inner-wrap">
