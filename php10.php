<?php
$fruites = ['apple', 'banana', 'orange', 'plum', 'dates', 'mango'];
$colors = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow", "e" => "brown"];
//Builtin function
$someFruites = array_slice( $fruites, -4, -1, true );
print_r( $someFruites );

$somecolors = array_slice( $colors, 2 );
print_r( $somecolors );

//useing  for loop
$n = count( $fruites );
$result = [];
for ( $i = ( $n - 4 ); $i < ( $n - 1 ); $i++ ) {
    $result[] = $fruites[$i];
}
print_r( $result );
