<?php
$students = [
    "rahim",
    "KOrim",
    123,
    "jone deo",
];
$students[2] = "imtiaz Epu";
// $n = count($students);
// for($i = 0; $i < $n; $i++){
//     echo $students[$i];
//     echo PHP_EOL;
// }

// for($i = ($n-1); $i >=0; $i--){
//     echo $students[$i];
//     echo PHP_EOL;
// }

$student = array_pop($students);
$student = array_shift($students);
$student = array_shift($students);


array_unshift($students, 'Nuzaifa');
array_push($students,'Etul');


$n = count($students);
for($i = 0; $i < $n; $i++){
    echo $students[$i];
    echo PHP_EOL;
}

