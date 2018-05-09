<?php /* Template Name: Who We Are Page Template */ get_header();  the_post(); ?>
<main class="container">
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
</main>

<?php get_footer(); ?>
