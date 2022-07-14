<?php
  function theme_support()
  {
    // Adds dynamic title tag support
    add_theme_support( 'title-tag');
    add_theme_support( 'custom-logo');
    add_theme_support( 'post-thumbnails');
  }
  add_action(  'after_setup_theme', 'theme_support' );

  function blog_menus()
  {
    $locations = array(
      'primary' => "Desktop Primary Left Sidebar",
      'footer' => "Footer Menu Items"
    );

    register_nav_menus( $locations );
  }
  add_action( 'init', 'blog_menus' );


  function register_styles()
  {
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style( 'style', get_template_directory_uri() . "/css/style.css", array('bootstrap'), $version, 'all' );
    wp_enqueue_style( 'bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all' );
    wp_enqueue_style( 'fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all' );
  }
  add_action(  'wp_enqueue_scripts', 'register_styles' );


  function register_scripts()
  {
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true );
    wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true );
    wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . "/js/main.js", array(), $version, true );
  }
  add_action(  'wp_enqueue_scripts', 'register_scripts' );

  function widget_areas()
  {
    register_sidebar( 
      array(
        'before_title' => '',
        'after_title' => '',
        'before_widget' => '',
        'after_widget' => '',
        'name' => 'Sidebar Area',
        'id' => 'sidebar-1',
        'description' => 'Sidebar Widget Area',
      )
    );

    
    register_sidebar( 
      array(
        'before_title' => '',
        'after_title' => '',
        'before_widget' => '',
        'after_widget' => '',
        'name' => 'Footer Area',
        'id' => 'footer-1',
        'description' => 'Footer Widget Area',
      )
    );
  }
  add_action(  'widgets_init', 'widget_areas' );


?>