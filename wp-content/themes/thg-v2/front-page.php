<?php get_header( 'front' ); ?>

  <video id="heroVideo" poster="http://www.dcigroup.com//wp-content/themes/dcigroup/assets/storage/video/home-1.jpg" autoplay muted loop>
    <source src="<?php echo get_field( 'background', 'options' ); ?>" type="video/mp4">
  </video>
  <div id="hero-overlay"></div>
  
  <div class="container text-center">
    <div id="hero-wrapper">
      <div id="hero" class="text-center align-middle m-auto">
        <h1 class="display-4">Redefining Advocacy.</h1>
        <div class="my-4">Public Affairs  •  Issue Advocacy  •  Strategic Communications  •  Digital Engagement</div>
        <p>
          <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </p>
      </div>
    </div>
  </div>

  <section id="herald" class="bg-primary text-center p-5">
    <h2 class="display-4">[hêr’əld]</h2>
    <div><span>noun. /</span> One who actively promotes or advocates.</div>
  </section>

  <section class="bg-white">
    <div class="container p-5 border-bottom-1">
      <div class="row">
        <div class="col-12 col-lg-6">
          <h2><?php echo get_field( 'home_section_1', 'options' )['headline']; ?></h2>
        </div>
        <div class="col-12 col-lg-6">
          <p><?php echo get_field( 'home_section_1', 'options' )['content']; ?></p>
          <p>
            <a href="<?php echo get_field( 'home_section_1', 'options' )['destination_page']; ?>"><strong><?php echo get_field( 'home_section_1', 'options' )['destination_text']; ?> <i class="fal fa-angle-right"></i></strong></a>
          </p>
        </div>

        <?php if( get_field( 'home_section_1', 'options' )['slider_images'] ) : ?>
          <div class="col-12 text-center">
            <div class="row">
              <div class="col-12 mb-5">
                <div id="home_section_1" class="carousel slide fade-carousel" data-ride="carousel">
                  <div class="carousel-inner" style="max-height: 400px;">
                    <?php foreach( get_field( 'home_section_1', 'options' )['slider_images'] as $count => $image ) : ?>
                      <div class="carousel-item <?php echo $count == 0 ? 'active' : '' ?>">
                        <img class="img-fluid w-100" src="<?php echo $image['image']['sizes']['slider']; ?>" alt="">
                      </div>
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>
              <div class="col-2 counter">1 / <?php echo count( get_field( 'home_section_1', 'options' )['slider_images'] ); ?></div>
              <div class="col-8 py-2">
                <div class="progress" style="height: 1px;">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo 100/count( get_field( 'home_section_1', 'options' )['slider_images'] ); ?>%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="<?php echo count( get_field( 'home_section_1', 'options' )['slider_images'] ); ?>"></div>
                </div>
              </div>
              <div class="col-2"><a href="#home_section_1" role="button" data-slide="prev"><i class="fal fa-long-arrow-left mx-1" data-fa-transform="up-3"></i></a> <a href="#home_section_1" role="button" data-slide="next"><i class="fal fa-long-arrow-right mx-1" data-fa-transform="up-3"></i></a></div>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section class="bg-white">
    <div class="container p-5">
      <div class="row">
        <div class="col-12 col-lg-6">
          <h2><?php echo get_field( 'home_section_2', 'options' )['headline']; ?></h2>
        </div>
        <div class="col-12 col-lg-6">
          <p><?php echo get_field( 'home_section_2', 'options' )['content']; ?></p>
          <p>
            <a href="<?php echo get_field( 'home_section_2', 'options' )['destination_page']; ?>"><strong><?php echo get_field( 'home_section_2', 'options' )['destination_text']; ?> <i class="fal fa-angle-right"></i></strong></a>
          </p>
        </div>

        <?php if( get_field( 'home_section_2', 'options' )['slider_images'] ) : ?>
          <div class="col-12 text-center">
            <div class="row">
              <div class="col-12 mb-5">
                <div id="home_section_2" class="carousel slide fade-carousel" data-ride="carousel">
                  <div class="carousel-inner" style="max-height: 400px;">
                    <?php foreach( get_field( 'home_section_2', 'options' )['slider_images'] as $count => $image ) : ?>
                      <div class="carousel-item <?php echo $count == 0 ? 'active' : '' ?>">
                        <img class="img-fluid w-100" src="<?php echo $image['image']['sizes']['slider']; ?>" alt="">
                      </div>
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>
              <div class="col-2 counter">1 / <?php echo count( get_field( 'home_section_2', 'options' )['slider_images'] ); ?></div>
              <div class="col-8 py-2">
                <div class="progress" style="height: 1px;">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo 100/count( get_field( 'home_section_2', 'options' )['slider_images'] ); ?>%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="<?php echo count( get_field( 'home_section_2', 'options' )['slider_images'] ); ?>"></div>
                </div>
              </div>
              <div class="col-2"><a href="#home_section_2" role="button" data-slide="prev"><i class="fal fa-long-arrow-left mx-1" data-fa-transform="up-3"></i></a> <a href="#home_section_2" role="button" data-slide="next"><i class="fal fa-long-arrow-right mx-1" data-fa-transform="up-3"></i></a></div>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section id="services" class="bg-white">
    <div class="container-fluid">
      <div class="row">
        <?php 
          $services = get_field( 'services', 'options' );
          foreach ( $services as $service ) :
        ?>
          <div id="<?php echo $service['service']['title'] ?>" class="col-2 px-1">
            <div style="background: linear-gradient(rgba(56,60,65,.6),rgba(56,60,65,.6)), url(http://placekitten.com/305/787);" class="services p-3">
              <div class="top">
                <i class="fal fa-minus d-block"></i>
                <?php echo $service['service']['title'] ?>
              </div>
              <div class="bottom">
                <div class="read">
                  <div class="read fa-2x">
                    <span class="fa-layers fa-fw">
                      <i class="fal fa-square-full" style="color: #fff;"></i>
                      <i class="fal fa-angle-right" data-fa-transform="shrink-6" style="color: #fff;"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="bg-white">
    <div class="container p-5 border-bottom-1">
      <div class="row">
        <div class="col-12 col-lg-6">
          <h2><?php echo get_field( 'home_section_3', 'options' )['headline']; ?></h2>
        </div>
        <div class="col-12 col-lg-6">
          <p><?php echo get_field( 'home_section_3', 'options' )['content']; ?></p>
          <p>
            <a href="<?php echo get_field( 'home_section_3', 'options' )['destination_page']; ?>"><strong><?php echo get_field( 'home_section_3', 'options' )['destination_text']; ?> <i class="fal fa-angle-right"></i></strong></a>
          </p>
        </div>

        <?php if( get_field( 'home_section_3', 'options' )['slider_images'] ) : ?>
          <div class="col-12 text-center">
            <div class="row">
              <div class="col-12 mb-5">
                <div id="home_section_3" class="carousel slide fade-carousel" data-ride="carousel">
                  <div class="carousel-inner" style="max-height: 400px;">
                    <?php foreach( get_field( 'home_section_3', 'options' )['slider_images'] as $count => $image ) : ?>
                      <div class="carousel-item <?php echo $count == 0 ? 'active' : '' ?>">
                        <img class="img-fluid w-100" src="<?php echo $image['image']['sizes']['slider']; ?>" alt="">
                      </div>
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>
              <div class="col-2 counter">1 / <?php echo count( get_field( 'home_section_3', 'options' )['slider_images'] ); ?></div>
              <div class="col-8 py-2">
                <div class="progress" style="height: 1px;">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo 100/count( get_field( 'home_section_3', 'options' )['slider_images'] ); ?>%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="<?php echo count( get_field( 'home_section_3', 'options' )['slider_images'] ); ?>"></div>
                </div>
              </div>
              <div class="col-2"><a href="#home_section_3" role="button" data-slide="prev"><i class="fal fa-long-arrow-left mx-1" data-fa-transform="up-3"></i></a> <a href="#home_section_3" role="button" data-slide="next"><i class="fal fa-long-arrow-right mx-1" data-fa-transform="up-3"></i></a></div>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section class="bg-white">
    <div class="container p-5">
      <div class="row">
        <div class="col-12 col-lg-6">
          <h2><?php echo get_field( 'home_section_4', 'options' )['headline']; ?></h2>
        </div>
        <div class="col-12 col-lg-6">
          <p><?php echo get_field( 'home_section_4', 'options' )['content']; ?></p>
          <p>
            <a href="<?php echo get_field( 'home_section_4', 'options' )['destination_page']; ?>"><strong><?php echo get_field( 'home_section_4', 'options' )['destination_text']; ?> <i class="fal fa-angle-right"></i></strong></a>
          </p>
        </div>

        <?php if( get_field( 'home_section_4', 'options' )['slider_images'] ) : ?>
          <div class="col-12 text-center">
            <div class="row">
              <div class="col-12 mb-5">
                <div id="home_section_4" class="carousel slide fade-carousel" data-ride="carousel">
                  <div class="carousel-inner" style="max-height: 400px;">
                    <?php foreach( get_field( 'home_section_4', 'options' )['slider_images'] as $count => $image ) : ?>
                      <div class="carousel-item <?php echo $count == 0 ? 'active' : '' ?>">
                        <img class="img-fluid w-100" src="<?php echo $image['image']['sizes']['slider']; ?>" alt="">
                      </div>
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>
              <div class="col-2 counter">1 / <?php echo count( get_field( 'home_section_4', 'options' )['slider_images'] ); ?></div>
              <div class="col-8 py-2">
                <div class="progress" style="height: 1px;">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo 100/count( get_field( 'home_section_4', 'options' )['slider_images'] ); ?>%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="<?php echo count( get_field( 'home_section_4', 'options' )['slider_images'] ); ?>"></div>
                </div>
              </div>
              <div class="col-2"><a href="#home_section_4" role="button" data-slide="prev"><i class="fal fa-long-arrow-left mx-1" data-fa-transform="up-3"></i></a> <a href="#home_section_4" role="button" data-slide="next"><i class="fal fa-long-arrow-right mx-1" data-fa-transform="up-3"></i></a></div>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

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