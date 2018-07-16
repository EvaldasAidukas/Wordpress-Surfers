<?php
    $img = get_field('about_bg_image');
    $link = get_field('about_read_more');

    //print_r($img); exit;
    //the_field('about_header');
?>

<!-- <?php ?> -->

<div class="about-us" id="about-us" style="background-image: url(<?php echo $img['sizes']['about-big-image']; //butinai pasikeist rez tarkim 1400 su add_image_size() ?>);">
    <div class="bg">
        <div class="container flex ">
            <div class="left">
                <div class="left-box">
                    <h3><?php the_field('about_header'); ?></h3>
                    <span class="icon-cancel-circle x-icon"></span>
                    <div>
                        <?php echo do_shortcode(the_field('about_content')); ?>
                        <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title'];?></a>
                    </div>
                </div>
            </div>
            <div class="right flex">
                <iframe id="video" src="<?php the_field('about_video'); ?>"></iframe>
                <!-- https://www.youtube.com/embed/b6hoBp7Hk-A?ecver=1 -->
            </div>
        </div>
    </div>
</div>