<?php


function the_slides() {

    if( have_rows('slide') ):
        
        print '<div class="slides">';

        // loop through the rows of data
        $num = 0;
        while ( have_rows('slide') ) : the_row();

            $background = get_sub_field('background');
            $content = get_sub_field('content');
            $link = get_sub_field('link');
            ?>
            <div class="slide<?php print ( $num == 0 ? ' visible' : '' ) . ( !empty( $link ) ? ' has-link' : '' ); ?>"
                <?php if ( !empty( $link ) ) { ?>data-href="<?php print $link ?>"<?php } ?>
                style="background-image: url(<?php print $background; ?>);">
                <div class="slide-content">
                    <div class="slide-content-inner">
                        <?php print $content ?>
                    </div>
                </div>
            </div>
            <?php
            $num++;

        endwhile;

        print '<div class="slides-nav"><a href="#" class="previous">Previous</a><a href="#" class="next">Next</a></div>';
        print '</div>';

    endif;

}

