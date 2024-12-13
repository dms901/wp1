<?php 
$angka = 7;

switch ($angka) {
        case 0:$terbilang ="NOL";
        break;
        case 1:$terbilang ="SATU";
        break;
        case 2:$terbilang ="DUA";
        break;
        case 3:$terbilang ="TIGA";
        break;
        case 4:$terbilang ="EMPAT";
        break;
        case 5:$terbilang ="LIMA";
        break;
        case 6:$terbilang ="ENAN";
        break;
        case 7:$terbilang ="TUJUH";
        break;
        case 8:$terbilang ="DELAPAN";
        break;
        case 9:$terbilang ="SEMBILAN";
        break;
    
    default: $terbilang ="Nilai Diluar Jangkauan";
        break;
}
echo"Bentuk Terbilang Dari Angka $angka Adalah $terbilang";
?>