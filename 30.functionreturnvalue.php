<?php
function sum(int $value, int $value2) : int
{
    return $value + $value2;
};
$total = sum(50, 60);
echo "total: " . $total . PHP_EOL;

$total = sum("20", 60);
var_dump($total);


//lebih dari 2 return tapi pake kondisi

function getFinalValue(int $value): string //pengembalian berbentuk string
{
    if ($value >= 80) {
        return "A";
    } else if ($value >= 70) {
        return "B";
    } else if ($value >= 60) {
        return "C";
    } else if ($value >= 50) {
        return "D";
    } else {
        return "E";
    }

    echo "Ups" . PHP_EOL; //tidak akan dieksekusi karna udh ketemu return dluan
}
$score = getFinalValue(90);
var_dump($score);

$score = getFinalValue(30);
var_dump($score);
