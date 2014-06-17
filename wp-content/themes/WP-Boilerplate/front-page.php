<?php get_header(); ?>

<section id="content">
  <div class="container">
    <section id="contentPrimary">
      <div class="gutter">
        <?php the_content(); ?>
      </div>
    </section>

    <section id="contentSecondary">
      <?php if(have_posts()){while(have_posts()){the_post(); ?>
        <article class="post-entry">
          <div class="gutter">
            <h3><?php the_title(); ?></h3>
            <div class="post-meta">

            </div>
            <div class="post-excerpt">
              <?php the_excerpt(); ?>
            </div>
          </div>
        </article>
      <?php } } ?>
    </section>
  </div>
</section>


<?php get_footer(); ?>
