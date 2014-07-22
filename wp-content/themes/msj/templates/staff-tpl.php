<?php /* Template Name: Staff */ get_header(); ?>
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
        <div id="staffCont">
          <?php $staff = get_field('staff_members');
          $i=0;
          echo "<div class='staff-row'>";
          foreach($staff as $member){
              if($i%4==0&&$i!=0){echo "<div class='staff-exp'><div class='gutter'></div></div></div><div class='staff-row'>";}
              $i++; ?>
            <div class="staff-member <?php echo cycle('a','b','c','d'); ?>">
              <div class="staff-member-portrait">
                <?php $img = wp_get_attachment_image_src($member['portrait'], array(131,131)); ?>
                <img src="<?php echo $img[0]; ?>" height="<?php echo $img[2]; ?>" width="<?php echo $img[1]; ?>" />
              </div>
              <div class="staff-member-info">
                <span class="staff-member-name"><?php echo $member['name']; ?></span>
                <span class="staff-member-position"><?php echo $member['position']; ?></span>
                <div class="staff-member-bio"><?php echo $member['about']; ?></div>
              </div>
            </div>
          <?php } echo "<div class='staff-exp'><div class='gutter'></div></div></div>"; ?>
        </div>
        <div id="boardCont">
          <h2 class="page-title">Our Board</h2>
          <?php $boards = get_field('board_members');
          foreach($boards as $board){
            echo "<div class='board-member ".cycle('left','right')."'>".$board['name']."</div>";
          } ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php } } ?>
<?php get_footer(); ?>
