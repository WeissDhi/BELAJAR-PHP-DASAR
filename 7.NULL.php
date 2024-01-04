<?php 
//membuat data null
$nama = 'Ardhi';
$nama = null;

$age = null;

echo "Nama: \n";
echo $nama;
echo "Umur: \n";
echo $age;
echo"\n";
//mengecek data apakah null (is_null)
$universitas = 'Gunadarma';
$universitas = NULL;

$apakahNUll = is_null($universitas);
var_dump($apakahNUll);
echo"\n";
var_dump(is_null($apakahNUll));//
echo"\n";



//mengecek variable apakah ada value dan tidak null (isset)
$angka = 20;
var_dump(isset($angka));
$angka = null;
var_dump(isset($angka));

//sama aja kek make vardump
$apakahBervalue = isset($angka);
echo $apakahBervalue;


//menghapus variabel (unset)
$koneksi = false;
unset($koneksi);
var_dump(isset($koneksi));


?>

