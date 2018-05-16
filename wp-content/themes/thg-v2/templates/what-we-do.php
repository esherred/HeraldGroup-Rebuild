<?php /* Template Name: What We Do Page Template */ get_header( 'gray' ); ?>

  <main>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="bg-white">
        <div class="container">
          <div class="row px-5 pt-5 pb-3">
            <div class="col-12 col-lg-6">
              <h1 class="invisible d-none"><?php the_title(); ?></h1>
              <h2><?php the_field('headline'); ?></h2>
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
              <div class="col">
                <?php echo do_shortcode( '[accordion_slider id="1"]' ); ?>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <?php endwhile; endif; ?>
  </main>

<?php get_footer(); ?>
