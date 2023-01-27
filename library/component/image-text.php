<?php


function the_image_text() {
    $image = get_sub_field('image');
    $content = get_sub_field('content');
    $position = get_sub_field('position');
    $color = get_sub_field('color');
    if ( !empty( $image ) && !empty( $content ) ){
        ?>
    <div class="image-text <?php print $color; ?> <?php print $position ?>">
        <div class="image-text-image">
            <img src="<?php print $image ?>" />
        </div>
        <div class="image-text-content">
            <?php print $content ?>
        </div>
    </div>
        <?php
    }
}

