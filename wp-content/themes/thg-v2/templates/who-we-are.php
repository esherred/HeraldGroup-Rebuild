<?php /* Template Name: Who We Are Page Template */ get_header(); ?>
    <main class="container">
        <div class="row p-5">
            <div class="col-12 col-lg-6">
                <h1><?php the_field('headline'); ?></h1>
            </div>
            <div class="col-12 col-lg-6">
                <?php if (get_field('subhead')) : ?>
                    <p><?php the_field('subhead'); ?></p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row p-5">
            <div class="col-12">
                <img src="http://placekitten.com/1600/900" class="img-fluid" alt="">
            </div>
            <div class="col-4 text-center p-5">
                <h4>
                    Taylor Gross<br>
                    Partner
                </h4>
            </div>
            <div class="col-4 text-center p-5">
                <h4>
                    Doug McGinn<br>
                    Partner
                </h4>
            </div>
            <div class="col-4 text-center p-5">
                <h4>
                    Matt Well<br>
                    Partner
                </h4>
            </div>
        </div>
        <?php
            $team_args = array(
                'post_type' => 'team-members',
                'posts_per_page' => -1
            );
            $team_query = new WP_Query($team_args);
        ?>
        <?php if ( $team_query->have_posts() ) : ?>
        <div class="row mb-5">
            <?php while ( $team_query->have_posts() ) : $team_query->the_post(); ?>
            <div class="col-6 col-lg-4 p-3">
                <div class="image">
                    <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url( 'full' ); ?>" alt="">
                </div>
                
                <span class="member-name"><?php the_title(); ?></span>
                <span class="member-title"><?php the_field('team_member_title'); ?></span>
            </div>
            <?php endwhile; ?>        
        </div>
        <?php endif; ?>
        
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
        <div class="row">
            <?php foreach($sortedTeamArray as $key => $teamGroup) : ?>
                <div class="col-12 col-md-6 col-lg-4 mb-3">
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
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

    </main>

<?php get_footer(); ?>
