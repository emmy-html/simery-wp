
<?php get_header(); ?>
<body class="body-home">
  <main>
    <section id="home-page">
      <div class="simery-span">
          <div class="simery-span-content">
                <h1>Simery</h1>
                <h2>Learning to mod the world's most broken game, one day at a time.</h2>
                <div class="button-container">
                    <a href="<?php echo get_page_link( get_page_by_title( blog )->ID ); ?>">Enter &#8250;</a>
                </div>
          </div>
          <aside class="footer-social-media">
            <i class="fab fa-twitter fa-2x"></i>
            <i class="fab fa-github-alt fa-2x"></i>
            <i class="fab fa-tumblr fa-2x"></i>
            </aside>
      </div>
    </section>
<?php get_footer(); ?>