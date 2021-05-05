<?php get_header(); ?>
<main>
    <section id="blog-content">
        <?php get_sidebar(); ?>
        <article class="blog-posts">
            <aside class="blog-posts-single">
                <div class="content-wrapper">
                    <?php the_post(); ?>
                    <h1 class="entry-title author">posts written by: <?php the_author_link(); ?></h1>
                    <div class="archive-meta">
                        <?php if ( '' != get_the_author_meta( 'user_description' ) ) { echo esc_html( get_the_author_meta( 'user_description' ) ); } ?>
                    </div>
                    <?php rewind_posts(); ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'entry' ); ?>
                    <?php endwhile; ?>
                    <?php get_template_part( 'nav', 'below' ); ?>
                </div>
            </aside>
        </article>
    </section>
    <?php get_footer(); ?>