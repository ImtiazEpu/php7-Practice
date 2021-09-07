<?php
$fruites = ['apple', 'banana', 'orange', 'plum', 'dates', 'mango'];
$newFruits =['jackfruit','tanarid','pinapple'];
$someFruites = array_splice($fruites,-5,2,$newFruits);
print_r($someFruites);
print_r($fruites);