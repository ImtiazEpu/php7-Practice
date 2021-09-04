<?php

$name = "Earth";

function doSomething(){
    global $name;
    echo $name;
}

doSomething();
