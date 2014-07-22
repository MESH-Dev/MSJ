<?php /* Template Name: Work */ get_header(); ?>
<?php if(have_posts()){while(have_posts()){the_post(); ?>
<section id="content" class="cf">
  <div class="container cf">
    <div class="gutter cf">
      <div id="contentPrimary">
        <div class="gutter">
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
      </div>

      <div id="secondaryCont">
        <div id="titleCont">
          <h2 class="page-title"><?php the_title(); ?></h2>
        </div>
        <div id="extraCont">
          <div class="work-banner">
            <img src="<?php the_field('banner'); ?>" />
          </div>
          <div class="work-quote">
            "<?php the_field('quote'); ?>"<span class="work-attribution"> — <?php the_field('attribution'); ?></span>
          </div>
        </div>
        <div id="contentSecondary">
          <div class="gutter">
            <div class="page-intro">
              <?php the_field('intro'); ?>
            </div>
            <div class="page-content">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
        <div id="contentTertiary">
          <div class="gutter">
            <?php $panes = get_field('sidebar');
            foreach($panes as $pane){
              echo "<div class='sidebar-pane'><div class='gutter'>".$pane['panel']."</div></div>";
            } ?>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<?php } } ?>
<?php get_footer(); ?>
