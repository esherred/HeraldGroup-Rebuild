<?php /* Template Name: Results Page Template */ get_header( 'gray' ); ?>
  <main>
    <div class="bg-white">
      <div class="container">
        <?php the_post(); ?>
        <div class="row p-5">
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
        <div class="row">
          <!-- <div class="col mt-5 mb-4 text-center filter-button-group">
            <?php 
            $terms = get_terms( array(
                'taxonomy' => 'case_study_category',
                'hide_empty' => true,
            ) );
            ?>
            <button class="filter btn btn-primary btn-sm mb-1" data-filter="*">All</button>
            <?php foreach ($terms as $term): ?>
              | <button class="filter btn btn-light btn-sm mb-1" data-filter=".<?php echo $term->slug ?>"><?php echo $term->name ?></button>
            <?php endforeach ?>
          </div> -->
        </div>
        <?php
          $results_args = array(
            'post_type' => 'case_studies',
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order' => 'asc'
          );
          $results_query = new WP_Query($results_args);
        ?>

        <?php if ( $results_query->have_posts() ) : ?>
          <div class="row my-5 grid">
            <?php while( $results_query->have_posts() ) : $results_query->the_post(); ?>
              <?php
                $terms = [];
                foreach (get_the_terms( get_the_ID(), 'case_study_category' ) as $term) {
                  $terms[] = $term->slug;
                }
                $feature = get_the_post_thumbnail_url( $results_query->get_the_ID(), 'large' );
                if (!$feature) {
                  $feature = '/wp-content/uploads/2016/08/Copy-of-IMGP1398.jpg';
                }
              ?>
              <div class="grid-item col-3 h-250 p-2 <?php echo implode( ' ', $terms ); ?>">
                <a href="<?php the_permalink(); ?>">
                  <div class="masonary-item px-3 py-4 d-table w-100 h-250" style="background-image: linear-gradient(rgba(28,27,27,.5), rgba(28,27,27,.5)), url(<?php echo $feature; ?>);">
                    <div class="d-table-cell align-bottom"><?php the_title(); ?></div>
                  </div>
                </a>
              </div>
              
            <?php endwhile; ?>
          </div>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
      </div>
    </div>
  </main>
<?php get_footer(); ?>