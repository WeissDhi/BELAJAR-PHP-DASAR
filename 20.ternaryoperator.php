<?php 
    $nilai =  10;
    $hasil = $nilai >90 && $nilai <=100 ? "lulus" : "tidak lulus";
    echo $hasil. PHP_EOL;


    //lebih dari 1 argumen
    $nilai = 71;

    $hasil = ($nilai > 90 && $nilai <= 100) ? "A" : (($nilai > 80 && $nilai <= 90) ? "B" : (($nilai > 70 && $nilai <= 80) ? "C" : "tidak lulus"));

    echo $hasil;