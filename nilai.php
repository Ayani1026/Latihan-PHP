<?php

$angka = '90';
switch ($angka){
    case ($angka >= 90 and $angka <= 100):
        echo "A";
        break;
    case ($angka >= 80 and $angka < 90): 
        echo "B";
        break;
    case ($angka >= 70 and $angka < 80): 
        echo "C";
        break;
    case ($angka >= 0 and $angka < 70): 
        echo "D";
        break;
    default :
        echo "Maaf nilai anda tidak terdeteksi";
        break;


}         


?>