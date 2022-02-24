<?php

echo "
    <table border=1 cellpadding=10 bgcolor=#3DB2FF align=center>
        <tr>
            <td width=50 align=center><b>No</b></td>
            <td width=100 align=center><b>Nama</b></td>
            <td width=100 align=center><b>Kelas</b></td>
        </tr>
    </table>
";

$color = "#EEEEEE";

for ($no = 1, $i=1, $a=10; $i<=10, $a>=1  ; $no +=1, $i+=1, $a-=1) { 
    if($no %  2 == 0){
        echo"
            <table border=1 cellpadding=10 align=center>
                <tr>
                    <td width=50 align=center> $no </td>
                    <td width=100 align=center> nama ke $i </td>
                    <td width=100 align=center> kelas $a </td>
                </tr>
            </table>
        ";
    }
    else{
        echo"
            <table border=1 cellpadding=10 bgcolor=$color align=center>
                <tr>
                    <td width=50 align=center> $no </td>
                    <td width=100 align=center> nama ke $i </td>
                    <td width=100 align=center> kelas $a </td>
                </tr>
            </table>
        ";

    }
    
}
?>