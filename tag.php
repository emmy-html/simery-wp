<?php get_header(); ?>
<main>
    <section id="blog-content">
        <?php get_sidebar(); ?>
        <article class="blog-posts">
            <aside class="blog-posts-single">
                <div class="content-wrapper">
                    <h1 class="entry-title"><?php single_term_title(); ?></h1>
                    <div class="archive-meta">
                        <?php if ( '' != the_archive_description() ) { echo esc_html( the_archive_description() ); } ?>
                    </div>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'entry' ); ?>
                    <?php endwhile; endif; ?>
                    <?php get_template_part( 'nav', 'below' ); ?>
                </div>
            </aside>
        </article>
    </section>
    <?php get_footer(); ?>