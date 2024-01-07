<?php 
$variabel = 14; //ini expression, karena dia bervalue
$b =$variabel;
echo $b;

//expression kompleks
function getValue(){
    return 100;
}
$hasilFungsi = getValue(); //ini statement karena terdapat execution complete diakhiri dengan titik koma

echo $hasilFungsi;

function runApp($name)
{
    echo "Start Program" . PHP_EOL;
    echo "Hello $name" . PHP_EOL;
    echo "End Program" . PHP_EOL;
    
    return "Program has run successfully."; // Contoh nilai yang dikembalikan
}

$hasil = runApp('Ardhi');
echo $hasil;



?>