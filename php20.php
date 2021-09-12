<?php
$fruits = ['a' => 'apple', 'b' => 'banana', 'c' => 'orange', 'd' => 'plum', 'e' => 'dates', 'g' => 'mango', 'f' => 'dates'];
$_fruits = $fruits;
$rand = array_rand($fruits);
print_r($rand);

shuffle($_fruits);
print_r($_fruits);
