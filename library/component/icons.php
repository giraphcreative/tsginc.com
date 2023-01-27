<?php


// output the icons
function the_icons() {

    // get the icon background color
    $color = get_sub_field( 'background_color' );
    $class = get_sub_field( 'class' );
    $classes = implode( ' ', $class );

    // check if the nested repeater field has rows of data
    if( have_rows('icon') ):
        
        print '<div class="icons ' . $color . ( !empty( $classes ) ? ' ' . $classes : '' ) . '">';

        // loop through the rows of data
        while ( have_rows('icon') ) : the_row();

            $icon = get_sub_field('icon');
            $title = get_sub_field('title');
            $link = get_sub_field('link');
            echo '<div class="icon">' . ( !empty( $link ) ? '<a href="' . $link . '">' : '' ) . '<div class="icon-container"><img src="' . $icon . '" /></div><h4>' . $title . '</h4>' . ( !empty( $link ) ? '</a>' : '' ) . '</div>';

        endwhile;

        print '</div>';

    endif;
    
}


