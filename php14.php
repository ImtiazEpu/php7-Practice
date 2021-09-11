<?php

$fruitsNew = ['a' => 'apple', 'b' => 'banana', 'c' => 'orange', 'd' => 'plum', 'e' => 'dates', 'g' => 'mango', 'f' => 'dates'];
$numbers = [11, 23, 33, 4, 5, 7, 2, 16, 77, 22, 3, 50];

if ( in_array( 23, $numbers ,true) ) {
    echo "Data is found";
} else {
    echo "Data Not Found";
}

echo PHP_EOL;

$offset = array_search( 77, $numbers,true );
print_r( $offset );

echo PHP_EOL;

if ( key_exists( 'c', $fruitsNew ) ) {
    echo "key c Exits";
}