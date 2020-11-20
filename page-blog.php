<?php get_header(); ?>
<main>
    <section id="blog-content">
    <article class="blog-posts">
    <?php 
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
 
<?php if ( $wpb_all_query->have_posts() ) : ?>
 

 
    <!-- the loop -->
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
    <aside class="blog-posts-single">
      <div class="content-wrapper">

              <p><?php get_template_part( 'entry' ); ?></p>
      </div>
    </aside>
    <?php endwhile; ?>
    <!-- end of the loop -->
 

 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</article>
<?php get_sidebar(); ?>
<?php get_footer(); ?>