<?php
/*8. Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR
taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida.
Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų
atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite
rand() funkcija nuo 5 iki 3000.*/
$zvakiu = rand(5, 3000);
$price = 1;
$discount03 = 0.03;
$discount04 = 0.04;
$invoice = 0;
$uzZvake = 0;
if($zvakiu * $price > 1000  && $zvakiu * $price <= 2000) {
    $invoice = ($zvakiu * $price) - ($zvakiu * $price * $discount03);
    $uzZvake = $invoice / $zvakiu;
} elseif ($zvakiu * $price > 2000) {
    $invoice = ($zvakiu * $price) - ($zvakiu * $price * $discount04);
    $uzZvake = $invoice / $zvakiu;
} else {
    $invoice = ($zvakiu * $price);
    $uzZvake = $invoice / $zvakiu;
}
echo "perkama $zvakiu zvakiu, uz zvake po $uzZvake";