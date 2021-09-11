<?php
function fibonacci( $old, $new, $end ) {
    static $start;
    $start = $start ?? 1;

    if ( $start > $end ) {
        return;
    }

    $start++;

    echo $old . " ";
    $_tem = $old + $new;
    $old = $new;
    $new = $_tem;

    fibonacci( $old, $new, $end );

}
fibonacci( 0, 1, 15 );

