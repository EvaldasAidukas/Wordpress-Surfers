
</div>
    <div class="store flex" id="store">
        <div class="owl-carousel owl-theme board-gallery">
        <?php
        // check if the repeater field has rows of data
        if(have_rows('sf_image_repeater')):
            // loop through the rows of data
            while (have_rows('sf_image_repeater')) : the_row();
                ?>
                <img src="<?php echo get_sub_field('sf_image')['sizes']['medium_large']; ?>" alt="<?php echo get_sub_field('sf_image')['alt']; ?>" />
                <?php
            endwhile;
        endif;
        ?>
        </div>
        <div class="board-info flex">
            <h2><?php the_field('sf_header');?></h2>
            <div class="stars"><?php the_field('sf_stars'); ?></div>
            <ul class="section flex">
                <li class="show">Description</li>
                <li>Features</li>
                <li>Dimensions</li>
            </ul>
            <div id="board_content1" class="description visible"><?php echo do_shortcode(get_field('sf_description'));?></div>
            <div id="board_content2" class="features"><?php echo do_shortcode(get_field('sf_features'));?></div>
            <div id="board_content3" class="dimensions"><?php echo do_shortcode(get_field('sf_dimensions'));?></div>
            <div class="price">
                <p>$<?php the_field('sf_price');?></p>
                <a href="<?php echo get_field('sf_buy_link')['url'];?>" target="<?php echo get_field('sf_buy_link')['target'];?>" class="link" ><?php echo get_field('sf_buy_link')['title'];?></a>
            </div>
            <div class="view-link">
                <a href="<?php echo get_field('sf_more_link')['url'];?>" target="<?php echo get_field('sf_more_link')['target'];?>"><?php echo get_field('sf_more_link')['title'];?></a>
            </div>
        </div>
    </div>
    <?php 
    if(is_front_page()){
        echo "<div class='about-us-letters flex'><h4>ABOUT US</h4></div>";
    };
    ?>
</div>