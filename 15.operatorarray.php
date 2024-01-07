<?php 
    //UNION (+)
    $first = [
    "first_name" => 'Teuku Ardhi'
    ];
    $last = [
    "last_name" => 'Ardhi'
    ];

    $union = $first + $last;
    var_dump($union);

    //ga bisa digunain kalo make array biasa (nanti elemennya hilang)
    $angka1 = [1,2,34,12];
    $angka2 = [31.2,33.4,53.2,17.2];
    $jumlahArr = array_merge($angka1, $angka2); //bukan make $angka1 + $angka2
    var_dump($jumlahArr);

    //EQUALITY dan IDENTITY (== & ===)
    $dataMahasiswa = [
        'name' => 'Ferdi',
        'id' => 51421472,
        'address' => 'jakarta'
        ];
    $dataKaryawan = [
        'address' => 'jakarta',
        'name' => 'Ferdi',
        'id' => 51421472
    ];
    var_dump($dataMahasiswa==$dataKaryawan); //sama isi datanya (true)
    var_dump($dataMahasiswa===$dataKaryawan); //tidak identik karena tidak berurutan

    //INEQUALITY dan NONIDENTITY
        //EQUALITY dan IDENTITY (== & ===)
        $dataMahasiswa = [
            'name' => 'Ferdi',
            'id' => 51421472,
            'address' => 'jakarta'
            ];
        $dataKaryawan = [
            'address' => 'jakarta',
            'name' => 'Ferdi',
            'id' => 51421472
        ];
        var_dump($dataMahasiswa!=$dataKaryawan); 
        var_dump($dataMahasiswa!==$dataKaryawan);
?>