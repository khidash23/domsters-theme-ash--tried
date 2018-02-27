<?php get_header(); ?>
<body <?php body_class(); ?>>

  <div id="header">
    <img class="logo_image" src="<?php bloginfo('template_directory'); ?>/images/logo.gif" alt="Jay Skript and the Domsters" />
  </div>

  <div id="navigation">
    <!-- wordpress nav -->
    <?php
      $defaults = array(
          'theme_location'  => 'main-menu',
          'menu'            => '',
          'container'       => 'nav',
          'container_class' => '',
          'container_id'    => '',
          'menu_class'      => 'main-nav',
          'menu_id'         => '',
          'echo'            => true,
          'fallback_cb'     => 'wp_page_menu',
          'before'          => '',
          'after'           => '',
          'link_before'     => '',
          'link_after'      => '',
          'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'depth'           => 0,
          'walker'          => ''
        );
        wp_nav_menu( $defaults );
    ?>
  </div>

  <div id="content">
    <h1>Welcome</h1>
    <p id="intro">Welcome to the official website of Jay Skript and the Domsters. Here, you can <a href="about.html">learn more about the band</a>, view <a href="photos.html">photos of the band</a>, find out about <a href="live.html">tour dates</a> and <a href="contact.html">get in touch with the band</a>.</p>
  </div>
  <?php get_footer(); ?>
