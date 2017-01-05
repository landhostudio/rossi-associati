<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
  </head>
  <body>

    <header role="banner">

      <h1 class="hidden"><?php bloginfo('name'); ?></h1>

      <nav role="navigation">

        <h2 class="hidden"><?php esc_html_e('Navigation', 'rossi-associati'); ?></h2>

        <ul id="menu-menu-al-centro" class="menu">
          <li class="menu-item menu-logo">
            <a rel="home" href="<?php echo esc_url(home_url('/')); ?>">
              <span class="hidden"><?php bloginfo('name'); ?></span>
            </a>
          </li>
        </ul>

        <?php wp_nav_menu(array('theme_location' => 'menu_left')); ?>
        <?php wp_nav_menu(array('theme_location' => 'menu_right')); ?>

      </nav>

    </header>
