<?php

$name = 0;

if(isset($name)){
    echo "Name is set";
}else{
    echo "Not Set";
}
 echo PHP_EOL;

if(empty($name)){
    echo "Name is Empty";
}else{
    echo "Not Empty";
}

echo PHP_EOL;

if (isset($name) && is_numeric($name) || $name != '') {
    echo "Name is Set & it's not Empty";
}else{
    echo "Not Set or Empty";
}