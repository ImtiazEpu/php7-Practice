<?php

$fruites = ['apple', 'banana', 'orange', 'plum', 'dates', 'mango'];
$colors = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow", "e" => "brown", 12 => 78];
//$newFruits =['jackfruit','tanarid','pinapple'];

$newFruire1 = array_slice( $fruites, 0, 3 );
$newFruire2 = array_slice( $fruites, 3, null,true );
$newfruits = array_merge( $newFruire1, $newFruire2 );

// print_r( $newFruire1 );
// print_r( $newFruire2 );
print_r( $newfruits );

$newfruitesPlus = $newFruire1 + $newFruire2;
print_r( $newfruitesPlus );
$c1 = array_slice( $colors, 0, 2, true );
$c2 = array_slice( $colors, 4, null, true );
$c3 = ["f" => "black", "g" => "orange"];

//print_r( $c1 );
//print_r( $c2 );

$colorData = array_splice( $colors, 2, 2, ["f" => "black", "g" => "orange"] );
$colorDataCorrectWay = $c1 + $c3 + $c2;
//print_r( $colorDataCorrectWay );
// print_r( $colorData );
//print_r( $colors );