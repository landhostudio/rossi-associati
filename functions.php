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
      
      // Disable support for comments and trackbacks in post types -------------

      function disable_comments_post_types_support() {

        $post_types = get_post_types();

        foreach ($post_types as $post_type) {

          if (post_type_supports($post_type, 'comments')) {

            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');

          }

        }

      }
      add_action('admin_init', 'disable_comments_post_types_support');

      // Close comments on the front-end ---------------------------------------

      function disable_comments_status() {

         return false;

      }
      add_filter('comments_open', 'disable_comments_status', 20, 2);
      add_filter('pings_open', 'disable_comments_status', 20, 2);

      // Hide existing comments ------------------------------------------------

      function disable_comments_hide_existing_comments($comments) {

        $comments = array();
        return $comments;

      }
      add_filter('comments_array', 'disable_comments_hide_existing_comments', 10, 2);

      // Remove comments page in menu ------------------------------------------

      function disable_comments_admin_menu() {

        remove_menu_page('edit-comments.php');

      }
      add_action('admin_menu', 'disable_comments_admin_menu');

      // Redirect any user trying to access comments page ----------------------

      function disable_comments_admin_menu_redirect() {

        global $pagenow;

        if ($pagenow === 'edit-comments.php') {
          wp_redirect(admin_url()); exit;
        }

      }
      add_action('admin_init', 'disable_comments_admin_menu_redirect');

      // Remove comments metabox from dashboard --------------------------------

      function disable_comments_dashboard() {

        remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

      }
      add_action('admin_init', 'disable_comments_dashboard');

      // Remove comments links from admin bar ----------------------------------

      function disable_comments_admin_bar() {

        if (is_admin_bar_showing()) {
          remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
        }

      }
      add_action('init', 'disable_comments_admin_bar');
      
    }

  }
  add_action('after_setup_theme', 'rossi_associati_setup');