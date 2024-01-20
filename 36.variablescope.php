<?php 


{//global scope variable
    $globalVar = "Ini adalah global Variable";

    function getGlobal(){
        echo $globalVar. PHP_EOL; //error karna ga bisa ngakses variable global
    }
    getGlobal();
}

{ //variable local scope
    function localScope(){
        $new =  "ini adalah local Variable"; //lcal scope
    }
    localScope();
    echo $new. PHP_EOL; //error karna ga bisa mengakses variable local
}



//global keyword dan $GLOBALS variable (setiap variable yang dibuat di global scope, secara otomatis akan disimpan di dalam array $GLOBAL oleh PHP)

$name = "ini global scope ya pak"; // global scope

function sayHello()
{
    global $name; // global keyword
    echo $name . PHP_EOL; //cara 1

    echo $GLOBALS["name"] . PHP_EOL; //cara 2
}

sayHello();
