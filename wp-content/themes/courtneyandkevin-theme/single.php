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
        <h1 class="page-title text-center">Adventures</h1>
    </div> 
</section>
<div class="row page-wrapper">
    <div class="page-inner-wrapper clearfix">
        <div class="small-12 columns">
            <div class="row vertical-spacing">
                <div class="small-12 medium-10 medium-centered large-6 large-centered columns">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <h2 class="text-center"><?php the_title(); ?></h2>
                        <div class="byline text-center">
                            <?php echo get_the_date( 'F d Y' ); ?>
                        </div>
                        <div class="vertical-spacing"><?php the_content(); ?></div>
                    <?php endwhile; ?>
                        <?php wp_link_pages(); ?>
                    <?php endif; ?>
                    <div class="text-center"><a href="/field-notes/" class="button"><span>Back to Field Notes</span></a></div>
                </div>
            </div>
        </div>    
    </div>
</div>    
<?php get_footer(); ?>

