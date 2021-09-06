<?php

$person =[
    'fname' => 'Hello',
    'lname' =>'World',
];
//Copy by value/ deep copy
// $newPerson = $person;

// $newPerson['lname'] = 'Pluto';

// print_r($person);
// print_r($newPerson);


//copy by reference/shallow copy
// $newPerson = &$person;

// $newPerson['lname'] = 'Pluto';

// print_r($person);
// print_r($newPerson);

function printData(&$person){
    $person['fname'] .= " Change";
    print_r($person);
}
printData($person);
print_r($person);