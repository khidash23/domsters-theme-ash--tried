<?php get_header(); ?>
<body <?php body_class(); ?>>
  <div id="header">
    <img src="<?php bloginfo('template_directory'); ?>/images/logo.gif" alt="Jay Skript and the Domsters" />
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
  <div class="container">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php the_content(); ?>

      <?php endwhile; endif; ?>
  </div>

  <div class="row">
    <div class="col-md-4">
        <?php if ( dynamic_sidebar( 'front-left' ) ); ?>
    </div>
    <div class="col-md-4">
      <?php if ( dynamic_sidebar( 'front-center' ) ); ?>
    </div>
    <div class="col-md-4">
      <?php if ( dynamic_sidebar( 'front-right' ) ); ?>
    </div>
  </div>

  <?php get_footer(); ?>
