<?php get_header(); ?>
<main>
    <section id="blog-content">
            <?php get_sidebar(); ?>
        <article class="blog-posts">
            <aside class="blog-posts-single">
                <div class="content-wrapper">
                    <?php 
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>4)); ?>

                    <?php if ( $wpb_all_query->have_posts() ) : ?>

                    <!-- the loop -->
                    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>


                    <p><?php get_template_part( 'entry' ); ?></p>
                    <?php endwhile; ?>
                    <!-- end of the loop -->

                    <?php wp_reset_postdata(); ?>

                    <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>
                </div>
            </aside>
        </article>
    </section>
    <?php get_footer(); ?>