<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-144x144.png">
	<?php wp_head(); ?>
	<link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore|Quattrocento:400,700|Alex+Brush' rel='stylesheet' type='text/css'>
</head>
<body <?php body_class(); ?>>
    <div class="header">
        <?php wp_nav_menu( array( 'menu' => 'Main Menu', 'container' => false, 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
    </div>  
    <section class="hp-opening<?php if ( is_front_page() ): ?> homepage-header<?php else: ?> internal-header<?php endif; ?>" data-ibg-bg="<?php echo get_template_directory_uri(); ?>/images/hp.jpg">
        <div class="row">
            <div class="outer">
                <div class="inner">
                    <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/courtneyandkevin.png" id="logo" alt="kevin &amp; courtney"/></a>
                    <div class="tagline text-center">
                        - <span>Are Getting Married</span> -
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/hp-arrow.png" class="arrow show-for-medium-up" alt="" /></a>
                </div>    
            </div>    
        </div> 
    </section>  
