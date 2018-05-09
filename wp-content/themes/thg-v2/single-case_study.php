<?php get_header(); ?>

  <main class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="row px-5 pt-5 pb-3">
        <div class="col-12">
          <h1><?php the_title(); ?></h1>
        </div>
      </div>
      <div class="row px-5 py-3">
        <div class="col-12 text-center">
          <img src="<?php the_post_thumbnail_url( 'full' ); ?>" class="img-fluid" alt="">
        </div>
      </div>
      <div class="row mb-5">
        <?php the_content( ); ?>
      </div>
    <?php endwhile; endif; ?>
  </main>

<?php get_footer(); ?>