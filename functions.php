<?php

  if (!function_exists('rossi_associati_setup')) {

    function rossi_associati_setup() {
      
      // Let WordPress manage the document title -------------------------------
			
      add_theme_support('title-tag');

			// Enable support for Post Thumbnails on posts and pages -----------------
			
      add_theme_support('post-thumbnails');

			// Enables dynamic navigation --------------------------------------------

      register_nav_menus( array(
        'menu' => 'Menu'
			));

      // Load the assets -------------------------------------------------------
			
      function init_assets() {
        wp_enqueue_style('css', get_template_directory_uri() . '/dist/css/all.css', array(), '1.0.0');
        wp_enqueue_script('plugins', get_template_directory_uri() . '/dist/js/plugins.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('scripts', get_template_directory_uri() . '/dist/js/scripts.js', array('jquery'), '1.0.0', true);
			}
			add_action('wp_enqueue_scripts', 'init_assets');
      
      // Content Width ---------------------------------------------------------
      
      if (!isset($content_width)) $content_width = 1280;

      // Soil ------------------------------------------------------------------
      
      add_theme_support('soil-clean-up');
      add_theme_support('soil-disable-trackbacks');
      add_theme_support('soil-nav-walker');
      add_theme_support('soil-relative-urls');
      
      // Comments and trackbacks -----------------------------------------------
      
      get_template_part('inc/comments');

      // Menu walker -----------------------------------------------------------
      
      get_template_part('inc/menu');
      
      // Advanced Custom Fields ------------------------------------------------
      
      get_template_part('inc/acf');
      
    }

  }
  add_action('after_setup_theme', 'rossi_associati_setup');
