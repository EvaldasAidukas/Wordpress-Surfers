<?php get_header(); 
?>

<style>
    .hero{
        min-height:30vh;
    }
</style>

<div class="container blog-content flex">
    <img src="<?php the_post_thumbnail_url('blog-image'); ?>" alt="gal1">
    <div> <?php the_content(); ?></div>  
</div>

<?php
get_footer(); ?>