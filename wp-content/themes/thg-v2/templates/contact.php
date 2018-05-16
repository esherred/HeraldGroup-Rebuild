<?php /* Template Name: Contact Page Template */ get_header(); ?>

  <main class="container">
    <div class="bg-white">
        <div class="container">
          <div class="row px-5 pt-5 pb-3">
            <div class="col-12 mb-3">
              <h1 class="invisible d-none"><?php the_title(); ?></h1>
              <h2><?php the_field('headline'); ?></h2>
            </div>
            <div class="col-12">
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
    <div class="row px-5">
      <div class="col-12">
        <?php echo do_shortcode( '[contact-form-7 id="21" title="Contact Form"]' ); ?>
      </div>
    </div>
  </main>

<?php get_footer(); ?>