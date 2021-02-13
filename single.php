<?php get_header(); ?>
<main>
    <section id="blog-content">
        <?php get_sidebar(); ?>
        <article class="blog-posts">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="blog-posts-single">
                <div class="content-wrapper">
                <?php get_template_part( 'entry' ); ?>
                    <footer class="post-footer">
                        <?php get_template_part( 'nav', 'below-single' ); ?>
                    </footer>
                    <?php if ( comments_open() && ! post_password_required() ) { comments_template( '', true ); } ?>
                    <?php endwhile; endif; ?>
                </div>
            </article>
        </article>
    </section>
    <?php get_footer(); ?>