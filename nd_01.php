
<?php
/* 1. Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo
metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal
gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir
pavardės kintamuosius atspausdintų tokį sakinį :
"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)". */
$vardas = 'Kestutis';
$pavarde = 'Skrebe';
$gimMetai = 1977;
$thisYear = 2022;

$dateDif = $thisYear - $gimMetai;
$sentence = "Aš esu $vardas $pavarde. Man yra $dateDif metai(ų)";
echo $sentence;
