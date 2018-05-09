<?php get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php 
      $backgroundPhoto = get_field('team_member_background_image');
      $bgLink = '/wp-content/uploads/2016/08/deafult-cover.jpg';
      if(!empty($backgroundPhoto)) {
        $bgLink = $backgroundPhoto['url'];
      }
    ?>

  <div class="team-background" style="background-image: url(<?php echo $bgLink ?>)">
  </div>

  <main class="team">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-4 px-5">
          <img src="<?php the_post_thumbnail_url( 'full' ); ?>" class="img-fluid team-member" alt="">
        </div>
        <div class="col-12 col-md-8 px-5 py-3 d-flex justify-content-between">
          <div class="title">
            <h1 class="fonw-weight-light display-4 m-0">
              <?php the_title(); ?>
            </h1>
            <h4 class="fonw-weight-light">
              <?php the_field( 'team_member_title' ); ?>
            </h4>
          </div>
          <div class="social text-right py-3">
            <?php if ( get_field( 'team_member_twitter' ) != null ) : ?>
              <a target="_blank" href="<?php the_field( 'team_member_twitter' ); ?>">
                <span class="fa-layers fa-fw mx-1">
                  <i class="fal fa-circle" data-fa-transform="grow-12"></i>
                  <i class="fab fa-twitter"></i>
                </span>
              </a>
            <?php endif; ?>

            <?php if ( get_field( 'team_member_linkedin' ) != null ) : ?>
              <a target="_blank" href="<?php the_field( 'team_member_linkedin' ); ?>">
                <span class="fa-layers fa-fw mx-1">
                  <i class="fal fa-circle" data-fa-transform="grow-12"></i>
                  <i class="fab fa-linkedin-in"></i>
                </span>
              </a>
            <?php endif; ?>

            <?php if ( get_field( 'team_member_medium' ) != null ) : ?>
              <a target="_blank" href="<?php the_field( 'team_member_medium' ); ?>">
                <span class="fa-layers fa-fw mx-1">
                  <i class="fal fa-circle" data-fa-transform="grow-12"></i>
                  <i class="fab fa-medium-m"></i>
                </span>
              </a>
            <?php endif; ?>

          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-md-4 px-5 py-3 sidebar">
          
          <?php if( get_field( 'team_member_education' ) != null ) : ?>
            <div class="side-item mb-3">
              <div class="title">Education</div>
              <div class="content"><?php the_field( 'team_member_education' ); ?></div>
            </div>
          <?php endif; ?>

          <?php if( get_field( 'team_member_hometown' ) != null ) : ?>
            <div class="side-item mb-3">
              <div class="title">Hometown</div>
              <div class="content"><?php the_field( 'team_member_hometown' ); ?></div>
            </div>
          <?php endif; ?>

          <?php if( have_rows( 'team_member_career_highlights' ) ) : ?>
            <div class="side-item mb-3">
              <div class="title">Career Highlights</div>
              <div class="content">
                <ul class="m-0 pl-3">
                  <?php foreach (get_field('team_member_career_highlights') as $hilight) : ?>
                    <li class="mb-1"><?php echo $hilight['team_member_career_highlight'] ?></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          <?php endif; ?>

          <?php if( have_rows( 'team_member_articles' ) ) : ?>
            <div class="side-item mb-3">
              <div class="title">Career Highlights</div>
              <div class="content">
                <ul class="m-0 pl-3">
                  <?php foreach (get_field('team_member_articles') as $article) : ?>
                    <li class="mb-1"><a href="/<?php echo $article['team_member_article']->post_name ?>"><?php echo $article['team_member_article']->post_title ?></a></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          <?php endif; ?>

        </div>
        <div class="col-12 col-md-8 px-5 py-3">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </main>

  <section class="bg-gray p-3">&nbsp</section>

  <section class="container">
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
        </a>
      </div>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>
  </section>

  <?php endwhile; endif; ?>

<?php get_footer(); ?>