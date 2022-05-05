<?php
/*10. Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes.
Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją
rand(). Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės.
Skaičių pridėkite prie jau sugeneruoto laiko. Atspausdinkite laikrodį
prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.*/
$h = rand(0, 23);
$min = rand(0, 59);
$sek = rand(0, 59);
$num = rand(0, 300);
echo "$h:$min:$sek + $num sek. <br>";
$sek += $num;
if($sek > 59){
    $min += $sek / 60;
    $sek = $sek % 60;
    }
if($min > 59){
    $h += $min / 60;
    $min = $min % 60;
    echo "--min-- $h:$min:$sek"; 
    }
if($h > 23 && $min > 59){
    $h = 0;
    }
    $h = round($h, 0);
    $min = round($min, 0);
    $sek = round($sek, 0);
echo "$h:$min:$sek"; 