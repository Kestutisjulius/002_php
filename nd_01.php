
<?php
/* 1. Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo
metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal
gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir
pavardės kintamuosius atspausdintų tokį sakinį :
"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)". */
$vardas = 'Kestutis';
$pavarde = 'Skrebe';
$gimMetai = date(1977);
$thisYear = date("Y");
$dateDif = date_diff($thisYear-$gimMetai);
$sentence = "Aš esu $vardas $pavarde. Man yra $dateDif metai(ų)";
