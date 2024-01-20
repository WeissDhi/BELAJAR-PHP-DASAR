<?php

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

//array map
$dataResult = array_map(fn(int $value) => $value * 10, $data);
var_dump($dataResult);

//reverse short
rsort($data);
var_dump($data);

//shorting data array
$dataAngka = [0,10,12,213,4,45,12,21,30,14,51];
sort($dataAngka);
var_dump($dataAngka);

//mengambil key and value
$dataMahasiswa = [
    "nama" => "Ardhi",
    "alamat" => "Cengkareng"
];
var_dump(array_keys($dataMahasiswa)); // mengambil key
var_dump(array_values($dataMahasiswa)); //mengambil value

