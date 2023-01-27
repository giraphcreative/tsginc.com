<?php


function the_content_area() {
    $content = get_sub_field('content');
    $color = get_sub_field('color');
    if ( !empty( $content ) ){
        ?>
    <div class="content-area <?php print $color; ?>">
        <?php print $content ?>
    </div>
        <?php
    }
}

