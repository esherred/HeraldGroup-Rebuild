<?php /* Template Name: Contact Page Template */ get_header(); ?>

            <div id="masthead" class="masthead masthead--contact">
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
                    <section class="section section--contact">
                        <div class="internal-container">
                            <div class="form form--contact">
                                <?php echo do_shortcode( '[contact-form-7 id="21" title="Contact Form"]' ); ?>
                            </div>
                        </div>
                    </section>
                </div>

<?php get_footer(); ?>
