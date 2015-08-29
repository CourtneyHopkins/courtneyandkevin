<?php get_header(); ?>
<section class="hp-opening internal-header" data-ibg-bg="<?php echo get_template_directory_uri(); ?>/images/hp.jpg">
    <div class="row">
        <div class="outer">
            <div class="inner">
                <img src="<?php echo get_template_directory_uri(); ?>/images/courtneyandkevin.png" id="logo" alt="kevin &amp; courtney"/>
            </div>    
        </div>    
    </div> 
</section>
<div class="row">
    <div class="small-12 columns">
        <div class="floating-page">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            	<?php the_title( '<h1 class="entry-title text-center">', '</h1>' ); ?>
            	<?php if ( has_post_thumbnail() ): ?>
            		<?php the_post_thumbnail(); ?>
            	<?php endif; ?>
            	<?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>
    </div>    
</div>    
<?php get_footer(); ?>
