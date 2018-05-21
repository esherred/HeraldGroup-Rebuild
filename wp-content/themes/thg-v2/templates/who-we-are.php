<?php /* Template Name: Who We Are Page Template */ get_header(); ?>
<main class="container">
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
  <div class="row px-md-5 py-md-3">
    <div class="col-12">
      <img src="<?php the_post_thumbnail_url( 'full' ); ?>" class="img-fluid" alt="">
    </div>
    <?php
      $team_args = array(
        'post_type' => 'team',
        'posts_per_page' => -1,
        'tax_query' => array(
          array(
            'taxonomy' => 'partners',
            'field'    => 'slug',
            'terms'    => 'partner'
          )
        ),
      );
      $team_query = new WP_Query($team_args);
    ?>
    <?php if ( $team_query->have_posts() ) : ?>
      <?php while ( $team_query->have_posts() ) : $team_query->the_post(); ?>
        <div class="col-4 col-md-4 text-center p-1 p-md-5">
          <h4 style="font-size: 1rem;"><?php the_title(); ?></h4>
          <h4 style="font-size: 1rem;"><?php the_field( 'team_member_title' ); ?></h4>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
  <?php wp_reset_query(); ?>

  <?php
    $team_args = array(
      'post_type' => 'team',
      'posts_per_page' => -1
    );
    $team_query = new WP_Query($team_args);
  ?>
  <?php if ( $team_query->have_posts() ) : ?>
  <div class="row mb-5">
    <?php while ( $team_query->have_posts() ) : $team_query->the_post(); ?>
    <div class="col-6 col-sm-4 col-lg-3 p-3">
      <a href="<?php echo get_permalink(); ?>">
        <div class="image mb-3">
          <img class="img-fluid" src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="">
        </div>
        <div class="row">
          <div class="col-10 col-sm-9 col-md-10">
            <h4 class="font-weight-light"><?php the_title(); ?></h4>
            <p><?php the_field( 'team_member_title' ); ?></p>
          </div>
          <div class="col-2 col-sm-3 col-md-2 text-right">
            <i class="fal fa-long-arrow-right fa-lg"></i>
          </div>
        </div>
      </a>
    </div>
    <?php endwhile; ?>
  </div>
  <?php endif; ?>
  
  <?php wp_reset_query(); ?>

</main>

<?php get_footer(); ?>