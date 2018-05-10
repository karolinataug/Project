<footer>
  <section class="footer-section">
    <div container="footer-container">
      <div class="flex-container3">
        <nav>
          <ul class="navigation-container">
            <?php
              $menu = wp_nav_menu(array(
              'theme_location'          =>'footer-menu',
              'echo'                    => false
              ) );
              echo strip_tags($menu, '<li><a><nav>');
            ?>
        </nav>
        <div class="text1-container">
          <p><i class="far fa-copyright"></i> 2014 BLUEASY. ALL RIGHTS RESERVED | TEMPLATE BY <a href="W3LAYOUTS">W3LAYOUTS</a></p>
        </div>
      </div>
    </div>
  </section>
</footer>
<?php wp_footer(); ?>
</body>
</html>
