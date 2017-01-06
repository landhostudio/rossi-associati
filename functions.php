<?php

  if (!function_exists('rossi_associati_setup')) {

    function rossi_associati_setup() {
      
      // Let WordPress manage the document title -------------------------------
			
      add_theme_support('title-tag');

			// Enable support for Post Thumbnails on posts and pages -----------------
			
      add_theme_support('post-thumbnails');

			// Enables dynamic navigation --------------------------------------------

      register_nav_menus( array(
				'menu_left' => 'Menu a sinistra',
        'menu_right' => 'Menu a destra'
			));

      // Load the assets -------------------------------------------------------
			
			function init_assets() {

        wp_enqueue_style('all-css', get_template_directory_uri() . '/dist/css/all.css', array(), '1.0.0', 'all-css');

        wp_register_script('all-js', get_template_directory_uri() . '/dist/js/all.js', array(), '1.0.0', 'all-js');
        wp_enqueue_script('all-js');

			}
			add_action('wp_enqueue_scripts', 'init_assets');
      
      // Soil ------------------------------------------------------------------
      
      add_theme_support('soil-clean-up');
      add_theme_support('soil-disable-trackbacks');
      add_theme_support('soil-nav-walker');
      add_theme_support('soil-relative-urls');
      
      // Comments and trackbacks -----------------------------------------------
      
      get_template_part('inc/comments');
      
      // Advanced Custom Fields ------------------------------------------------
      
      get_template_part('inc/acf');
      
    }

  }
  add_action('after_setup_theme', 'rossi_associati_setup');
