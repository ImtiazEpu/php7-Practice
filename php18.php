<?php
/*$numbers = [];
for ( $i = 0; $i < 21 ; $i ++ ) {
	array_push($numbers, $i);
}
print_r($numbers);*/
/*$numbers = range(0,20, 2);
print_r($numbers);*/
foreach (range(0,60,11) as $number){
	if ($number>2){
		echo $number;
	}
	echo PHP_EOL;
}





