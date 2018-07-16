<?php
    $link = get_field('blog_link');
    //print_r($link); exit;
?>

<div class="updates container flex" id="updates">
    <div class="header">
        <h3><?php the_field('blog_header'); ?></h3>
        <span class="icon-cancel-circle x-icon"></span>
    </div>
    <div class="gallery flex">
        <?php 
        $limit = get_field('blog_post_limit');
        if($limi<1){
            $limit = -1;
        }

        $args = [
            'cat' => get_field('blog_post_category'),
            'posts_per_page' => $limit
        ];

        $query = new WP_Query($args);

        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post(); 
                ?>
                <div class="gallery-item">
                    <a href="<?php echo the_permalink(); ?>">
                        <img src="<?php the_post_thumbnail_url('blog-image'); ?>" alt="gal1">
                        <h2><?php 
                            $excerpt = strip_tags(get_the_excerpt());
                            if(strlen($excerpt)>120){
                                echo substr($excerpt,0,120)."...";
                            }
                            else{
                                echo $excerpt; 
                            }
                        ?></h2>
                    </a>
                </div>
                <?php
            } 
        } 
        wp_reset_postdata();
        ?>
    </div>
    <div class="center">
        <a href="<?php echo $link['url']?>" target="<?php echo $link['target']?>" class="link"><?php echo $link['title']?></a>
    </div>
</div>