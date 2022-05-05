<?php
/*7. Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10.
Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni.*/
$r1 = rand(-10, 10);
$r2 = rand(-10, 10);
$r3 = rand(-10, 10); 
if($r1 < 0){
    echo "<div style = 'color: green; font-size: 40px'>$r1</div>";
}
if($r2 < 0){
    echo "<div style = 'color: green; font-size: 40px'>$r2</div>";
}
if($r3 < 0){
    echo "<div style = 'color: green; font-size: 40px'>$r3</div>";
}
if($r1 == 0){
    echo "<div style = 'color: red; font-size: 40px'>$r1</div>";
}
if($r2 == 0){
    echo "<div style = 'color: red; font-size: 40px'>$r2</div>";
}
if($r3 == 0){
    echo "<div style = 'color: red; font-size: 40px'>$r3</div>";
}
if($r1 > 0){
    echo "<div style = 'color: blue; font-size: 40px'>$r1</div>";
}
if($r2 > 0){
    echo "<div style = 'color: blue; font-size: 40px'>$r2</div>";
}
if($r3 > 0){
    echo "<div style = 'color: blue; font-size: 40px'>$r3</div>";
}




