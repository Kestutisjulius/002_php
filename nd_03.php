<?php
/* 3. Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi
funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25.
Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę. */
$rand1 = rand(0,25);
$rand2 = rand(0,25);
$rand3 = rand(0,25);
echo "I. $rand1 | II. $rand2 | III. $rand3 <br>";
if($rand1 < $rand2 && $rand2 < $rand3){
 echo "ats. - $rand2";
} elseif ($rand1 > $rand3 && $rand3 > $rand2) {
    echo "ats. - $rand3";
} else {
    echo "ats. - $rand1";
}
