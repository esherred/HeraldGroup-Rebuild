<?php
/* Template Name: Clients and Industries Page */
get_header();
the_post();
?>

  <main>
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
    <div class="bg-gray">
      <div class="container">
        <div class="row px-5 py-3">
          <div class="col-12">
            <div class="row align-items-center">
              <?php if( have_rows( 'clients' ) ) : ?>
                <?php while( have_rows( 'clients' ) ) : the_row(); ?>
                  <div class="col-12 col-md-6 col-lg-4 p-3 text-center">
                    <img class="img-fluid" style="max-width: 200px; max-height: 100px;" src="<?php the_sub_field( 'logo' ); ?>" alt="<?php the_sub_field( 'name' ); ?>">
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-white">
      <div class="container">
        <div class="row px-5 py-3">
          <div class="col-12 p-5">
            <h2>Industry Expertise</h2>
          </div>
          <?php if( have_rows( 'industries' ) ) : ?>
            <?php while( have_rows( 'industries' ) ) : the_row(); ?>
              <div class="col-12 col-lg-6 line-item">
                <div class="post p-3">
                  <h5 class="mb-0 d-flex justify-content-between">
                    <div><?php the_sub_field( 'industry' ); ?></div>
                  </h5>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </main>

  <?php the_content(); ?>

<?php get_footer(); ?>