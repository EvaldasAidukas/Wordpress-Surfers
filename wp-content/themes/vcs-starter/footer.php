<?php
    $icon = [get_field('icon1','option'),get_field('icon2','option')];
    echo "<div id='wave-icon' style='display:none'>".$icon[1]['sizes']['thumbnail']."</div>";
    //print_r($icon); exit;
?>
        
        <!-- footer section -->
        <footer id="footer">
            <div class="container">
                <div class="boxas flex">
                    <?php
                    $args = ['container'=>false,'theme_location'=>'footer-navigation','menu_class'=>"panel flex"];
                    wp_nav_menu($args);
                    ?>
                    <div class="newsletter">
                        <h2><?php the_field("newsletter_title","options"); ?></h2>
                        <form class="input-form flex" action="">
                            <span class="icon-envelop"></span>
                            <input type="email" placeholder="<?php the_field("newsletter_placeholder","options"); ?>" class="email-input" name="email">
                                <button type="submit" class="email-submit" value="">
                                    <span class="icon-arrow-right2"></span>
                                </button>
                          </form>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Javascript files -->
        <?php wp_footer(); ?>
    </body>
</html>
