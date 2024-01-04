<?php 
    //seperti object di javascript
    #cara 1
    $dataMahasiswa = array(
        "id" => 10930,
        "name" => "Teuku Ardhi",
        "age" => 20,
        "address" => array( //nested array
            "city" => "Jakarta",
            "country" => "Indonesia"
        )     
    );
    var_dump($dataMahasiswa); //nampilin semua
    var_dump($dataMahasiswa["name"]); //nampilin index name
    var_dump($dataMahasiswa["address"]['city']); //nampilin city di dalam index address

    #cara2
    $dataProduk = [
        'id' => 10,
        'supplier' => 'PT. EKO HARYANTO',
        'jumlah_produk' => 1220,
        'jenis_produk' => [
                "makanan"=> "Roti",
                "minuman" => "soda"
            ]
    ];
    var_dump($dataProduk);
    var_dump($dataProduk['jumlah_produk']);
    var_dump($dataProduk['jenis_produk']['minuman']);


?>