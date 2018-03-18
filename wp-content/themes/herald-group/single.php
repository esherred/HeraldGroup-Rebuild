<?php get_header(); ?>

            <div class="container">
                <div class="main" role="main">
                    <section class="section section--article">
                        
                        <nav class="prev-next">
                            <?php $next_post = get_next_post(); ?>
                            <?php if($next_post) : ?>
                                <a href="<?php echo get_permalink($next_post->ID); ?>" class="node node--prev"> <span class="node-text">Prev</span> <span class="node-mark"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/prev.png" alt=""></a>
                            <?php endif; ?>
                            <?php $prev_post = get_previous_post(); ?>
                            <?php if($prev_post) : ?>
                                <a href="<?php echo get_permalink($prev_post->ID); ?>" class="node node--next"><span class="node-mark"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/next.png" alt=""></span> <span class="node-text">Next</span></a>
                            <?php endif; ?>
                        </nav>
                        
                        <div class="internal-container">

                    	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
                    
                    		<!-- article -->
                    		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    
                    			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                    				<?php the_post_thumbnail( 'full', array( 'class' => 'feat-img' ) ); // Fullsize image for the single post ?>
                    			<?php endif; ?>
                    
                    			<div class="article-title">
                    			    <h1><?php the_title(); ?></h1>
                    			</div>
                    			
                    			<div class="article-meta">
                                    <div class="meta meta--author">
                                        <?php echo get_wp_user_avatar($user_id); ?> <?php the_author(); ?>
                                    </div>
                                    <div class="meta meta--date">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-date.png" alt=""> <?php the_time('F j, Y'); ?>
                                    </div>
                                </div>
                                
                                <div class="article-contents">
                    
                    			    <?php the_content(); // Dynamic Content ?>
                    			    
                                </div>
                                
                                <?php edit_post_link(); // Always handy to have Edit Post Links available ?>
                    
                    			<div class="article-footer">
                                    <p class="like">Like this story? Recommend it to your friends.</p>
                                    <div class="share-links">
                                        <a href="mailto:?subject=I wanted to share this post with you from <?php bloginfo('name'); ?>&body=<?php the_title('','',true); ?>&#32;&#32;<?php the_permalink(); ?>" class="share share--mail" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 11.4"><polygon class="cls-1" points="9 6.86 18 1.77 18 0 0 0 0 1.77 9 6.86"/><path class="cls-1" d="M9.33,8.2a.67.67,0,0,1-.65,0L0,3.3v8.1H18V3.3Z"/></svg>
                                        </a>
                                        <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" class="share share--facebook" target="_blank" title="Share this Story on Facebook">
                                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18"><path id="White" d="M130.44,391.71h-16a1,1,0,0,0-1,1v16a1,1,0,0,0,1,1H123v-7H120.7V400H123v-2a3.27,3.27,0,0,1,3.49-3.59,19.25,19.25,0,0,1,2.1.11V397h-1.44a1.13,1.13,0,0,0-1.35,1.32V400h2.69l-0.35,2.72h-2.34v7h4.59a1,1,0,0,0,1-1v-16A1,1,0,0,0,130.44,391.71Z" transform="translate(-113.43 -391.71)"/></svg>
                                        </a>
                                        <a href="http://twitter.com/share?url=<?php the_permalink();?>&text=<?php the_title();?>" class="share share--twitter" target="_blank" title="Share this Story on Twitter">
                                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 14.63"><path d="M165.91,398.12c0,0.16,0,.32,0,0.48a10.5,10.5,0,0,1-16.17,8.85,7.52,7.52,0,0,0,.88.05,7.4,7.4,0,0,0,4.59-1.58,3.69,3.69,0,0,1-3.45-2.56,3.6,3.6,0,0,0,.7.07,3.73,3.73,0,0,0,1-.13,3.7,3.7,0,0,1-3-3.62v0a3.71,3.71,0,0,0,1.67.46,3.7,3.7,0,0,1-1.14-4.93,10.49,10.49,0,0,0,7.61,3.86,3.7,3.7,0,0,1,3.6-4.54,3.69,3.69,0,0,1,2.69,1.17,7.38,7.38,0,0,0,2.35-.9,3.7,3.7,0,0,1-1.62,2,7.3,7.3,0,0,0,2.12-.58A7.54,7.54,0,0,1,165.91,398.12Z" transform="translate(-149.75 -394.47)"/></svg>
                                        </a>
                                        <a href="https://plus.google.com/share?url=<?php the_permalink();?>" class="share share--google-plus" target="_blank" title="Share this Story on Google+">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20.31 12.9"><path class="cls-1" d="M0,6.13A6.44,6.44,0,0,1,6.45,0,6.54,6.54,0,0,1,10.76,1.6,23,23,0,0,1,9.12,3.29a4.26,4.26,0,0,0-5-.13A4.13,4.13,0,0,0,3.93,9.6c2,1.78,5.67.9,6.21-1.83-1.23,0-2.46,0-3.69,0,0-.73,0-1.47,0-2.2,2.05,0,4.11,0,6.17,0a7.39,7.39,0,0,1-1.16,5,6.37,6.37,0,0,1-7.34,1.95A6.45,6.45,0,0,1,0,6.13Z"/><path class="cls-1" d="M16.62,3.68h1.83c0,.61,0,1.23,0,1.84h1.84V7.36l-1.84,0q0,.92,0,1.84H16.62c0-.61,0-1.23,0-1.84l-1.84,0V5.53h1.84Q16.61,4.59,16.62,3.68Z"/></svg>
                                        </a>
                                        <a href="http://www.reddit.com/submit?url=<?php the_permalink();?>&title=<?php the_title();?>" target="_blank" title="Submit to Reddit" class="share share--digg" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 14.71"><path class="cls-1" d="M5.85,9.43h0a1,1,0,0,0,.35.06A1.2,1.2,0,0,0,7,9.18a1,1,0,0,0,.36-.77v0s0,0,0,0A1,1,0,0,0,7,7.57a1.2,1.2,0,0,0-.79-.31L6,7.29H6A1.14,1.14,0,0,0,5.12,8h0a1,1,0,0,0-.05.32A1.13,1.13,0,0,0,5.29,9,1.08,1.08,0,0,0,5.85,9.43Z"/><path class="cls-1" d="M6.89,11.11h0a2.19,2.19,0,0,1-.32-.2l-.19-.1a.57.57,0,0,0-.23,0,.53.53,0,0,0-.21,0h0a.49.49,0,0,0-.25.21.56.56,0,0,0-.08.3.58.58,0,0,0,.07.28.54.54,0,0,0,.21.2,5.44,5.44,0,0,0,3,.86,6.68,6.68,0,0,0,2.77-.61h0c.11-.06.26-.12.4-.21a.9.9,0,0,0,.2-.16.59.59,0,0,0,.13-.24h0a.47.47,0,0,0,0-.12.49.49,0,0,0-.05-.22.61.61,0,0,0-.53-.33.48.48,0,0,0-.27.08,5.33,5.33,0,0,1-2.66.72,4.63,4.63,0,0,1-2-.45Z"/><path class="cls-1" d="M10.66,8.59h0a1.07,1.07,0,0,0,.41.65,1.19,1.19,0,0,0,.72.25,1.05,1.05,0,0,0,.33-.05h0a1.08,1.08,0,0,0,.58-.4,1.11,1.11,0,0,0,.23-.67A1,1,0,0,0,12.87,8h0a1.05,1.05,0,0,0-.43-.54,1.21,1.21,0,0,0-.66-.2,1.11,1.11,0,0,0-.38.07h0a1.12,1.12,0,0,0-.54.4,1.11,1.11,0,0,0-.21.64.91.91,0,0,0,0,.2Z"/><path class="cls-1" d="M1.24,8.76a3.72,3.72,0,0,0,0,.51,4.1,4.1,0,0,0,.63,2.16A6.71,6.71,0,0,0,5.09,14h0A10.66,10.66,0,0,0,9,14.71a11.46,11.46,0,0,0,2.65-.31h0a7.63,7.63,0,0,0,4.27-2.57h0a4.19,4.19,0,0,0,.89-2.56,3.9,3.9,0,0,0,0-.51A2.43,2.43,0,0,0,17.63,8,2.15,2.15,0,0,0,18,6.78s0-.08,0-.12h0a2.24,2.24,0,0,0-.58-1.3,2.44,2.44,0,0,0-1.21-.74h0a2.53,2.53,0,0,0-.61-.08,2.4,2.4,0,0,0-1.31.38,2.64,2.64,0,0,0-.29.2l-.11-.06h0A9.79,9.79,0,0,0,9.68,3.91,3.64,3.64,0,0,1,10,2.26h0a1.15,1.15,0,0,1,.9-.6h.22A3.83,3.83,0,0,1,12.61,2s0,.05,0,.08a2,2,0,0,0,.58,1.36,2.09,2.09,0,0,0,1.33.64l.25,0a2.18,2.18,0,0,0,1.4-.53,2,2,0,0,0,.7-1.32h0a1.66,1.66,0,0,0,0-.23A2,2,0,0,0,16.52.9a2,2,0,0,0-.93-.74h0A2,2,0,0,0,14.76,0,2.74,2.74,0,0,0,14,.12h0a2.25,2.25,0,0,0-1,.84A5,5,0,0,0,11.11.59a3.56,3.56,0,0,0-.7.07h0A2.25,2.25,0,0,0,9,1.77a4.58,4.58,0,0,0-.46,2.12A9.58,9.58,0,0,0,4.24,5L4,5.13a2.93,2.93,0,0,0-.7-.39h0a2.54,2.54,0,0,0-.88-.15H2.22a2.2,2.2,0,0,0-1.55.68A2.25,2.25,0,0,0,0,6.83H0A2.22,2.22,0,0,0,.4,8,2.52,2.52,0,0,0,1.24,8.76ZM14,1.42a1.08,1.08,0,0,1,.55-.35h0a.81.81,0,0,1,.24,0,1,1,0,0,1,.7.29,1,1,0,0,1,.31.68s0,0,0,.06h0a.94.94,0,0,1-.32.65,1,1,0,0,1-.68.27H14.7A1,1,0,0,1,14,2.72a1,1,0,0,1-.31-.65h0s0,0,0-.06A.92.92,0,0,1,14,1.42Zm1.63,4.25a1.4,1.4,0,0,1,.67.17,1.13,1.13,0,0,1,.47.48h0a.94.94,0,0,1,.12.45,1.12,1.12,0,0,1-.14.53,1.15,1.15,0,0,1-.27.33A5.56,5.56,0,0,0,15,5.81,1.36,1.36,0,0,1,15.58,5.67ZM6.11,5.44a10.07,10.07,0,0,1,5.07-.19l.71.19h0A6,6,0,0,1,15,7.52a3.07,3.07,0,0,1,.61,1.79,2.55,2.55,0,0,1-.06.53h0A3.24,3.24,0,0,1,15,11.13a4.68,4.68,0,0,1-1,1h0a8.27,8.27,0,0,1-4.22,1.44l-.75,0a8.93,8.93,0,0,1-4.29-1l-.3-.17a5.38,5.38,0,0,1-1.22-1A3.45,3.45,0,0,1,2.45,10a2.58,2.58,0,0,1-.09-.7A3.07,3.07,0,0,1,3,7.52H3A6.07,6.07,0,0,1,6.11,5.44ZM1.17,6.75h0A1.07,1.07,0,0,1,1.54,6a1.24,1.24,0,0,1,.79-.32h.11A1.43,1.43,0,0,1,3,5.82,5.4,5.4,0,0,0,1.58,7.64a1.39,1.39,0,0,1-.27-.32,1,1,0,0,1-.15-.51S1.17,6.77,1.17,6.75Z"/></svg>
                                        </a>
                                        <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink() ?>&title=<?php the_title(); ?>&summary=&source=<?php bloginfo('name'); ?>" class="share share--linkedin" target="_blank">
                                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18.11"><title>icon_vectors</title><path d="M265.39,400.17v0h0Z" transform="translate(-252.38 -391.95)"/><path d="M252.38,393.25v15.52a1.31,1.31,0,0,0,1.33,1.3h15.34a1.31,1.31,0,0,0,1.33-1.3V393.25a1.31,1.31,0,0,0-1.33-1.3H253.72A1.31,1.31,0,0,0,252.38,393.25Zm5.54,13.82H255.2v-8.18h2.72v8.18Zm1.5-8.18h2.72v1.16a2.69,2.69,0,0,1,2.45-1.36c1.79,0,3.13,1.17,3.13,3.68v4.69H265v-4.38c0-1.1-.39-1.85-1.38-1.85a1.49,1.49,0,0,0-1.4,1,1.81,1.81,0,0,0-.09.66v4.57h-2.72S259.46,399.66,259.43,398.89Zm-2.85-3.94a1.42,1.42,0,1,1,0,2.83h0A1.42,1.42,0,1,1,256.58,394.95Z" transform="translate(-252.38 -391.95)"/></svg>
                                        </a>
                                        <?php $pinterestimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
                                        <a href="http://pinterest.com/pin/create/button/?url=<?php echo urlencode(get_permalink($post->ID)); ?>&media=<?php echo $pinterestimage[0]; ?>&description=<?php the_title(); ?>" class="share share--pinterest" count-layout="vertical" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18"><path class="cls-1" d="M9,0A9,9,0,0,0,5.39,17.24a7.92,7.92,0,0,1,.16-2.07l1.16-4.9a3.45,3.45,0,0,1-.29-1.42c0-1.33.77-2.33,1.74-2.33A1.2,1.2,0,0,1,9.36,7.87a19.32,19.32,0,0,1-.79,3.19A1.39,1.39,0,0,0,10,12.8c1.71,0,2.85-2.19,2.85-4.79,0-2-1.33-3.45-3.74-3.45A4.26,4.26,0,0,0,4.67,8.87a2.6,2.6,0,0,0,.59,1.77.44.44,0,0,1,.13.5l-.18.72a.31.31,0,0,1-.45.23A3.47,3.47,0,0,1,2.91,8.65C2.91,6.09,5.07,3,9.35,3A5.38,5.38,0,0,1,15,8.18c0,3.53-2,6.17-4.86,6.17A2.58,2.58,0,0,1,8,13.23s-.52,2.07-.63,2.47a7.52,7.52,0,0,1-.91,1.93A9,9,0,1,0,9,0"/></svg>
                                        </a>
                                    </div>
                                </div>
                    
                    		</article>
                    		<!-- /article -->
                    
                    	<?php endwhile; ?>
                    
                    	<?php else: ?>
                    
                    		<!-- article -->
                    		<article>
                    
                    			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
                    
                    		</article>
                    		<!-- /article -->
                    
                    	<?php endif; ?>
                    	
                        </div>
                    </section>
                </div>

<?php get_footer(); ?>
