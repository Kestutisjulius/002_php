<?php
/*9. Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm
reikšmėm nuo 0 iki 100. Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį
vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės
nei 90. Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko
skaičiaus.*/
$a = rand(0, 100);
$b = rand(0, 100);
$c = rand(0, 100);
$vidurkisX = ($a+$b+$c)/3;
$vidurkisY = 0;
$tfA = false;
$tfB = false;
$tfC = false;

if($a >= 10 && $a <= 90){
    $tfA = true;
}
if($b >= 10 && $b <= 90){
    $tfB = true;
}
if($c >= 10 && $c <= 90){
    $tfC = true;
}
if ($tfA){
    $vidurkisY = $a;
}
if ($tfB){
    $vidurkisY = $b;
}
if ($tfC){
    $vidurkisY = $c;
}
if ($tfA && $tfB){
    $vidurkisY = ($a + $b) / 2;
}
if ($tfA && $tfC){
    $vidurkisY = ($a + $c) / 2;
}
if ($tfC && $tfB){
    $vidurkisY = ($c + $b) / 2;
}
if ($tfA && $tfB && $tfC){
    $vidurkisY = ($a + $b + $c) / 3;
}
$vidurkisX = round($vidurkisX, 2);
$vidurkisY = round($vidurkisY, 2);
echo "vidurkis X:$vidurkisX , vidurkis Y: $vidurkisY";
echo "<br> a:$a, b:$b, c:$c";