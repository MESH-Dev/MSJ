<?php
  //Cycle
  function cycle($first_value, $values = '*') {
    static $count = array();
    $values = func_get_args();
    $name = 'default';
    $last_item = end($values);
    if( substr($last_item, 0, 1) === ':' ) {
      $name = substr($last_item, 1);
      array_pop($values);
    }
    if( !isset($count[$name]) )
      $count[$name] = 0;
    $index = $count[$name] % count($values);
    $count[$name]++;
    return $values[$index];
  }

  //enqueue scripts and styles *use production assets. Dev assets are located in assets/css and assets/js
  function MSJ_scripts() {
    wp_enqueue_script('typekit-lib','//use.typekit.net/xcm6wss.js');
    wp_enqueue_style('font-awesome',get_template_directory_uri().'/assets/libs/font-awesome-4.1.0/css/font-awesome.min.css');
  	wp_enqueue_style( 'MSJ-style', get_template_directory_uri().'/assets/prod/production.min.css');
  	wp_enqueue_script( 'MSJ-script', get_template_directory_uri().'/assets/prod/MSJ.min.js', array('jquery'), '1.0.0', true );
    $translation_array = array(
      'home_url' => home_url('/'),
      'ajax_url' => admin_url('admin-ajax.php')
    );
    wp_localize_script( 'MSJ-script', 'MSJ', $translation_array );
  }
  add_action( 'wp_enqueue_scripts', 'MSJ_scripts' );

  //theme supports
  add_theme_support('post-thumbnails');
  $defaults = array(
    'flex-height'   => true,
    'flex-width'    => true,
    'height'        => 91,
    'width'         => 208,
    'default-image' => get_template_directory_uri() . '/assets/img/logo.png',
    'header-text'   => false
  );
  add_theme_support('custom-header', $defaults);
  add_theme_support('custom-background');
  add_theme_support('html5');
  add_theme_support('automatic-feed-links');

  //menus
  register_nav_menus(array(
  	'main_nav' => 'Header and breadcrumb trail heirarchy',
  	'social_nav' => 'Social menu used throughout'
  ));

  //widgets
  register_sidebar(array(
	   'name'          => __( 'Footer - Column 1' ),
	   'id'            => 'footer-col1',
	   'description'   => '',
     'class'         => '',
	   'before_widget' => '',
	   'after_widget'  => '',
	   'before_title'  => '',
	   'after_title'   => '' ));
  register_sidebar(array(
     'name'          => __( 'Footer - Column 2' ),
     'id'            => 'footer-col2',
     'description'   => '',
     'class'         => '',
     'before_widget' => '',
     'after_widget'  => '',
     'before_title'  => '',
     'after_title'   => '' ));
  register_sidebar(array(
     'name'          => __( 'Footer - Column 3' ),
     'id'            => 'footer-col3',
     'description'   => '',
     'class'         => '',
     'before_widget' => '',
     'after_widget'  => '',
     'before_title'  => '',
     'after_title'   => '' ));
  register_sidebar(array(
     'name'          => __( 'Footer - Column 4' ),
     'id'            => 'footer-col4',
     'description'   => '',
     'class'         => '',
     'before_widget' => '',
     'after_widget'  => '',
     'before_title'  => '',
     'after_title'   => '' ));
  register_sidebar(array(
     'name'          => __( 'Footer - Column 5' ),
     'id'            => 'footer-col5',
     'description'   => '',
     'class'         => '',
     'before_widget' => '',
     'after_widget'  => '',
     'before_title'  => '',
     'after_title'   => '' ));

  //editor style
  add_editor_style('assets/css/editor.css');

  //login page style
  function MSJ_loginCSS() {
	   echo '<link rel="stylesheet" type="text/css" href="'.get_bloginfo('template_directory').'/assets/css/login.css"/>';
  } add_action('login_head', 'MSJ_loginCSS');

  //footer attribution
  function MSJ_footer_admin () {
	   echo 'Theme developed by <a href="http://meshfresh.com">MESH Design & Development</a>.';
  } add_filter('admin_footer_text', 'MSJ_footer_admin');

  //disable code editors
  define('DISALLOW_FILE_EDIT', true);

  //homepage title functions
  add_filter( 'wp_title', 'MSJ_hometitle' );
  function MSJ_hometitle( $title ){
    if( empty( $title ) && ( is_home() || is_front_page() ) ) {
      return __( 'Home', 'theme_domain' ) . ' | ' . get_bloginfo( 'description' );
    } return $title;
  }

?>
