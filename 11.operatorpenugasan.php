<?php  
$a = 100;
$b = 50;

var_dump($a%=$b);
$angka = 10;
$angka -= 5; // Setara dengan $angka = $angka - 5;

echo $angka; // Output: 5


//contoh program kasir
$total = 0;

$fruit = 5000;
$chicken = 10000;
$orangeJuice = 5000;


$total += $fruit;
$total += $chicken;
$total += $orangeJuice;

var_dump($total);

?>