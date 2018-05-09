<?php get_header( 'front' ); ?>

  <video id="heroVideo" poster="http://www.dcigroup.com//wp-content/themes/dcigroup/assets/storage/video/home-1.jpg" autoplay muted loop>
    <source src="http://www.dcigroup.com//wp-content/themes/dcigroup/assets/storage/video/home-1.mp4" type="video/mp4">
    <source src="http://www.dcigroup.com//wp-content/themes/dcigroup/assets/storage/video/home-1.webm" type="video/webm">
    <source src="http://www.dcigroup.com//wp-content/themes/dcigroup/assets/storage/video/home-1.ogv" type="video/ogg">
  </video>
  <div id="hero-overlay"></div>
  
  <div class="container text-center">
    <div id="hero-wrapper">
      <div id="hero" class="text-center align-middle m-auto">
        <h1 class="display-4">Redefining Advocacy.</h1>
        <div class="my-4">Public Affairs  •  Issue Advocacy  •  Strategic Communications  •  Digital Engagement</div>
        <p>
          <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </p>
      </div>
    </div>
  </div>

  <section id="herald" class="bg-primary text-center p-5">
    <h2 class="display-4">[hêr’əld]</h2>
    <div><span>noun. /</span> One who actively promotes or advocates.</div>
  </section>

  <section>
    <div class="container p-5 border-bottom-1">
      <div class="row">
        <div class="col-12 col-lg-6">
          <h2>You already knowv our work. Now get to know us.</h2>
        </div>
        <div class="col-12 col-lg-6">
          <p>For over a decade, corporations, industry associations and non-profit organizations have engaged The Herald Group to develop, execute and win some of the most critical national, state and international policy and issue advocacy campaigns.</p>
          <p>
            <a href="#"><strong>Meet The Team ></strong></a>
          </p>
        </div>
        <div class="col-12 text-center">
          <div class="row">
            <div class="col-12 mb-5">
              <div id="teamSlider" class="carousel slide fade-carousel" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="img-fluid" src="http://placekitten.com/1410/750" alt="">
                  </div>
                  <div class="carousel-item">
                    <img class="img-fluid" src="http://placekitten.com/1410/750" alt="">
                  </div>
                  <div class="carousel-item">
                    <img class="img-fluid" src="http://placekitten.com/1410/750" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-2">01/03</div>
            <div class="col-8 py-2">
              <div class="progress" style="height: 1px;">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 33%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="3"></div>
              </div>
            </div>
            <div class="col-2"><a href="#teamSlider" role="button" data-slide="prev"><-</a> <a href="#teamSlider" role="button" data-slide="next">-></a></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container p-5">
      <div class="row">
        <div class="col-12 col-lg-6">
          <h2>You already knowv our work. Now get to know us.</h2>
        </div>
        <div class="col-12 col-lg-6">
          <p>For over a decade, corporations, industry associations and non-profit organizations have engaged The Herald Group to develop, execute and win some of the most critical national, state and international policy and issue advocacy campaigns.</p>
          <p>
            <a href="#"><strong>Meet The Team ></strong></a>
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="services">
    <div class="container-fluid">
      <div class="row">
        <?php 
          $services = get_field( 'services', 'options' );
          foreach ( $services as $service ) :
        ?>
          <div id="<?php echo $service['service']['title'] ?>" class="col-2 px-1">
            <div style="background: linear-gradient(rgba(56,60,65,.6),rgba(56,60,65,.6)), url(http://placekitten.com/305/787);" class="services p-3">
              <div class="top">
                <i class="fal fa-minus d-block"></i>
                <?php echo $service['service']['title'] ?>
              </div>
              <div class="bottom">
                <div class="read">
                  <div class="read fa-2x">
                    <span class="fa-layers fa-fw">
                      <i class="fal fa-square-full" style="color: #fff;"></i>
                      <i class="fal fa-angle-right" data-fa-transform="shrink-6" style="color: #fff;"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section>
    <div class="container p-5 border-bottom-1">
      <div class="row">
        <div class="col-12 col-lg-6">
          <h2>Serving global corporations, leading industry associations & non-profit organizations.</h2>
        </div>
        <div class="col-12 col-lg-6">
          <p>Leveraging our vast commaunications, digital, political and policy expertise, The Herald Group is proud to serve a number of Fortune 500 companies, industry associations, non-profit entities and grassroots organizations. Representative clients and industries include:</p>

          <p><a href="#"><strong>Clients and Industries ></strong></a></p>
        </div>
        <div class="col-12 text-center">
          <div class="row">
            <div class="col-12 mb-5">
              <div id="clientSlider" class="carousel slide fade-carousel" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="img-fluid" src="http://placekitten.com/1410/750" alt="">
                  </div>
                  <div class="carousel-item">
                    <img class="img-fluid" src="http://placekitten.com/1410/750" alt="">
                  </div>
                  <div class="carousel-item">
                    <img class="img-fluid" src="http://placekitten.com/1410/750" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-2">01/03</div>
            <div class="col-8 py-2">
              <div class="progress" style="height: 1px;">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 33%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="3"></div>
              </div>
            </div>
            <div class="col-2"><a href="#clientSlider" role="button" data-slide="prev"><-</a> <a href="#clientSlider" role="button" data-slide="next">-></a></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container p-5">
      <div class="row">
        <div class="col-12 col-lg-6">
          <h2>Results matter. You don’t confuse activity for progress.  Neither do we.</h2>
        </div>
        <div class="col-12 col-lg-6">
          <p>The Herald Group takes a customized, integrated approach with every client engagement, combining sound public affairs strategies with innovative tools and tactics.  Please take a look at some our work:</p>
          <p><a href="#"><strong>CASE STUDIES ></strong></a></p>
        </div>
        <div class="col-12 text-center">
          <div class="row">
            <div class="col-12 mb-5">
              <div id="caseStudySlider" class="carousel slide fade-carousel" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="img-fluid" src="http://placekitten.com/1410/750" alt="">
                  </div>
                  <div class="carousel-item">
                    <img class="img-fluid" src="http://placekitten.com/1410/750" alt="">
                  </div>
                  <div class="carousel-item">
                    <img class="img-fluid" src="http://placekitten.com/1410/750" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-2">01/03</div>
            <div class="col-8 py-2">
              <div class="progress" style="height: 1px;">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 33%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="3"></div>
              </div>
            </div>
            <div class="col-2"><a href="#caseStudySlider" role="button" data-slide="prev"><-</a> <a href="#caseStudySlider" role="button" data-slide="next">-></a></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-grey">
    <div class="container p-5">
      <div class="row mb-5">
        <div class="col-12 col-lg-6">
          <h2>Cool blog (the Sphere).<br>Cool people. Cool innovations.<br>Cool creative works.</h2>
        </div>
        <div class="col-12 col-lg-6">
          <p>For unique insights from our professional staff, please visit our blog, The Sphere.  Also, please take a look at some cool people, cool innovations and cool creative works developed by The Herald Group and others we admire.</p>
          <p><a href="#"><strong>Cool Stuff ></strong></a></p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-lg-6">
          <div class="snippet d-table">
            <div class="image mb-3">
              <img src="http://placekitten.com/1000/700" class="img-fluid" alt="">
            </div>
            <div class="content p-3">
              <h2>This new Simpsons character is LIT!</h2>
            </div>
            <div class="more p-3">
              <a href="#">READ ON ></a>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="snippet">
            <div class="image mb-3">
              <img src="http://placekitten.com/1000/700" class="img-fluid" alt="">
            </div>
            <div class="content p-3">
              <h2>Cats are so funny, you’ll die laughing! Woah!!!</h2>
            </div>
            <div class="more p-3">
              <a href="#">READ ON ></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>