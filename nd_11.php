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

$minA = 0;
$minB = 0;
$minC = 0;
$minD = 0;
$minE = 0;
$minF = 0;

if($a < $b && $a < $c && $a < $d && $a < $e && $a < $f ){
    $minA = $a;
}
if($b < $c && $b < $d && $b < $e && $b < $f && $b < $a ){
    $minA = $b;
}
if($c < $d && $c < $e && $c < $f && $c < $a && $c < $b ){
    $minA = $c;
}
if($d < $e && $d < $f && $d < $a && $d < $b && $d < $c ){
    $minA = $d;
}
if($e < $f && $e < $a && $e < $b && $e < $c && $e < $d ){
    $minA = $e;
}
if($f < $a && $f < $b && $f < $c && $f < $d && $f < $e ){
    $minA = $f;
}

if($minA == $a ) {
    if($b < $c && $b < $d && $b < $e && $b < $f ){
        $minB = $b;
        if($c < $d && $c < $e && $c < $f){
            $minC = $c;
            if($d < $e && $d < $f){
                $minD = $d;
                if($e < $f){
                    $minE = $e;
                } else { $minF = $f;}
            }
        }
    }
    if($c < $d && $c < $e && $c < $f && $c < $b ){
        $minB = $c;
        if($d < $e && $d < $f && $d < $b){
            $minC = $d;
            if($e < $f && $e < $b){
                $minD = $e;
                if($f < $b){
                    $minE = $f;
                } else { $minF = $b;}
            }
        }
    }
    if($d < $e && $d < $f && $d < $b && $d < $c ){
        $minB = $d;
        if($e < $f && $e < $b && $e < $c){
            $minC = $e;
            if($f < $b && $f < $c){
                $minD = $f;
                if($b < $c){
                    $minE = $b;
                } else { $minF = $c;}
            }
        }
    }
    if($e < $f && $e < $b && $e < $c && $e < $d ){
        $minB = $e;
        if($f < $b && $f < $c && $f < $d){
            $minC = $f;
            if($b < $c && $b < $d){
                $minD = $b;
                if($c < $d){
                    $minE = $c;
                } else { $minF = $d;}
            }
        }
    }
    if($f < $b && $f < $c && $f < $d && $f < $e ){
        $minB = $f;
        if($b < $c && $b < $d && $b < $e){
            $minC = $b;
            if($c < $d && $c < $e){
                $minD = $c;
                if($d < $e){
                    $minE = $d;
                } else { $minF = $e;}
            }
        }
    }
}
/**1---------------->*/
if($minA == $b ) {
    if($a < $c && $a < $d && $a < $e && $a < $f ){
        $minB = $a;
        if($c < $d && $c < $e && $c < $f){
            $minC = $c;
            if($d < $e && $d < $f ){
                $minD = $d;
                if($e < $f ){
                    $minE = $e;
                } else { $minF = $f;}
            }
        }
    }
    if($c < $d && $c < $e && $c < $f && $c < $a){
        $minB = $c;
        if($d < $e && $d < $f && $d < $a ){
            $minC = $d;
            if($e < $f && $e < $a ){
                $minD = $e;
                if($f < $a){
                    $minE = $f;
                } else { $minF = $a;}
            }
        }
    }
    if($d < $e && $d < $f && $d < $a && $d < $c ){
        $minB = $d;
        if($e < $f && $e < $a && $e < $c){
            $minC = $e;
            if($f < $a && $f < $c){
                $minD = $f;
                if($a < $c){
                    $minE = $a;
                } else { $minF = $c;}
            }
        }
    }
    if($e < $f && $e < $a && $e < $c && $e < $d ){
        $minB = $e;
        if($f < $a && $f < $c && $f < $d){
            $minC = $f;
            if($a < $c && $a < $d){
                $minD = $a;
                if($c < $d){
                    $minE = $c;
                } else { $minF = $d;}
            }
        }
    }
    if($f < $a && $f < $c && $f < $d && $f < $e ){
        $minB = $f;
        if($a < $c && $a < $d && $a < $e){
            $minC = $a;
            if($c < $d && $c < $e){
                $minD = $c;
                if($d < $e){
                    $minE = $d;
                } else { $minF = $e;}
            }
        }
    }
}
/**2---------------->*/
if($minA == $c ) {
    if($a < $b && $a < $d && $a < $e && $a < $f  ){
        $minB = $a;
        if($b < $d && $b < $e && $b < $f){
            $minC = $b;
            if($d < $e && $d < $f ){
                $minD = $d;
                if($e < $f){
                    $minE = $e;
                } else { $minF = $f;}
            }
        }
    }
    if($b < $d && $b < $e && $b < $f && $b < $a){
        $minB = $b;
        if($d < $e && $d < $f && $d < $a ){
            $minC = $d;
            if($e < $f && $e < $a ){
                $minD = $e;
                if($f < $a){
                    $minE = $f;
                } else { $minF = $a;}
            }
        }
    }
    if($d < $e && $d < $f && $d < $a && $d < $c ){
        $minB = $d;
        if($e < $f && $e < $a && $e < $c){
            $minC = $e;
            if($f < $a && $f < $c){
                $minD = $f;
                if($a < $c){
                    $minE = $a;
                } else { $minF = $c;}
            }
        }
    }
    if($e < $f && $e < $a && $e < $c && $e < $d ){
        $minB = $e;
        if($f < $a && $f < $c && $f < $d){
            $minC = $f;
            if($a < $c && $a < $d){
                $minD = $a;
                if($c < $d){
                    $minE = $c;
                } else { $minF = $d;}
            }
        }
    }
    if($f < $a && $f < $c && $f < $d && $f < $e ){
        $minB = $f;
        if($a < $c && $a < $d && $a < $e){
            $minC = $a;
            if($c < $d && $c < $e){
                $minD = $c;
                if($d < $e){
                    $minE = $d;
                } else { $minF = $e;}
            }
        }
    }
}









echo "a:$a, b:$b, c:$c, d:$d, e:$e, f:$f <br>";
echo "a:$minA, b:$minB, c:$minC, d:$minD, e:$minE, f:$minF <br>";
