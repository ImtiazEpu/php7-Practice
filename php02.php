<?php

// $name = "Earth"; //global scope

// function doSomething(){
//     global $name;
//     echo $name;
// }

// doSomething();

// function doSomething() {
//     //global $name;
//     $name = "Earth"; //Local Scope
//     //echo $name;
// }

//doSomething();
//echo $name;

function doSomething() {
    static $i; //static scope
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo PHP_EOL;
}
function doSomethingExtra() {
    static $i; //static scope
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo PHP_EOL;
}

doSomething();
doSomething();
doSomething();
doSomething();
doSomethingExtra();
doSomethingExtra();
doSomething();