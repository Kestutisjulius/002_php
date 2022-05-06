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





if($a < $b && $b < $c && $c < $d && $d < $e && $e < $f){
    echo "a:$a, b:$b, c:$c, d:$d, e:$e, f:$f <br>"; 
}elseif($b < $c && $c < $d && $d < $e && $e < $f && $f < $a){
    echo "b:$b, c:$c, d:$d, e:$e, f:$f, a:$a  <br>";
}elseif($c < $d && $d < $e && $e < $f && $f < $a && $a < $b){
    echo "c:$c, d:$d, e:$e, f:$f, a:$a, b:$b  <br>";
} elseif($d < $e && $e < $f && $f < $a && $a < $b && $b < $c){
    echo "d:$d, e:$e, f:$f, a:$a, b:$b, c:$c  <br>";
} elseif($e < $f && $f < $a && $a < $b && $b < $c && $c < $d){
    echo "e:$e, f:$f, a:$a, b:$b, c:$c, d:$d  <br>";
} elseif($f < $a && $a < $b && $b < $c && $c < $d && $d < $e){
    echo "f:$f, a:$a, b:$b, c:$c, d:$d, e:$e  <br>";
} elseif($f < $a && $a < $b && $b < $c && $c < $d && $d < $e){
    echo "f:$f, a:$a, b:$b, c:$c, d:$d, e:$e  <br>";
} elseif($b < $a && $a < $e && $e < $c && $c < $d && $d < $f){
    echo "b:$b, a:$a, e:$e, c:$c, d:$d, f:$f  <br>";
} elseif($d < $f && $f < $c && $c < $b && $b < $e && $e < $a){
    echo "d:$d, f:$f, c:$c, b:$b, e:$e, a:$a <br>";
} elseif($d < $f && $f < $c && $c < $b && $b < $e && $e < $a){
    echo "d:$d, f:$f, c:$c, b:$b, e:$e, a:$a <br>";
}     

echo "a:$a, b:$b, c:$c, d:$d, e:$e, f:$f <br>";
