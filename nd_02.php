<?php
/* 2. Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi
funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4.
Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį
suapvalinę iki 2 skaičių po kablelio. */

echo 'work...ing...'.'<BR>';
$randA = 0;
$randB = 0;
$res = 0;
while($randA == 0){
    $randA = rand(0,4);
}
while($randB == 0){
    $randB = rand(0,4);
}
if ($randA < $randB){
    $res =$randB / $randA;
} else {
    $res =$randA / $randB;
}
echo (round($res, 2));