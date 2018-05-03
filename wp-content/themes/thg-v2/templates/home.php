<?php /* Template Name: Home Page Template */ get_header(); ?>

        <div class="website" id="top">
            <section class="masthead masthead--home" style="<?php if(get_field('hero_background_image')) { echo('background-image: url(' . get_field('hero_background_image') . ');'); } ?>">
                <div class="masthead-contents">
                    <div class="container">
                        <header class="home-header">
                            <div class="identity">
                                <a href="<?php echo home_url(); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header-logo.png" alt="">
                                </a>
                            </div>
                            <div class="navigation">
                                <div class="nav-trigger" id="nav-trigger">Menu</div>
                                <nav class="primary-nav">
                                    <?php html5blank_nav(); ?>
                                </nav>
                            </div>
                        </header>
                        <div class="masthead-body">
                            <?php if(get_field('masthead_slides')) : ?>
                            <div id="masthead-body-slider" class="masthead-body-slider">
                                <ul class="slides">
                                    <?php while(has_sub_field('masthead_slides')) : ?>
                                    <li>
                                        <h1><?php the_sub_field('slide_header'); ?></h1>
                                        <h3><?php the_sub_field('slide_subheader'); ?></h3>
                                        <a href="<?php the_sub_field('slide_link_url'); ?>" class="button"><?php the_sub_field('slide_link_text'); ?></a>
                                    </li>
                                    <?php endwhile; ?>
                                </ul>
                            </div>
                            <?php endif; ?>  
                        </div>
                        <div class="masthead-footer">
                            herald (hêr’əld) , noun: one who actively promotes or advocates
                        </div>
                    </div>
                </div>
            </section>

            <div class="container">
                <div class="main" role="main">
                    <div class="showcase-points">
                    <?php while(has_sub_field('broad_capabilities')) : ?>
                        <div class="point"><?php the_sub_field('broad_capability'); ?></div>
                    <?php endwhile; ?>
                    </div>
                    <div class="introduction-home">
                        <h2>We have been involved in some of the biggest policy and advocacy campaigns of the past 10 years. We dedicate ourselves to creating and implementing public affairs campaigns for our clients that get results.</h2>
                        <p>The Herald Group offers the best of both worlds – the full-scale capabilities and reach of a large firm with the servicing and attention of a small firm. We create comprehensive, strategic campaigns combining innovative tools and tactics with sound communications strategies, to help organizations understand, adapt to and effectively leverage the high-stakes public affairs landscape with targeted, successful results.</p>
                        <a href="<?php echo get_permalink(9); ?>" class="cta">Meet Our Team</a>
                    </div>
                    <div class="bi-col bi-col--services">
                        <div class="col-main">
                            <h4><a href="<?php echo get_permalink(11); ?>"><?php the_field('services_header'); ?></a></h4>
                            <ul class="list-links">
                                <?php if(get_field('capabilities', 11)) : ?>
                                    <?php while(has_sub_field('capabilities', 11)) : ?>
                                        <li><a href="<?php echo get_permalink(11) . '#' . sanitize_title(get_sub_field('capability_title', 11)); ?>"><?php the_sub_field('capability_title'); ?></a></li>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <div class="col-aside" style="background: transparent url(<?php echo get_template_directory_uri(); ?>/assets/img/bucket-collab.jpg) no-repeat center center; background-size: cover;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bucket-collab.jpg" alt="">
                        </div>
                    </div>
                    <div class="bi-col bi-col--sphere">
                        <div class="col-main">
                            <h4><a href="<?php echo get_permalink(19); ?>">The Sphere</a></h4>
                            <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 6,
                                    'cat' => -44
                                );
                                $sphere_query = new WP_Query($args);
                            ?>
                            <?php if ( $sphere_query->have_posts() ) : ?>
                            <ul class="list-links">
                                <?php while ( $sphere_query->have_posts() ) : $sphere_query->the_post(); ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>">
                                        <span class="link-title"><?php the_title(); ?></span>
                                        <span class="link-date"><?php the_time('F j, Y'); ?></span>
                                    </a>
                                </li>
                                <?php endwhile; ?>
                            </ul>
                            <?php wp_reset_postdata(); ?>
                            <?php endif; ?>
                        </div>
                        <div class="col-aside" style="background: transparent url(<?php echo get_template_directory_uri(); ?>/assets/img/bucket-herald.jpg) no-repeat center center; background-size: cover;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bucket-herald.jpg" alt="">
                        </div>
                    </div>
                </div>

<?php get_footer(); ?>
