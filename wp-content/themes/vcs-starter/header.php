<!DOCTYPE html>
<html <?php language_attributes('charset'); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title>"<?php wp_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <?php wp_head();?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700%7CPlayfair+Display:400,400i%7CRaleway:400,600,700%7CRoboto+Condensed:700%7PT+Sans:400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
    </head>
    <body>
        <!-- Initialize fb sdk -->
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        console.log("js working")</script>

        <?php
        $image = get_field('logo_image','option');
        $coverImage = get_field('hero_image','option');
        ?>

        <!-- Hero element -->
        <div class="hero" style="background-image: url('<?php 
        if(is_front_page()){
            echo $coverImage['sizes']['medium_large'];
        }else{
            //print_r(get_field('background',"option"));
            echo get_field('background',"option")['sizes']['medium_large'];
        };
        ?>')" id="hero">
            <div class="container">
                <div class="nav-bar flex">
                    <a href="<?php echo home_url();?>" class="logo">
                        <img alt="<?php bloginfo('name'); ?>" src="<?php echo $image['sizes']['medium'];?>">
                    </a>
                    <div>
                        <a href="javascript:void(0);" class="icon burger">
                            <i class="fa fa-bars"></i>
                        </a>
                        <?php 

                        $args = ['container'=>false,'theme_location'=>'primary-navigation','menu_class'=>"nav-list"];
                        wp_nav_menu($args);
                        ?>
                    </div>
                    <div class="social-icons flex">
                    <?php 
                        get_template_part('partials/social-buttons');
                    ?>
                    </div>
                    <!-- store -->
                </div>
                <?php 
                    if(is_front_page()){
                        get_template_part('partials/hero');
                        get_template_part('partials/store');
                    };
                ?>
        </div>
    </div>