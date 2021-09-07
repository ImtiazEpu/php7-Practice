<?php

$foods = [
    'vagitablea' => 'brrnjal, brocoli, carrot, capsicam',
    'fruite'     => 'orange, banana, apple',
    'drink'      => 'water,milk',
];

$foods['drink'] .= ", oreng juice";

//echo $foods['vagitablea'];

// foreach($foods as $key =>$value){
//     echo $key."=". $value;
// }

// $keys = array_keys($foods);
// for($i = 0; $i<count($keys); $i++){
//     echo $foods[$keys[$i]];
//     echo PHP_EOL;
// }

$value = array_values( $foods );
for ( $i = 0; $i < count( $value ); $i++ ) {
    echo $value[$i];
    echo PHP_EOL;
}
