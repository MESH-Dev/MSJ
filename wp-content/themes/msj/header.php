<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
  <div class="container">
    <div class="gutter cf">

      <div id="logo">
          <a href="<?php echo home_url(); ?>/"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /></a>
      </div>

      <div id="mainNav">
        <?php if(has_nav_menu('main_nav')){
            $defaults = array(
            	'theme_location'  => 'main_nav',
            	'menu'            => 'main_nav',
            	'container'       => false,
            	'container_class' => '',
            	'container_id'    => '',
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
            ); wp_nav_menu( $defaults );
          }else{
            echo "<p><em>main_nav</em> doesn't exist! Create it and it'll render here.</p>";
          } ?>
      </div>

      <div id="contact-tab">
        <div class="gutter">
          <span class="top">Contact Us</span>
          <span class="bottom">T. 304-344-3144<br>Toll Free 1-800-319-7132</span>
        </div>
      </div>

    </div>
  </div>
</header>
