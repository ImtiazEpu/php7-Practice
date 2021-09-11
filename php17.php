<?php

$number = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12 ];

function sum( $oldvalue, $newvalue ) {
	if ( $newvalue % 2 == 1 ) {
		return $oldvalue + $newvalue;
	}
	return $oldvalue;
}

$reduce = array_reduce( $number, 'sum' );
print_r( $reduce );