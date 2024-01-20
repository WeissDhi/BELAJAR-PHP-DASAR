<?php
$sayHello = function (string $name){
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Ardhi");
$sayHello("Budi");

//anonymous function sebagai value dari function
function sayGoodBye(string $name, $filter){
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
};

sayGoodBye("ardhi", function(string $name){ 
    return strtoupper($name) ;
});

//anonymous function jadi value dari variable function
$filterFunction =  function(string $name){ 
    return strtoupper($name) ;
};

sayGoodbye("ardhi", $filterFunction);

//anonymoouse function mengakses dari var dari luar

$firstName = "Teuku";
$lastName = "Ardhi";
$sayHello = function() use ($firstName, $lastName){
    echo "Hello $firstName $lastName" . PHP_EOL;
};
$sayHello();

