<?php

function persegi_panjang($panjang, $lebar){
    $luas_persegiPanjang = $panjang * $lebar;
    echo "<b>Luas Persegi Panjang</b><hr>";
    echo "$panjang * $lebar = $luas_persegiPanjang";
    echo "<br>";
}

function persegi($sisi){
    $luas_persegi = $sisi * $sisi;
    echo "<br><b>Luas Persegi</b><hr>";
    echo "$sisi * $sisi = $luas_persegi";
    echo "<br>";
}

function volume_balok($panjang_balok, $lebar_balok, $tinggi_balok){
    $volum_balok = $panjang_balok * $lebar_balok * $tinggi_balok;
    echo "<br><b>Volume Balok</b><hr>";
    echo "$panjang_balok * $lebar_balok * $tinggi_balok = $volum_balok";
    echo "<br>";
}

function volume_kubus($sisi_kubus){
    $volum_kubus = $sisi_kubus**3;
    echo "<br><b>Volume Kubus</b><hr>";
    echo "$sisi_kubus**3 = $volum_kubus";
    echo "<br>";
}

function segitiga($alas_segitiga, $tinggi_segitiga){
    $luas_segitiga = (1/2) * $alas_segitiga * $tinggi_segitiga;
    echo "<br><b>Luas Segitiga</b><hr>";
    echo "(1/2) * $alas_segitiga * $tinggi_segitiga = $luas_segitiga";
}

persegi_panjang(10, 5);
persegi(25);
volume_balok(10, 5, 4);
volume_kubus(5);
segitiga(7, 12);
?>