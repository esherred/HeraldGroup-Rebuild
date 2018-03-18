<?php if (have_posts()): while (have_posts()) : the_post(); ?>

                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="article-title">
                                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                                </div>
                                <div class="article-meta">
                                    <div class="meta meta--author">
                                        <a href="<?php echo get_author_posts_url( get_the_author_meta('ID')); ?>"><?php echo get_wp_user_avatar($user_id); ?> <?php the_author(); ?></a>
                                    </div>
                                    <div class="meta meta--date">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-date.png" alt=""> <?php the_time('F j, Y'); ?>
                                    </div>
                                </div>
                                <div class="article-content">
                                    <?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
                                </div>
                                <div class="article-more">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Read More</a>
                                </div>
                            </article>

<?php endwhile; ?>

<?php else: ?>

                        	<article>
                        		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
                        	</article>

<?php endif; ?>
