<?php get_header(); the_post(); ?>

            <?php
                $backgroundPhoto = get_field('team_member_background_image');
                $bgLink = '/wp-content/uploads/2016/08/deafult-cover.jpg';
                if(!empty($backgroundPhoto)) {
                    $bgLink = $backgroundPhoto['url'];
                }
            ?>
            <div id="masthead" class="masthead masthead--bio" style="background-image: url(<?php echo $bgLink; ?>);"></div>

            <div class="container">
                <div class="main" role="main">
                    <section class="section section--bio">
                        <div class="bio-main">
                            <div class="bio-meta">
                                <div class="meta-main">
                                    <h1><?php the_title(); ?></h1>
                                    <?php if(get_field('team_member_title')) : ?>
                                        <h2><?php the_field('team_member_title'); ?></h2>
                                    <?php endif; ?>
                                </div>
                                <div class="meta-aside">
                                    <nav class="bio-social">
                                        <?php if(get_field('team_member_twitter')) : ?>
                                        <a href="<?php the_field('team_member_twitter'); ?>" target="_blank" class="soclink soclink--twitter">
                                            
                                        </a>
                                        <?php endif; ?>
                                        <?php if(get_field('team_member_linkedin')) : ?>
                                        <a href="<?php the_field('team_member_linkedin'); ?>" target="_blank" class="soclink soclink--linkedin">
                                            
                                        </a>
                                        <?php endif; ?>
                                        <?php if(get_field('team_member_medium')) : ?>
                                        <a href="<?php the_field('team_member_medium'); ?>" target="_blank" class="soclink soclink--medium">
                                            
                                        </a>
                                        <?php endif; ?>
                                    </nav>
                                </div>
                            </div>
                            <div class="bio-content">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <div class="bio-aside">
                            <?php
                                $bioPhoto = get_field('team_member_photo');
                                if(!empty($bioPhoto)) : ?>
                                    <img src="<?php echo $bioPhoto['url']; ?>" alt="<?php echo $bioPhoto['alt']; ?>">
                            <?php endif; ?>
                            <div class="aside-content">
                                <?php if(get_field('team_member_education')) : ?>
                                <div class="aside-group">
                                    <h3>Education</h3>
                                    <p><?php the_field('team_member_education'); ?></p>
                                </div>
                                <?php endif; ?>
                                <?php if(get_field('team_member_hometown')) : ?>
                                <div class="aside-group">
                                    <h3>Hometown</h3>
                                    <p><?php the_field('team_member_hometown'); ?></p>
                                </div>
                                <?php endif; ?>
                                <?php if(get_field('team_member_career_highlights')) : ?>
                                <div class="aside-group">
                                    <h3>Career Highlights</h3>
                                    <ul>
                                    <?php while(has_sub_field('team_member_career_highlights')) : ?>
                                        <li><?php the_sub_field('team_member_career_highlight'); ?></li>
                                    <?php endwhile; ?>
                                    </ul>
                                </div>
                                <?php endif; ?>
                                
                                <?php if(get_field('thg_author')) : ?>
                                    <?php
                                        $user = get_field('thg_author');
                                        $author_posts_args = array(
                                            'author' => $user['ID'],
                                            'post_type' => 'post',
                                            'posts_per_page' => '3',
                                        );
                                        $author_posts_query = new WP_Query($author_posts_args);
                                    ?>
                                    <?php if($author_posts_query->have_posts()) : ?>
                                        <div class="aside-group">
                                            <h3>Articles</h3>
                                            <ul>
                                                <?php while($author_posts_query->have_posts()) : $author_posts_query->the_post(); ?>
                                                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                                <?php endwhile; ?>
                                            </ul>
                                            <?php wp_reset_query(); ?>
                                        </div>
                                    <?php endif; ?>
                                
                                <?php endif; ?>
                                
                            </div>
                        </div>
                    </section>
                    <section class="section section--bios">
                        <div class="internal-container">

                            <div class="control-panel" id="control-panel">
                                <span id="grid-format"></span>
                                <span id="list-format"></span>
                            </div>
    
                            <div class="bios-slider flexslider" id="bios-slider">
                                <ul class="slides">
                                    <li>
                                        
                                    <?php
                                        $team_args = array(
                                            'post_type' => 'team-members',
                                            'posts_per_page' => -1
                                        );
                                        $team_query = new WP_Query($team_args);
                                        
                                    ?>
                                    
                                    <?php if ( $team_query->have_posts() ) : ?>

                                        <div class="part-header">
                                            <h3>Our Team</h3>
                                        </div>
                                        <div class="part-body">
                                            <div class="team-members">
                                            <?php while ( $team_query->have_posts() ) : $team_query->the_post(); ?>
                                                <div class="team-member">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_post_thumbnail( 'full' ); ?>
                                                        <span class="member-contents">
                                                            <span class="member-details">
                                                                <span class="member-name"><?php the_title(); ?></span>
                                                                <span class="member-title"><?php the_field('team_member_title'); ?></span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            <?php endwhile; ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    </li>
                                    
                                    <?php if ( $team_query->have_posts() ) : ?>
                                        <?php 
                                            $teamArray = [];
                                            $sortedTeamArray = [];
                                        ?>
                                    
                                        <?php while ( $team_query->have_posts() ) : $team_query->the_post(); ?>
                                            <?php
                                                $firstName = get_field('team_member_first_name');
                                                $lastName = get_field('team_member_last_name');
                                                $post->firstName = $firstName;
                                                $post->lastName = $lastName;
                                                if(array_key_exists($lastName[0], $teamArray)) {
                                                    array_push($teamArray[$lastName[0]], $post);
                                                }
                                                else {
                                                    $teamArray[$lastName[0]] = [];
                                                    array_push($teamArray[$lastName[0]], $post);
                                                }
                                            ?>
                                        <?php endwhile; ?>
                                        
                                        <?php
                                            
                                            function compare_fullname($a, $b)
                                              {
                                                // sort by last name
                                                $retval = strnatcmp($a->lastName, $b->lastName);
                                                // if last names are identical, sort by first name
                                                if (!$retval) {
                                                    $retval = strnatcmp($a->firstName, $b->firstName);
                                                }
                                                return $retval;
                                              }
                                            
                                            ksort($teamArray);
                                            
                                            foreach($teamArray as $key => $teamArrayLetter) {
                                                usort($teamArrayLetter, __NAMESPACE__ . '\compare_fullname');
                                                $sortedTeamArray[$key] = $teamArrayLetter;
                                            }
                                            
                                        ?>
                                    
                                    <li>    
                                    
                                        <div class="list-format">
                                            <div class="directory">
                                            <?php foreach($sortedTeamArray as $key => $teamGroup) : ?>
                                                <div class="directory-listing">
                                                    <div class="listing-contents">
                                                        <div class="listing-label"><?php echo $key; ?></div>
                                                        <div class="listing-contents">
                                                            <ul>
                                                            <?php foreach($teamGroup as $teamMember) : ?>
                                                                <li>
                                                                    <a href="<?php echo get_permalink($teamMember->ID); ?>"><?php echo $teamMember->lastName; ?>, <?php echo $teamMember->firstName; ?></a>
                                                                </li>
                                                            <?php endforeach; ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <?php endif; ?>
                                    
<!--
                                    <?php
                                        /* Restore original Post Data */
                                        wp_reset_postdata();  
                                    ?>
-->
                                    
                                </ul>
                            </div>

                        </div>
                    </section>
                </div>

<?php get_footer(); ?>
