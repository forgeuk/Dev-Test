<?php

  if( function_exists('acf_add_options_page') ) {
	  $args = array(
		  'page_title' => 'Options'
	  );

	  acf_add_options_page( $args );
  }

  // Add Menu support to theme
  add_theme_support('menus');
  add_theme_support( 'post-thumbnails' );

  // Register theme menus
  function register_theme_menus()
  {
    register_nav_menus(
      array(
        'primary-menu' => __('Main Menu')
      )
    );
  }
  add_action('init', 'register_theme_menus');
