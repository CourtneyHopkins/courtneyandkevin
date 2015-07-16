<?php get_header(); ?>
<h1 class="entry-title">Search results for: <?php echo get_search_query(); ?></h1>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h3 class="subheader text-center"><a href="<?php the_permalink(); ?>"><strong><?php the_title(); ?></strong></a></h3>
	<p><?php echo convoy_get_excerpt(); ?></p>
	<a href="<?php the_permalink(); ?>" class="button small primary">Read More</a>
<?php endwhile; endif; ?>
<?php get_footer(); ?>