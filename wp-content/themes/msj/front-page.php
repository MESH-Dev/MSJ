<?php get_header(); ?>
<div id="scrollCont" data-div="0">
  <div id="scrollJack">
    <?php if(have_posts()){while(have_posts()){the_post(); ?>
    <section id="home-intro">
      <div class="container cf">
        <div class="gutter cf">

          <div id="contentPrimary">
            <div id="logo-overlay"></div>
            <div id="showTrack">
              <div id="s1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ls-1.png" /></div>
              <div id="s2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ls-2.png" /></div>
              <div id="s3"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ls-4.png" /></div>
              <div id="s4"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ls-3.png" /></div>
            </div>
          </div>

          <div id="contentSecondary">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-type.png" />
          </div>

          <div id="contentTertiary">
            <div class="gutter">
              <?php the_content(); ?>
            </div>
          </div>

          <div id="home-exp">
            <div class="expand-pane purple">
              <span class="title">What We Do</span>
              <div class="expansion cf">
                <div class="exp-col a">
                  <div class="gutter">
                    <?php the_field('left_column'); ?>
                  </div>
                </div>
                <div class="exp-col b">
                  <div class="gutter">
                    <?php the_field('center_column'); ?>
                  </div>
                </div>
                <div class="exp-col c">
                  <div class="gutter">
                    <?php the_field('right_column'); ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="expand-pane blue">
              <span class="title">Case Studies</span>
              <div class="expansion cf">
                <div class="exp-col a" data-next="1">
                  <div class="gutter">
                    <span class="story-title">The Jones' Story</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/stArrow.png" />
                  </div>
                </div>
                <div class="exp-col b" data-next="2">
                  <div class="gutter">
                    <span class="story-title">Bob's Story</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/stArrow.png" />
                  </div>
                </div>
                <div class="exp-col c" data-next="3">
                  <div class="gutter">
                    <span class="story-title">The Smiths' Story</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/stArrow.png" />
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </section>

    <section class="home-story a">
      <div class="home-story-banner">
        <div class="container" style="background:url(<?php echo get_field('s1_banner')['sizes']['large'];?>) center center no-repeat;"></div>
      </div>
      <div class="home-story-intro" class="cf">
        <div class="container">
          <div class="gutter">
            <?php the_field('s1_intro'); ?>
          </div>
        </div>
      </div>
      <div class="container cf">
        <div class="home-story-content cf">
          <div class="home-story-contentPrimary">
            <div class="gutter">
              <?php the_field('s1_content'); ?>
            </div>
            <div class="home-story-contact">
              <div class="home-story-contact-top">
                Does this sound like you?
              </div>
              <div class="home-story-contact-bottom">
                Call us now and let us help!<br>304-344-3144
              </div>
              <div class="home-story-next" data-next="2">
                <span>Next Case Study</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/storyNext.png" />
              </div>
            </div>
          </div>

          <div class="home-story-contentSecondary">
            <div class="gutter">
              <?php the_field('s1_sidebar'); ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="home-story b">
      <div class="home-story-banner">
        <div class="container" style="background:url(<?php echo get_field('s2_banner')['sizes']['large'];?>) center center no-repeat;"></div>
      </div>
      <div class="home-story-intro" class="cf">
        <div class="container">
          <div class="gutter">
            <?php the_field('s2_intro'); ?>
          </div>
        </div>
      </div>
      <div class="container cf">
        <div class="home-story-content cf">
          <div class="home-story-contentPrimary">
            <div class="gutter">
              <?php the_field('s2_content'); ?>
            </div>
            <div class="home-story-contact">
              <div class="home-story-contact-top">
                Does this sound like you?
              </div>
              <div class="home-story-contact-bottom">
                Call us now and let us help!<br>304-344-3144
              </div>
              <div class="home-story-next" data-next="3">
                <span>Next Case Study</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/storyNext.png" />
              </div>
            </div>
          </div>

          <div class="home-story-contentSecondary">
            <div class="gutter">
              <?php the_field('s2_sidebar'); ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="home-story c">
      <div class="home-story-banner">
        <div class="container" style="background:url(<?php echo get_field('s3_banner')['sizes']['large'];?>) center center no-repeat;"></div>
      </div>
      <div class="home-story-intro" class="cf">
        <div class="container">
          <div class="gutter">
            <?php the_field('s3_intro'); ?>
          </div>
        </div>
      </div>
      <div class="container cf">
        <div class="home-story-content cf">
          <div class="home-story-contentPrimary">
            <div class="gutter">
              <?php the_field('s3_content'); ?>
            </div>
            <div class="home-story-contact">
              <div class="home-story-contact-top">
                Does this sound like you?
              </div>
              <div class="home-story-contact-bottom">
                Call us now and let us help!<br>304-344-3144
              </div>
              <div class="home-story-next" data-next="1">
                <span>Next Case Study</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/storyNext.png" />
              </div>
            </div>
          </div>

          <div class="home-story-contentSecondary">
            <div class="gutter">
              <?php the_field('s3_sidebar'); ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php } } ?>
  </div>
</div>
<?php get_footer(); ?>
