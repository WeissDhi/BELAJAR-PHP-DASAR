<?php
//Assign By Reference 
$name = "Ardhi";

$otherName = &$name;  //reference from name

$otherName = "Budi";

echo $name . PHP_EOL;

//Pass By Reference 
function increment(int &$value)
{ //& untuk mereference value akan terupdate ke var counter
    $value **= 3;
};
$counter  = 2;
increment($counter);
echo $counter . PHP_EOL;

//Returning Reference
function &getValue()
{
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 200;

$b = &getValue();
echo $b . PHP_EOL;