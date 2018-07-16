
<?php
// check if the repeater field has rows of data
if(have_rows('social_button_repeater','option')):
 	// loop through the rows of data
    while (have_rows('social_button_repeater','option')) : the_row();
        ?>
        <a href="<?php 
                $link = get_sub_field('soc_link');
                if(strpos($link,"@") == true) {
                    echo "mailto:".$link;
                }else{
                    echo $link;
                };
                
                ?>" target="_blank" class="icon-black-circe">
            <?php
            the_sub_field('soc_icon');
            ?>
        </a>
        <?php
    endwhile;
endif;
?>