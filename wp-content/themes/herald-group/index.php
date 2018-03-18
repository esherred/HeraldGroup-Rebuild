<?php get_header(); ?>

            <div id="masthead" class="masthead masthead--sphere">
                <div class="container">
                    <div class="masthead-body">
                        <h1><?php the_field('headline', 19); ?></h1>
                        <?php if (get_field('subhead', 19)) : ?>
                            <h3><?php the_field('subhead', 19); ?></h3>
                        <?php endif; ?>
                    </div>
                    <div class="masthead-footer">
                        <p><?php the_field('masthead_caption', 19); ?></p>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="main" role="main">
                    <section class="section section--sphere">
                        <div class="internal-container">
                            <?php get_template_part('loop'); ?>
                            <?php get_template_part('pagination'); ?>
                        </div>
                    </section>
                </div>

<?php get_footer(); ?>
