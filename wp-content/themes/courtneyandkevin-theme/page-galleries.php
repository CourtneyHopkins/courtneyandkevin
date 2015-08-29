<?php get_header(); ?>
<section class="hp-opening internal-header">
    <div class="header clearfix">
        <div class="menu-outer-border clearfix">
            <div class="menu-border clearfix">
                <div class="desktop-nav-catch">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/mobile-logo.png" class="mobile-logo show-for-small-only" alt="" />
                    <ul class="menu">
                        <li><a href="/" rel="" class="field-note"><span>01. &nbsp;</span>Home</a></li>
                        <li><a href="/the-proposal/" rel="" class="field-note"><span>02. &nbsp;</span>The Proposal</a></li>
                        <li><a href="/the-wedding/" rel="" class="field-note"><span>03. &nbsp;</span>The Wedding</a></li>
                        <li><a href="/galleries/" rel="" class="field-note"><span>04. &nbsp;</span>Galleries</a></li>
                        <li><a href="/field-notes/" rel="" class="field-note"><span>05. &nbsp;</span>Field Notes</a></li>
                    </ul>
                </div>    
                <div class="right show-for-small-only mobile-menu-button clearfix">
                    <a class="right-off-canvas-toggle" href="#">menu</a>
                </div>
            </div>
        </div>    
    </div>
    <aside class="right-off-canvas-menu mobile-nav-catch"></aside>
    <div class="row">
        <h1 class="page-title text-center">Galleries</h1>
    </div> 
</section>
<div class="row page-wrapper">
    <div class="page-inner-wrapper clearfix">
        <div class="small-12 columns gallery-wrapper">
            <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-4">
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/14-copy.jpg" alt="" />
                    <h3>Favorites</h3>
                    <p>Here are some of our favorites photos from our first 3 years together before Kevin proposed</p>
                    <a href="/favorites-gallery/" class="button"><span>See Gallery</span></a>
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Kevin-courtney-engagement-square.jpg" alt="" />
                    <h3>Proposal</h3>
                    <p>These are the pictures we took throughout our engagement day, from the hike to Sharp Top to our first canoeing excursion.</p>
                    <a href="proposal-gallery" class="button"><span>See Gallery</span></a>
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/coming-soon.jpg" alt="" />
                    <h3>Engagement</h3>
                    <p>Coming Soon!</p>
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/coming-soon.jpg" alt="" />
                    <h3>Wedding</h3>
                    <p>Coming 2016!</p>
                </li>
            </ul>
        </div>    
    </div>    
</div>    
<?php get_footer(); ?>
