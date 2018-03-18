<?php /* Template Name: What We Do Page Template */ get_header(); ?>

            <div id="masthead" class="masthead masthead--what">
                <div class="container">
                    <div class="masthead-body">
                        <h1><?php the_field('headline'); ?></h1>
                        <?php if (get_field('subhead')) : ?>
                            <h3><?php the_field('subhead'); ?></h3>
                        <?php endif; ?>
                    </div>
                    <div class="masthead-footer">
                        <nav class="page-links">
                            <a href="#areas-of-expertise">Areas of Expertise</a><span class="divider">|</span>
                            <a href="#capabilities">Capabilities</a><span class="divider">|</span>
                            <a href="#our-clients">Our Clients</a>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="main" role="main">
                    <section class="section section--what-we-do">
                        <div class="internal-container">
                            <div class="services">
                                <div class="service" id="areas-of-expertise">
                                    <div class="service-aside">
                                        <h2>Areas of Expertise</h2>
                                    </div>
                                    <div class="service-main">
                                        <?php the_field('areas_of_expertise'); ?>
                                    </div>
                                </div>
                                <div class="service" id="capabilities">
                                    <div class="service-aside">
                                        <h2>Capabilities</h2>
                                    </div>
                                    <div class="service-main">
                                        <div class="accordion accordion--capabilities" id="accordion">
                                        <?php while(has_sub_field('capabilities')) : ?>
                                            <div class="acc-segment" id="<?php echo sanitize_title(get_sub_field('capability_title')); ?>">
                                                <div class="acc-header">
                                                    <h3><?php the_sub_field('capability_title'); ?></h3>
                                                </div>
                                                <div class="acc-contents">
                                                    <?php the_sub_field('capability_content'); ?>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="service" id="our-clients">
                                    <div class="service-aside">
                                        <h2>Our Clients</h2>
                                    </div>
                                    <div class="service-main">
                                        <?php the_field('our_clients'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

<?php get_footer(); ?>
