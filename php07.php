<?php

$student =[
    'fname' => 'Imtiaz',
    'lname' =>'Ahmed',
    'age' =>'18',
    'class' =>8,
    'section'=>'A',
];
//print_r($student);

printf("%s %s", $student['fname'],$student['lname']);
echo PHP_EOL;

// $studentSerial = serialize($student);
// print_r($studentSerial);
// echo PHP_EOL;
// $newSeriial = unserialize($studentSerial);
// print_r($newSeriial);

$studentJsonEncoded = json_encode($student);
print_r($studentJsonEncoded);
echo PHP_EOL;
$studentJsonDcoded = json_decode($studentJsonEncoded,true);
print_r($studentJsonDcoded);

