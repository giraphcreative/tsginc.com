<?php

function the_header() {

    $image = get_sub_field('image');
    $content = get_sub_field('content');

    ?>
    <div class="page-header" style="background-image: url(<?php print $image; ?>);">
        <img src="<?php print $image; ?>" />
        <div class="page-header-content">
            <div class="page-header-content-inner">
                <?php print $content ?>
            </div>
        </div>
    </div>
    <?php

}

