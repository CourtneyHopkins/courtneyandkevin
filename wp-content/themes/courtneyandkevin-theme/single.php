<?php get_header(); ?>
    <section class="page-title">
        <div class="row">
            <div class="small-12 columns">
                <h1 class="subheader text-center">Blog</h1>
            </div>
        </div>
    </section>
    <section class="entry-content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="row">
            <div class="small-12 medium-8 medium-centered large-push-2 large-10 large-uncentered columns single-content">
                <h3 class="subheader"><strong><?php the_title(); ?></strong></h3>
                <div class="byline">
                    <?php echo get_the_date( 'F d Y' ); ?>
                    <?php if ( has_tag() ): ?>
                        <p><?php the_tags(); ?></p>
                    <?php endif; ?>
                </div>
                <?php the_content(); ?>
                <div class="comment list">
                    <?php comments_template(); ?>
                    <?php paginate_comments_links(); ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
        <?php wp_link_pages(); ?>
    <?php endif; ?>
    </section>
<?php get_footer(); ?>