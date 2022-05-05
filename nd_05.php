<?php
/*5. Sukurkite keturis kintamuosius ir rand() funkcija sugeneruokite jiems
reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų.
(sprendimui masyvo nenaudoti).*/
$a = rand(0,2);
$b = rand(0,2);
$c = rand(0,2);
$d = rand(0,2);
$count_0 = 0;
$count_1 = 0;
$count_2 = 0;

if($a == 0){
    $count_0++;
}

if($b == 0){
    $count_0++;
}

if($c == 0){
    $count_0++;
}

if($a == 1){
    $count_1++;
}

if($b == 1){
    $count_1++;
}

if($c == 1){
    $count_1++;
}

if($a == 2){
    $count_2++;
}

if($b == 2){
    $count_2++;
}

if($c == 2){
    $count_2++;
}



echo "nuliuku: $count_0, vienetuku: $count_1, dvejetuku: $count_2";