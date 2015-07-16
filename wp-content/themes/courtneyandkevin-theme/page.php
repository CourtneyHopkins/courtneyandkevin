<?php get_header(); ?>
<div class="row">
    <div class="small-12 columns">
        <div class="floating-page">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            	<?php if ( has_post_thumbnail() ): ?>
            		<?php the_post_thumbnail(); ?>
            	<?php endif; ?>
            	<?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>
    </div>    
</div>    
<?php get_footer(); ?>
