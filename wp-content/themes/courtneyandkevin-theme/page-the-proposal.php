<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
        <h1 class="page-title text-center">The Proposal</h1>
    </div> 
</section>
<div class="row page-wrapper">
    <div class="page-inner-wrapper clearfix">
        <div class="small-12 columns">
        	<div class="row vertical-spacing">
                <div class="small-12 medium-10 medium-centered large-6 large-centered columns">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eget ex sodales, maximus tellus ac, egestas mi. Nam lacinia, augue in porttitor pulvinar, justo magna consectetur nibh, eget facilisis leo lacus sed massa. Nulla facilisis viverra sem, id tincidunt magna. Quisque placerat lacinia fermentum. Morbi id condimentum turpis. Aliquam cursus neque erat, vel convallis nisi finibus vel. Praesent sit amet suscipit eros, non faucibus turpis. Aenean nec tortor id eros porttitor interdum gravida at sapien. Vivamus eget arcu non felis viverra vehicula vitae a lacus.
                    </p>
                </div>
            </div>
        	<div class="row">
                <ul class="small-block-grid-1 medium-block-grid-2">
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Kevin-courtney-engagement-1.jpg" alt="" />
                    </li>    
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Kevin-courtney-engagement-2.jpg" alt="" />
                    </li>
                </ul>    
            </div>
            <div class="row vertical-spacing">
                <div class="small-12 medium-10 medium-centered large-6 large-centered columns">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eget ex sodales, maximus tellus ac, egestas mi. Nam lacinia, augue in porttitor pulvinar, justo magna consectetur nibh, eget facilisis leo lacus sed massa. Nulla facilisis viverra sem, id tincidunt magna. Quisque placerat lacinia fermentum. Morbi id condimentum turpis. Aliquam cursus neque erat, vel convallis nisi finibus vel. Praesent sit amet suscipit eros, non faucibus turpis. Aenean nec tortor id eros porttitor interdum gravida at sapien. 
                    </p>
                    <p>
                        Vivamus eget arcu non felis viverra vehicula vitae a lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eget ex sodales, maximus tellus ac, egestas mi. Nam lacinia, augue in porttitor pulvinar, justo magna consectetur nibh, eget facilisis leo lacus sed massa. Nulla facilisis viverra sem, id tincidunt magna. Quisque placerat lacinia fermentum. Morbi id condimentum turpis. Aliquam cursus neque erat, vel convallis nisi finibus vel. Praesent sit amet suscipit eros, non faucibus turpis. Aenean nec tortor id eros porttitor interdum gravida at sapien. Vivamus eget arcu non felis viverra vehicula vitae a lacus.
                    </p>
                    <p class="text-center">
                        <a href="/proposal-gallery/" class="button"><span>See all proposal photos</span></a>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="small-12 medium-10 medium-centered large-6 large-centered columns">
                    <h2 class="text-center">Watch our Video!</h2>
                    <div class="flex-video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/uWVu6Cth3Sw" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="row vertical-spacing">
                <div class="small-12 medium-10 medium-centered large-6 large-centered columns text-center">
                    <p>Now that you know our story, get all of the information you need to be an up-to-date wedding guest!</p>
                    <p>We can't wait to share our big day with you :)</p>
                    <br>
                    <p><a href="/the-wedding/" class="button"><span>Wedding Details</span></a></p>
                </div>
            </div>
        </div>    
    </div>
</div>    
<?php endwhile; endif; ?>
<?php get_footer(); ?>
