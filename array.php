<?php

$data = file_get_contents("http://localhost/Ayanis/Ayani_freeclass_eduwork/tugas_php/data.json");
$json = json_decode($data, TRUE);
echo "
    <table width = 100% height=10% bgcolor=#FFC000>
        <tr>
            <td>Daftar Nilai</td>
        </tr>
    </table>
";


echo "<br>";
echo "<br>";

echo "
    <table border=1 cellpadding=10 align=center>
        <tr>
            <td width=50 align=center><b>No</b></td>
            <td width=100 align=center><b>Nama</b></td>
            <td width=100 align=center><b>Tanggal Lahir</b></td>
            <td width=100 align=center><b>Umur</b></td>
            <td width=100 align=center><b>Alamat</b></td>
            <td width=100 align=center><b>Kelas</b></td>
            <td width=100 align=center><b>Nilai</b></td>
            <td width=100 align=center><b>Hasil</b></td>
        </tr>
    </table>
";


$color = "DDDDDD";

for($no = 1, $x=0; $x<count($json); $no +=1, $x++){ 
    
    $a = $json[$x]['tanggal_lahir'];
    $awal  = date_create("$a");
    $akhir = date_create(); // waktu sekarang
    $diff  = date_diff( $awal, $akhir );

    if($no %  2 == 0){
        echo "<table border=1 cellpadding=10 align=center>";
        echo "<tr>";
        echo "<td width=50 align=center> $no </td>";
    
        echo "<td width=100 align=center>";
        echo $json[$x]['nama']; 
        echo "</td>";
    
        echo "<td width=100 align=center>";
        echo $json[$x]['tanggal_lahir'];
        echo "</td>";
    
        echo "<td width=100 align=center>";
        echo $diff->y . ' tahun ';
        echo "</td>";
    
        echo "<td width=100 align=center>";
        echo $json[$x]['alamat'];
        echo "</td>";
    
        echo "<td width=100 align=center>";
        echo $json[$x]['kelas'];
        echo "</td>";
    
        echo "<td width=100 align=center>";
        echo $json[$x]['nilai'];
        echo "</td>";
    
        echo "<td width=100 align=center>";
        echo "Hasil";
        echo "</td>";
    
        echo "</tr>";
        echo "</table>";
    }
    else{
        echo "<table border=1 cellpadding=10 align=center bgcolor=$color>";
        echo "<tr>";
        echo "<td width=50 align=center> $no </td>";

        echo "<td width=100 align=center>";
        echo $json[$x]['nama']; 
        echo "</td>";

        echo "<td width=100 align=center>";
        echo $json[$x]['tanggal_lahir'];
        echo "</td>";

        echo "<td width=100 align=center>";
        echo $diff->y . ' tahun ';
        echo "</td>";

        echo "<td width=100 align=center>";
        echo $json[$x]['alamat'];
        echo "</td>";

        echo "<td width=100 align=center>";
        echo $json[$x]['kelas'];
        echo "</td>";

        echo "<td width=100 align=center>";
        echo $json[$x]['nilai'];
        echo "</td>";

        echo "<td width=100 align=center>";
        echo "Hasil";
        echo "</td>";

        echo "</tr>";
        echo "</table>";
    }

    
}

?>