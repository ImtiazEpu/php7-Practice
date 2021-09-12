<?php

$number = range(40,83);
$random = mt_rand(0,30);
// print_r($random);
echo PHP_EOL;
shuffle($number);
print_r($number);


