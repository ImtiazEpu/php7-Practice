<?php

$number = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12 ];
$perSons = ['sujon','sohel','samim','arif','kajol','sayem','amin','salim','pappu'];

function square( $n ) {
	//printf( "Square of %d is %d", $n, $n * $n );
	echo PHP_EOL;
}

array_walk($number,'square');

function cube( $n ) {
	return $n * $n * $n;
}

function even( $n ) {
	return $n % 2 == 0;
}

function odd( $n ) {
	return $n % 2 == 1;
}

$map = array_map( 'cube', $number );
print_r( $number );
print_r( $map );

/*$filter = array_filter($number,'odd');

print_r( $number );
print_r( $filter );*/

function personNameBys($person){
	return $person[0] =='k';
}

$personName = array_filter($perSons,'personNameBys');
print_r($personName);





