<?php get_header(); ?>

<section id="content">
  <div class="container">
    <div class="gutter">

      <section id="contentPrimary">
        <div class="gutter">
          <?php the_content(); ?>
        </div>
      </section>

      <section id="contentSecondary">
        <?php if(have_posts()){while(have_posts()){the_post(); ?>
          <article class="post-entry">
            <div class="gutter">
              <div class="post-entry-date">
                <i class="fa fa-calendar-o"></i> <?php the_date(); ?>
              </div>
              <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
              <div class="post-excerpt">
                <?php the_excerpt(); ?>
              </div>
              <div class="post-meta">
                <div class="post-meta-author">
                  <i class="fa fa-user"></i> <?php the_author(); ?>
                </div>
                <div class="post-meta-comments">
                  <i class="fa fa-comment-o"></i> <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
                </div>
                <div class="post-meta-category">
                  <i class="fa fa-folder-o"></i> <?php the_category(); ?>
                </div>
                <div class="post-meta-tags">
                  <i class="fa fa-tags"></i> <?php the_tags(''); ?>
                </div>
              </div>
            </div>
          </article>
        <?php } } ?>
      </section>

    </div>
  </div>
</section>


<?php get_footer(); ?>
