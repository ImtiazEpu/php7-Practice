<?php
$foods = [
    'vagitablea' => explode( ', ', 'brrnjal, brocoli, carrot, capsicam' ),
    'fruite'     => explode( ', ', 'orange, banana, apple' ),
    'drinks'      => explode( ', ', 'water, milk' ),
];

array_push($foods['drinks'],'orange juice');
print_r( $foods );

echo PHP_EOL;

echo $foods['fruite'][1];
