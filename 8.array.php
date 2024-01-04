<?php 
//cara 1 membuat array
$arrayPertama = array(12,'banana','9','10.5');
var_dump($arrayPertama);
print_r($arrayPertama); //mencetak seluruh aray

//cara 2 membuat array
$arrayKedua = [1,2,"Teuku"];
var_dump($arrayKedua);

//CRUD ARRAY
#create
$dataBarang = ['Kopi','gelas','susu','gula aren','cups'];

#read
var_dump($dataBarang[2]);
echo $dataBarang[0];
echo"\n";

#update
//mengubah nama
$dataBarang[0]= 'Kopi Robusta';
var_dump($dataBarang);
//menambah barang
$dataBarang[]= "Meja";
var_dump($dataBarang);

#delete
unset($dataBarang[1]);
var_dump($dataBarang);

//menampilkan jumlah array
var_dump(count($dataBarang));


