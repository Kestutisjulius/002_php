<?php
/*11. Naudokite funkcija rand(). Sugeneruokite 6 kintamuosius su
atsitiktinem reikšmėm nuo 1000 iki 9999. Atspausdinkite reikšmes
viename strige, išrūšiuotas nuo didžiausios iki mažiausios, atskirtas
tarpais. Naudoti ciklų ir masyvų NEGALIMA.*/
$a = rand(1000, 9999);
$b = rand(1000, 9999);
$c = rand(1000, 9999);
$d = rand(1000, 9999);
$e = rand(1000, 9999);
$f = rand(1000, 9999);

if($a < $b){
    echo "a:$a, b:$b, c:$c, d:$d, e:$e, f:$f <br>"; 
}elseif($a < $c){
    echo "b:$b, a:$a, c:$c, d:$d, e:$e, f:$f <br>";
}elseif($a < $d){

}     

echo "a:$a, b:$b, c:$c, d:$d, e:$e, f:$f <br>";
