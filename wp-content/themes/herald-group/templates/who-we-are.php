<?php /* Template Name: Who We Are Page Template */ get_header(); ?>

            <div id="masthead" class="masthead masthead--who">
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
                    <section class="section section--bios">
                        
                        <div class="control-panel" id="control-panel">
                            <div class="internal-container">
                                <span id="grid-format"></span>
                                <span id="list-format"></span>
                            </div>
                        </div>
    
                        <div class="bios-slider flexslider" id="bios-slider">
                            <ul class="slides">
                                <li>
                                    <div class="internal-container">
                                        
                                        
                                    <?php
                                        $team_args = array(
                                            'post_type' => 'team-members',
                                            'posts_per_page' => -1
                                        );
                                        $team_query = new WP_Query($team_args);
                                    ?>
                                    
                                    <?php if ( $team_query->have_posts() ) : ?>
    
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
                                    </div>
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
                                        <div class="internal-container">
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
                                    </div>
                                </li>
                                
                                <?php endif; ?>
                                
                            </ul>
                        </div>


                    </section>
                </div>

<?php get_footer(); ?>
