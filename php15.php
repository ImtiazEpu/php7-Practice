<?php
$fruits1 = ['a' => 'apple', 'b' => 'banana', 'c' => 'dates'];
$fruits2 = ['d' => 'plum', 'e' => 'dates', 'f' => 'mango', 'g'=> 'dates'];

$num1 = [2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377];
$num2 = [377, 233, 150, 88, 77, 50, 34, 22, 12, 5, 3, 2];

//Check Only value
$common = array_intersect( $num1, $num2 );
//$commof = array_intersect( $fruits1, $fruits2 );
$commof = array_intersect_assoc( $fruits1, $fruits2 );
print_r( $common );
print_r( $commof );


$diff = array_diff($num1, $num2);
//$difff = array_diff($fruits1, $fruits2);
$difff = array_diff_assoc($fruits1, $fruits2);
print_r($diff);
print_r($difff);