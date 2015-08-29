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
        <div class="gallery-wrapper">
            <div class="small-12 large-4 columns small-only-text-center medium-only-text-center put-fix-me-here">
                <h2>The Proposal</h2>
                <p>These are the pictures we took throughout our engagement day, from the hike to Sharp Top to our first canoeing excursion.
                </p>
                <a href="/the-proposal/" class="button story-button"><span>Read the story</span></a> <a href="/galleries/" class="button gallery-button"><span>Back to Galleries</span></a>
            </div>
            <div class="small-12 large-8 columns desktop-image-area gallery-window">
                <div class="row">
                    <div class="small-12 columns">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Kevin-courtney-engagement-1.jpg" />
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="small-12 columns">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Kevin-courtney-engagement-2.jpg" />
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="small-12 columns">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/17.jpg" />
                    </div>
                </div>
                <div class="hide-for-large-up text-center">
                    <br>
                    <a href="/galleries/" class="button"><span>Back to Galleries</span></a>
                </div> 
            </div>
        </div>    
    </div>    
</div>
<?php get_footer(); ?>
