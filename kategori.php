<?php
$nama = 'ayanis putri rafaela' ;
$berat_badan = 40 ;
$tinggi_badan= 1.5 ;

$rumus_bmi = $berat_badan / $tinggi_badan**2;

if ($rumus_bmi >= 16.00 and $rumus_bmi <= 18.49){
    echo "halo $nama . nilai bmi anda adalah $rumus_bmi , anda termasuk kurus"; 
}
elseif ($rumus_bmi >= 18.50 and $rumus_bmi <= 24.99){
    echo "halo, $nama . nilai bmi anda adalah $rumus_bmi , anda termasuk sedang";
}
elseif ($rumus_bmi >=25.00 and $rumus_bmi >= 29.99){
    echo "halo, $nama . nilai bmi anda adalah $rumus_bmi , anda termasuk gemuk";
}

?>