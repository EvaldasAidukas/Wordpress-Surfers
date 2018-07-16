<div class="container">
    <div class="social flex" id="social">
        <div class="left">
            <div class="instagram-letters">
                INSTAGRAM
            </div>
            <div class="instagram">
                <?php print_r(the_field("sn_instagram"));
                ?>
            </div>
        </div>
        <div class="right flex">
            <div class="facebook flex">
                <div class="fb-page" style="margin: 100px 50px auto 50px;"
                    data-href="<?php the_field("sn_facebook"); //sn_instagram ?>"
                    data-width="340" 
                    data-hide-cover="false"
                    data-adapt-container-width="true"
                    data-show-facepile="true">
                </div>
            </div>
        </div>
    </div>
</div>