<?php
/* Template Name: About Page */
?>

<?php get_header( 'gray' ); ?>
<?php the_post(); ?>

  <main>
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
    <div class="bg-gray">
      <div class="container-fluid">
        <div class="row py-5 justify-content-end">
          <div class="col-12 col-md-7 ">
            <h2>Culture: Our Six Pillars</h2>
            <div class="points">
              <ol class="p-0 d-table">
                <?php while( has_sub_field( 'culture' ) ) : ?>
                  <div class="d-table-row mb-4">
                    <li class="ml-0 d-table-cell pr-5"></li>
                    <div class="d-table-cell"><?php the_sub_field( 'point' ) ?></div>
                  </div>
                <?php endwhile; ?>
              </ol>
            </div>
          </div>
          <div class="col-4 py-5 d-none d-md-block">
            <img src="<?php echo get_template_directory_uri(); ?>/asets/img/AboutUs.png" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
    <div class="bg-white">
      <div class="container">
        <div class="col-12 p-5">
          <div id="careers">
            <?php while(has_sub_field('careers')) : ?>
              <?php $id = strtolower(preg_replace('/[\/ &]/', '_', get_sub_field('career_title'))); ?>
              <div class="p-3 post">
                  <a href="#<?php echo $id; ?>" role="button" data-toggle="collapse" aria-expanded="true" aria-controls="<?php echo $id; ?>">
                    <h5 class="mb-0 d-flex justify-content-between">
                      <div><?php the_sub_field('career_title'); ?></div>
                      <div><i class="fal fa-angle-right"></i></div>
                    </h5>
                  </a>

                <div id="<?php echo $id; ?>" class="collapse p-3" aria-labelledby="headingOne" data-parent="#careers">
                  <?php the_sub_field('career_content'); ?>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-gray">
      <div class="container">
        <div class="row p-5">
          <div class="col-12">
            <h2>Let’s Talk.</h2>
            <h4>We'd love to hear from you. Drop us a line.</h4>
            <?php echo do_shortcode( '[contact-form-7 id="21" title="Contact Form"]' ); ?>
          </div>
        </div>
      </div>
    </div>
  </main>

<?php get_footer(); ?>