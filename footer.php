</main>
<footer>
<div class="content-wrapper">
    <div class="footer-content">
      <aside>
      <i class="fas fa-moon"></i>
        &copy; <?php echo esc_html( date_i18n( __( 'Y', 'simery' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
        <h1>Simery</h1>
        be the first to know when my mods go live!
        <form>
          <input type="email" placeholder="name@email.com"></input>
          <input type="name" placeholder="your name"></input>
          <input type="submit" placeholder="Submit"></input>
        </form>
      </aside>
      <aside class="footer-social-media">
        <a href="https://twitter.com/simerymods" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://github.com/emmy-html" target="_blank"><i class="fab fa-github-alt"></i></a>
        <i class="fab fa-tumblr"></i>
      </aside>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>