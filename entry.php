<article class="blog-posts-single" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if ( is_singular() ) {
echo '<h1 class="entry-title">';
} else {
echo '<h2 class="entry-title">';
} ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
    <?php if ( is_singular() ) {
echo '</h1>';
} else {
echo '</h2>';
} ?> <?php edit_post_link(); ?>
    <?php if ( ! is_search() ) { get_template_part( 'entry', 'meta' ); } ?>
    <div class="blog-post-author-info">
    <img src="<?php echo get_template_directory_uri(); ?>/img/emery-simself.png" alt="Blogger Simery's Simself sitting at a laptop" />
        <span>
            <h3><i class="fas fa-map-marker-alt"></i> <?php the_field('location'); ?></h3>
            <h3><i class="fas fa-frown-open"></i> Mood: <span><?php the_field('mood'); ?></span></h3>
            <h3><i class="fas fa-music"></i> Now Playing: <span><?php the_field('now_playing'); ?></span></h3>
            <h3><i class="fas fa-poo"></i>  <?php
                if ( is_user_logged_in() ) {
                    echo 'Online';
                } else {
                    echo 'Offline';
                }
            ?>
            </h3>
        </span>
        <div class="featured-song">
            <?php the_field('featured_song'); ?>
        </div>
    </div>
    <?php get_template_part( 'entry', ( is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
    <?php if ( is_singular() ) { get_template_part( 'entry-footer' ); } ?>
</article>