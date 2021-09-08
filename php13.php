<?php

$fruits = ['apple', 'banana', 'orange', 'plum', 'dates', 'mango'];

$fruitsNew = ['a' => 'apple', 'b' => 'banana', 'c' => 'orange', 'd' => 'plum', 'e' => 'dates', 'g' => 'mango', 'f' => 'dates'];
$numbers = [11, 23, 33, 4, 5, 7, 2, 16, 77, 22, 3, 50];

$random = ["apple", "Apple", "banana", "Banana", "Pinapple"];

//ASCII code table

sort( $random , SORT_STRING | SORT_FLAG_CASE);
//rsort( $numbers );
//asort( $fruitsNew );
//arsort( $numbers );
//ksort( $fruitsNew );
//krsort( $fruitsNew );
print_r( $random );

// $n = count( $numbers );
// for ( $i = 0; $i < $n; $i++ ) {
//     echo $numbers[$i];
//     echo PHP_EOL;
// }

// foreach ( $fruitsNew as $fruit ) {
//     echo $fruit;
//     echo PHP_EOL;
// }
