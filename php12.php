<?php

$fruites = ['apple', 'banana', 'orange', 'plum', 'dates', 'mango'];
//$newFruits =['jackfruit','tanarid','pinapple'];

$newFruire1 = array_slice($fruites,0,3);
$newFruire2 = array_slice($fruites,3);

$newfruits = array_merge($newFruire1, $newFruire2);

print_r($newFruire1);
print_r($newFruire2);
print_r($newfruits);