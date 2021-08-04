<?php

echo "septinta uzduotis"."<br>";
//Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni. 

for ($i = 0; $i < 3; $i++) {
    $sk = rand (-10, 10);
    if ($sk < 0) {
        echo "<br>ch1 style=\"color:green;\">{$sk}</h1>";
    }
    if ($sk == 0) {
        echo "<br>ch1 style=\"color:red;\">{$sk}</h1>";
    }
    if ($sk > 0) {
        echo "<br>ch1 style=\"color:blue;\">{$sk}</h1>";
    }
}
// ????????????????????????? cia nusirasiau, bet kazkas netaip
echo "<br>";
echo "<br>";
//-----------------------------------------------------

echo "astunta uzduotis"."<br>";
// Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000.


$kaina = rand (5, 3000);
echo "zvakiu kiekis yra: " . $kaina. "<br>";

if ($kaina <= 1000){
    echo "Kaina yra: " . $kaina;
}

if ($kaina > 1000 && $kaina < 2000) {
    $kaina = $kaina * 0.97;
    echo "kaina su 3proc nuolaida: " . $kaina;
}

if ($kaina > 2000) {
    $kaina = $kaina * 0.96;
    echo "kaina su 4proc nuolaida: " . $kaina;
}

echo "<br>";
echo "<br>";
//-----------------------------------------------------

echo "devinta uzduotis"."<br>";
// Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus.


$rand1 = rand (0, 100);
$rand2 = rand (0, 100);
$rand3 = rand (0, 100);
echo "Random kintamuju reiksmes" . $rand1 . " " . $rand2 . " " . $rand3 . "<br>";

$vid = ($rand1 + $rand2 + $rand3) / 3;
echo "3-ju kintamuju vidurkis: " . round($vid, 0) . "<br>";

$vidbe = 0;
$count = 0;
if($rand1>10 && $rand1<90){
    $vidbe += $rand1;
    $count++;
}
if($rand2>10 && $rand2<90){
    $vidbe += $rand2;
    $count++;
}
if($rand3>10 && $rand2<90){
    $vidbe += $rand3;
    $count++;
}

$vidbe = $vidbe / $count;
echo "Apribotu reiksmiu vidurkis: " . round($vidbe, 0);

echo "<br>";
echo "<br>";
//-----------------------------------------------------

echo "desimta uzduotis"."<br>";
// Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko. Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.

echo "07 22d paskaitos irase ties 2:05 yra sprendimo pavyzdys";
// panaudojamas substringas
echo "<br>";
echo "<br>";
//-----------------------------------------------------

echo "vienuoliktas uzduotis"."<br>";
// Naudokite funkcija rand(). Sugeneruokite 6 kintamuosius su atsitiktinem reikšmėm nuo 1000 iki 9999. Atspausdinkite reikšmes viename strige, išrūšiuotas nuo didžiausios iki mažiausios, atskirtas tarpais. Naudoti ciklų ir masyvų NEGALIMA.
echo "07 22d paskaitos irase ties 1:51:50 yra pavyzdys";
?>