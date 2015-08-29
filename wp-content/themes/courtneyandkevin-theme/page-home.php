<?php get_header(); ?>
<div class="homepage clearfix">
    <section class="hp-opening homepage-header clearfix">
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
            <img src="<?php echo get_template_directory_uri(); ?>/images/courtneyandkevin.png" id="logo" alt="kevin &amp; courtney"/>
            <div class="tagline text-center">
                <div class="tagline-border">
                    <span>Are Getting Married!</span>
                </div>
            </div>
        </div> 
    </section>
    <section id="hp-main-section-wrapper">
        <div class="green-wrapper">
            <div class="green-wrapper-border">
                <div class="green-wrapper-border-inner">
                    <div id="hp-proposal" class="row vertical-spacing">
                        <div class="small-12 medium-6 columns">
                            <div class="image">
                                <div class="image-border">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/Kevin-courtney-engagement-hp.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="small-12 medium-6 small-only-text-center columns">
                            <div class="text">
                                <h2>The Proposal</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eget ex sodales, maximus tellus ac, egestas mi. Nam lacinia, augue in porttitor pulvinar, justo magna consectetur nibh, eget facilisis leo lacus sed massa. 
                                </p>
                                <a href="/the-proposal/" class="button"><span>Read the whole story</span></a>
                            </div>
                        </div>
                    </div>
                    <div id="hp-wedding" class="row vertical-spacing">
                        <div class="small-12 medium-6 columns small-only-text-center medium-text-right">
                            <div class="text">
                                <h2>The Wedding</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eget ex sodales, maximus tellus ac, egestas mi. Nam lacinia, augue in porttitor pulvinar, justo magna consectetur nibh, eget facilisis leo lacus sed massa. Nulla facilisis viverra sem, id tincidunt magna. 
                                </p>
                                <a href="/the-proposal/" class="button"><span>Get all the details</span></a>
                            </div>
                        </div>
                        <div class="small-12 medium-6 columns">
                            <div class="image">
                                <div class="image-border">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/gaielea.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>    
        </div>    
    </section>
    <section id="hp-galleries">
        <div class="row photo-collage">
            <div class="small-3 columns">
                <div class="full-box" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/court+kev.jpg');"></div>
            </div>
            <div class="small-2 columns">
                <div class="half-box" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/6.jpg');"></div>
                <div class="half-box" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/16-copy.jpg');"></div>
            </div>
            <div class="small-4 columns">
                <div class="full-box" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/9.jpg');"></div>
            </div>
            <div class="small-3 columns">
                <div class="half-box" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/7.jpg');"></div>
                <div class="half-box" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/adventure.jpg');"></div>
            </div>
        </div>        
        <div class="text">
            <div class="row vertical-spacing">
                <div class="small-12 medium-10 medium-centered large-6 large-centered columns">
                    <h2 class="text-center">Photo Galleries</h2>
                    <p class="small-only-text-center">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eget ex sodales, maximus tellus ac, egestas mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eget ex sodales, maximus tellus ac, egestas mi. 
                    </p>
                    <p class="text-center"><a href="/galleries/" class="button"><span>View Our Galleries</span></a></p>
                </div>
            </div>    
        </div>
    </section>
</div>
<?php get_footer(); ?>
