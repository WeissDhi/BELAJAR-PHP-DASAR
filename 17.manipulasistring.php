<?php 
//manipulasi string

# DOT OPERATOR 
$name = "Teuku Ardhi";
echo "Name : " . $name . PHP_EOL; //eol = \n
echo "value : " . 100 . PHP_EOL; //

#konversi tipe data number 
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"12.52";
var_dump($valueFloat);

#mengakses karakter (mirip seperti mengakses array)
$name = "Eko";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;

#variable Parsing (buat ngakses variable lebih singkat)
$delta = 10;
$alpha = $delta + 100;

echo "Hasil penjumlahan Delta = $alpha " . PHP_EOL;

#curly braces
echo "hasil penjumlahan alpha {$alpha}Second"; //memisahkan tanpa spasi
?>