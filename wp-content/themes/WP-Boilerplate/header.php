<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
  <div class="container">
    <div class="gutter">
      <div id="logo">
          <img src="<?php echo header_image(); ?>" />logo
      </div>
      <?php $defaults = array(
      	'theme_location'  => 'main_nav',
      	'menu'            => 'main_nav',
      	'container'       => 'div',
      	'container_class' => '',
      	'container_id'    => 'mainNav',
      	'menu_class'      => 'menu',
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
      ); wp_nav_menu( $defaults ); ?>
    </div>
  </div>
</header>
