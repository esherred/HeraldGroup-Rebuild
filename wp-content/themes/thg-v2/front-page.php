<?php get_header( 'front' ); the_post(); ?>
  
  <video id="heroVideo" poster="http://www.dcigroup.com//wp-content/themes/dcigroup/assets/storage/video/home-1.jpg" autoplay muted loop>
    <source src="<?php echo get_field( 'background', 'options' ); ?>" type="video/mp4">
  </video>
  <div id="hero-overlay"></div>
  
  <div class="container text-center">
    <div id="hero-wrapper">
      <div id="hero" class="text-center align-middle m-auto">
        <h1 class="display-3"><?php the_field( 'headline', get_the_ID() ); ?></h1>
        <?php if ( get_field( 'subhead', get_the_ID() ) ) : ?>
          <div class="my-4"><?php the_field( 'subhead', get_the_ID() ); ?></div>
        <?php endif; ?>
        <?php if( get_field( 'home_link', 'options' ) ) : ?>
          <div class="my-2">
            <a class="btn btn-primary btn-lg" href="<?php the_field( 'home_link', 'options' ) ?>" role="button">Learn more</a>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <section id="herald" class="bg-primary text-center p-5">
    <h2 class="display-4">[hêr’əld]</h2>
    <div><span>noun. /</span> One who actively promotes or advocates.</div>
  </section>

  <?php if( have_rows( 'home_section', 'options' ) ): ?>
    <?php while( have_rows( 'home_section', 'options' ) ): the_row(); ?>
      <section class="bg-white home-section">
        <div class="container p-5 border-bottom-1">
          <div class="row">
            <div class="col-12 col-lg-6">
              <?php the_sub_field( 'headline' ); ?>
            </div>
            <div class="col-12 col-lg-6">
              <?php the_sub_field( 'content' ); ?>
              <div class="more">
                <a href="<?php the_sub_field( 'destination_page' ); ?>"><strong><?php the_sub_field( 'destination_text' ); ?> <i class="fal fa-angle-right"></i></strong></a>
              </div>
            </div>
          </div>
          <?php if( get_sub_field( 'slider_images' ) ) : ?>
            <div class="row mt-5">
              <div class="col-12 text-center">
                <div class="row">
                  <div class="col-12 mb-3">
                    <div id="home_section_<?php echo get_row_index(); ?>" class="carousel slide fade-carousel" data-ride="carousel">
                      <div class="carousel-inner" style="max-height: 400px;">
                        <?php foreach( get_sub_field( 'slider_images' ) as $count => $image ) : ?>
                          <div class="carousel-item <?php echo $count == 0 ? 'active' : '' ?>">
                            <img class="img-fluid w-100" src="<?php echo $image['image']['sizes']['slider']; ?>" alt="">
                          </div>
                        <?php endforeach; ?>
                      </div>
                    </div>
                  </div>
                  <?php if ( count( get_sub_field( 'slider_images' ) ) > 1) : ?>
                    <div class="col-2 counter">1 / <?php echo count( get_sub_field( 'slider_images' ) ); ?></div>
                    <div class="col-8 py-2">
                      <div class="progress" style="height: 1px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo 100/count( get_field( 'home_section_<?php echo get_row_index(); ?>', 'options' )['slider_images'] ); ?>%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="<?php echo count( get_field( 'home_section_<?php echo get_row_index(); ?>', 'options' )['slider_images'] ); ?>"></div>
                      </div>
                    </div>
                    <div class="col-2"><a href="#home_section_<?php echo get_row_index(); ?>" role="button" data-slide="prev"><i class="fal fa-long-arrow-left mx-1" data-fa-transform="up-3"></i></a> <a href="#home_section_<?php echo get_row_index(); ?>" role="button" data-slide="next"><i class="fal fa-long-arrow-right mx-1" data-fa-transform="up-3"></i></a></div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          <?php endif; ?>
        </div>
      </section>
    <?php endwhile; ?>
  <?php endif; ?>

  <section class="bg-grey">
    <div class="container p-5">
      <div class="row mb-5">
        <div class="col-12 col-lg-6">
          <h2>Cool blog (the Sphere).<br>Cool people. Cool innovations.<br>Cool creative works.</h2>
        </div>
        <div class="col-12 col-lg-6">
          <p>For unique insights from our professional staff, please visit our blog, The Sphere.  Also, please take a look at some cool people, cool innovations and cool creative works developed by The Herald Group and others we admire.</p>
          <p><a href="#"><strong>Cool Stuff ></strong></a></p>
        </div>
      </div>
      <div class="row">
        <?php
          $results_args = array(
            'post_type' => 'post',
            'posts_per_page' => 2
          );
          $results_query = new WP_Query($results_args);
        ?>
        <?php if ( $results_query->have_posts() ) : ?>
          <?php while( $results_query->have_posts() ) : $results_query->the_post(); ?>
            <div class="col-12 col-lg-6">
              <div class="snippet d-table">
                <div class="image mb-3">
                  <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url( 'large' ); ?>" class="img-fluid" alt=""></a>
                </div>
                <div class="content p-3">
                  <h2><?php the_title(); ?></h2>
                </div>
                <div class="more p-3">
                  <a href="<?php the_permalink(); ?>">READ ON <i class="fal fa-angle-right"></i></a>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
      </div>
    </div>
  </section>

<?php get_footer(); ?>