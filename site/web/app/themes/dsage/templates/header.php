<header class="banner">
  <div class="container">
    <nav class="nav-primary navbar navbar-expand-md fixed-top navbar-transparent" color-on-scroll="500">
    <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav ml-auto']);
      endif;
      ?>
    </nav>
  </div>
</header>
