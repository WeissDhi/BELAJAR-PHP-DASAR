<?php
//kode tanpa foreach

#perulangan array
$names = ['eko', "kurniawan", "Khannedy"];
for ($i = 0; $i < count($names); $i++) {
    echo "Data ke=$i = $names[$i]" . PHP_EOL;
}

foreach ($names as $name) {
    echo "Hello $name" . PHP_EOL;
}

#foreach dengan array yang ada key and value(object)
$dataMahasiswa = [
        "name" => "Ardhi",
        "age" => 20,
        "id" => 123412
    ];

foreach ($dataMahasiswa as $key => $value){
    echo "$key : $value" . PHP_EOL;
};