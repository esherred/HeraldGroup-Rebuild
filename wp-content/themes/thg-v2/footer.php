    <footer class="p-0 mt-125">
      <section class="top bg-primary">
        <div class="row">
          <div class="col-12 col-lg-6">
            <div class="footer-img mb-5"><img class="img-fluid" src="<?php echo get_field('footer_options', 'options')['footer_image'] ?>" alt="The Herald Group"></div>
            <div class="social text-center mt-5 small">
              <?php if ( get_field('footer_options', 'options')['facebook'] ) : ?>
                <a target="_blank" href="<?php echo get_field('footer_options', 'options')['facebook']; ?>">
                  <span class="fa-layers fa-fw mx-2">
                    <i class="fas fa-md fa-circle" data-fa-transform="grow-12" style="color: #ffffff;"></i>
                    <i class="fab fa-md fa-facebook-f" style="color: #0a6992"></i>
                  </span>
                </a>
              <?php endif; ?>

              <?php if ( get_field('footer_options', 'options')['twitter'] ) : ?>
                <a target="_blank" href="<?php echo get_field('footer_options', 'options')['twitter']; ?>">
                  <span class="fa-layers fa-fw mx-2">
                    <i class="fas fa-md fa-circle" data-fa-transform="grow-12" style="color: #ffffff;"></i>
                    <i class="fab fa-md fa-twitter" style="color: #0a6992"></i>
                  </span>
                </a>
              <?php endif; ?>

              <?php if ( get_field('footer_options', 'options')['linkedin'] ) : ?>
                <a target="_blank" href="<?php echo get_field('footer_options', 'options')['linkedin']; ?>">
                  <span class="fa-layers fa-fw mx-2">
                    <i class="fas fa-md fa-circle" data-fa-transform="grow-12" style="color: #ffffff;"></i>
                    <i class="fab fa-md fa-linkedin-in" style="color: #0a6992"></i>
                  </span>
                </a>
              <?php endif; ?>

            </div>
          </div>
          <div class="col-12 col-lg-6 p-5">
            <div class="col-12 mb-5">
              <div class="dash"><i class="mr-1 fal fa-minus" data-fa-transform="shrink-6"></i>About Us</div>
              <div class="dash"><i class="mr-1 fal fa-minus" data-fa-transform="shrink-6"></i>Careers</div>
              <div class="dash"><i class="mr-1 fal fa-minus" data-fa-transform="shrink-6"></i>Cool Stuff</div>
            </div>
            <div class="col-12 mb-5">
              <div class="mb-3" style="font-size: 2rem; font-weight: 300;">Location</div>
              <div class="small">
                <?php echo get_field('footer_options', 'options')['location'] ?>
              </div>
            </div>
            <div class="col-12 mb-5">
              <div class="mb-3" style="font-size: 2rem; font-weight: 300;">Let's Talk</div>
              <div class="small carrott">
                <i class="mr-3 fa-lg fal fa-angle-right" data-fa-transform="shrink-6"></i><?php echo get_field('footer_options', 'options')['phone_number'] ?>
              </div>
              <div class="small carrott">
                <i class="mr-3 fa-lg fal fa-angle-right" data-fa-transform="shrink-6"></i><a href="mailto:<?php echo get_field('footer_options', 'options')['email'] ?>"><?php echo get_field('footer_options', 'options')['email'] ?></a>
              </div>
            </div>
          </div>
        </div>
        
      </section>
      <?php if ( get_post_type() == 'team' ) : ?>
      <?php
        $the_slug = 'who-we-are';
        $args = array(
          'name'        => $the_slug,
          'post_type'   => 'page',
          'post_status' => 'publish',
          'numberposts' => 1
        );
        $team_obj = get_posts($args);
      ?>
        <section class="bottom p-3">
          <div class="container">
            <div class="row">
              <div class="col">
                Next: <a href="/<?php echo get_field( 'next', $team_obj[0]->ID )->post_name; ?>/"><?php echo get_field( 'next', $team_obj[0]->ID )->post_title; ?> <i class="fal fa-long-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </section>
      <?php elseif( get_field( 'next' ) !== null ): ?>
        <section class="bottom p-3">
          <div class="container">
            <div class="row">
              <div class="col">
                <span>Next:</span> <a href="/<?php echo get_field( 'next' )->post_name; ?>/"><?php echo get_field( 'next' )->post_title; ?> <i class="fal fa-long-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </section>
      <?php endif; ?>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/asets/js/init.js"></script>

    <?php wp_footer(); ?>
  </body>
</html>