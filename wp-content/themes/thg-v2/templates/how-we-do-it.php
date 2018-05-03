<?php /* Template Name: How We Do It Page Template */ get_header(); the_post(); ?>

            <div id="masthead" class="masthead masthead--how">
                <div class="container">
                    <div class="masthead-body">
                        <h1>How We Do It.</h1>
                    </div>
                    <div class="masthead-footer">
                        <p>Our Approach.</p>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="main" role="main">
                    <section class="section section--how">
                        <div class="how-header">
                            <div class="internal-container">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <?php if(get_field('how_points')) : ?>
                        <div class="how-content">
                            <div class="internal-container">
                                <?php while(has_sub_field('how_points')) : ?>
                                <div class="how-point">
                                    <h3><?php the_sub_field('how_points_title'); ?></h3>
                                    <?php the_sub_field('how_points_content'); ?>
                                </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                    </section>
                </div>

<?php get_footer(); ?>
