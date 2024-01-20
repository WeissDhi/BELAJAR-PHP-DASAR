<?php 
//argument funtion (var1, var2)
function pangkat($angka1, $angka2){
    return $angka1 ** $angka2;
};
echo pangkat(3,2).PHP_EOL;


#default value
function hello($name = "Anonymous"){ 
    return $name;
}
echo hello().PHP_EOL;
echo hello("Teuku");
#kesalahan default value (kalau cuma ngasih satu default value ketika ada 2 argument lebih)
function sayHello($firstName = "Anonymous", $lastName){ 
    return "Hello$firstName $lastName";
};
echo sayHello("teuku", "arhdi").PHP_EOL;



#type parameter (harus tipe data tertentu)
function tambahData(float $data1, float $data2) {
    echo "Hasilnya = " . ($data1 + $data2) . PHP_EOL;
}

tambahData("10.5", 12.5); //string langsung dikonversi
tambahData(true, false); //boolean di konversi jadi 1 0


#variable length argumen list
function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(",", $values) . " = $total" . PHP_EOL;
}

$values = [1, 2, 3, 4, 5];

sumAll(1, 2, 3, 4, 5);
sumAll(...$values);
?>