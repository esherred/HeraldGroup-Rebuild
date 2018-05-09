<?php /* Template Name: What We Do Page Template */ get_header( 'gray' ); ?>

  <main>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="bg-white">
        <div class="container">
          <div class="row px-5 pt-5 pb-3">
            <div class="col-12 col-lg-6">
              <h1><?php the_field('headline'); ?></h1>
            </div>
            <div class="col-12 col-lg-6">
              <?php if (get_field('subhead')) : ?>
                <p><?php the_field('subhead'); ?></p>
              <?php endif; ?>
            </div>
          </div>
          <?php if(get_the_post_thumbnail_url()): ?>
              <div class="row px-5 py-3">
                <div class="col-12 text-center">
                  <img src="<?php the_post_thumbnail_url( 'full' ); ?>" class="img-fluid" alt="">
                </div>
              </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="bg-gray py-5">
        <section id="services">
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
      </div>
    </div>
    <?php endwhile; endif; ?>
  </main>

<?php get_footer(); ?>
