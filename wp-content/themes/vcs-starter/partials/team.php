
<?php
    $icon = [get_field('icon1','option'),get_field('icon2','option')];
    //print_r($icon); exit;
?>
<div class="container">
    <div class="our-team-letters">Our team</div>
    <div class="team flex" id="team">
        <button type="button" role="presentation" class="owl-prev"><span class="icon-arrow-left2"></span></button>
        <div class="owl-carousel owl-theme team-mates"> 
            <?php 
            $limit = get_field('team_member_limit');
            if($limi<1){
                $limit = -1;
            };

            $args = [
                'post_type' => 'team_member',
                'posts_per_page' => $limit
            ];

            $query = new WP_Query($args);

            if ($query->have_posts()):
                while ($query->have_posts()):
                    $query->the_post(); 
                    $masv = get_field('team_member_photo');
                    //print_r($masv['sizes']['thumbnail']);exit;
                    ?>
                    <div><a href="#" class="team-member flex">
                        <div style='background-image: url(<?php echo $masv['sizes']['thumbnail']; ?>);' class="round-image"></div>
                        <h2 class="member-name"><?php the_title(); ?></h2>
                        <div class="seconday-text"><?php the_field('team_member_twitter_nick'); ?></div> 
                        <img class="big-wave" src="<?php echo $icon[0]['sizes']['thumbnail'];?>" alt="wave">
                        <div class="seconday-text"><span class="icon-location"></span><?php the_field('team_member_location'); ?></div>
                    </a></div>
                    <?php
                endwhile; 
            endif;

            wp_reset_postdata();
            ?>
        </div>
        <button type="button" role="presentation" class="owl-next"><span class="icon-arrow-right2"></span></button>
    </div>
</div>