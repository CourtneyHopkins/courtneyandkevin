<?php get_header(); ?>
    <section class="page-title">
        <div class="row">
            <div class="small-12 columns">
                <h1 class="subheader text-center">Blog</h1>
            </div>
        </div>
    </section>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section class="blog-section article">
        <div class="row">
            <div class="small-12 columns medium-10 medium-centered large-9 large-centered content-width entry-content">
                <h3 class="subheader text-center"><a href="<?php the_permalink(); ?>"><strong><?php the_title(); ?></strong></a></h3>
                <div class="text-center">
                    <?php echo convoy_get_excerpt(); ?>
                    <?php if ( has_tag() ): ?>
                        <?php the_tags(); ?><br>
                    <?php endif; ?>
                    <a href="<?php the_permalink(); ?>" class="button small primary">Read More</a>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; ?>
        <?php the_posts_pagination(); ?>
    <?php endif; ?>
<?php get_footer(); ?>