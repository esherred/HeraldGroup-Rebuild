<?php /* Template Name: Careers Page Template */ get_header(); the_post(); ?>

            <div id="masthead" class="masthead masthead--results">
                <div class="container">
                    <div class="masthead-body">
                        <h1><?php the_field('headline'); ?></h1>
                        <?php if (get_field('subhead')) : ?>
                            <h3><?php the_field('subhead'); ?></h3>
                        <?php endif; ?>
                    </div>
                    <div class="masthead-footer">
                        <p><?php the_field('masthead_caption'); ?></p>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="main" role="main">
                    <section class="section section--results">
                        <div class="content-container">
                            <div class="accordion" id="accordion">
                            <?php while(has_sub_field('careers')) : ?>
                                <div class="acc-segment">
                                    <div class="acc-header">
                                        <h2><?php the_sub_field('career_title'); ?></h2>
                                    </div>
                                    <div class="acc-contents">
                                        <?php the_sub_field('career_content'); ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </section>
                </div>

<?php get_footer(); ?>
