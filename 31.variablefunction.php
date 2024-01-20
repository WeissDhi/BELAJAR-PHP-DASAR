<?php
//function variable
function hello()
{
    echo "My name is Ardhi" . PHP_EOL;
}

function sum(int $value, int $value2)
{
    echo $value + $value2 . PHP_EOL;
};

$functionHello = "hello";
$functionHello();

$functionSum = "sum";
$functionSum(2,4);

//penggunaan variable function

function sayHello(string $name, $filter){
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}
function sampleFunction(string $name) : string {
    return "sample $name" . PHP_EOL;
}

sayHello ("Ardhi", "samplefunction"); //sample function adalah function yang kita buat
sayHello("ARDHI", "strtolower"); //strtolower udh bawaan function php
sayHello("ini huruf kecil semua", "strtoupper");