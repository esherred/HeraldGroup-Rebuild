<?php /* Template Name: Results Page Template */ get_header(); ?>

            <div id="masthead" class="masthead masthead--results">
                <div class="container">
                    <div class="masthead-body">
                        <h1><?php the_field('headline'); ?></h1>
                        <?php if (get_field('subhead')) : ?>
                            <h3><?php the_field('subhead'); ?></h3>
                        <?php endif; ?>
                    </div>
                    <div class="masthead-footer">
                        Take the deep dive into our case studies.
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="main" role="main">
                    <section class="section section--results">
                        <div class="content-container">
                            <div class="accordion" id="accordion">
                            <?php while(has_sub_field('results')) : ?>
                                <div class="acc-segment">
                                    <div class="acc-header">
                                        <h2><?php the_sub_field('result_title'); ?></h2>
                                    </div>
                                    <div class="acc-contents">
                                        <?php the_sub_field('result_content'); ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </section>
                </div>

<?php get_footer(); ?>
