<?php

//sprendziu antra karta
//pirma uzduotis

$arr = [];
for ($i=0; $i < 30; $i++) { 
    $arr[] = rand(20, 40);
    echo $arr[$i] . " ";
}

echo "<hr>";


//----------------------------------------------------------------
//antra uzduotis

// sukurkite masyvą su 10 skaičių nuo 0 iki 9
for ($i=0; $i < 10; $i++) { 
    $arr2[] = rand(0, 9);
    echo $arr2[$i] . " ";
}

echo "<br>";

// 2b sukurkite kitą masyvą su 10 skaičių nuo 10 iki 19
for ($i=0; $i < 10; $i++) { 
    $arr2b[] = rand(10, 19);
    echo $arr2b[$i] . " ";
}

echo "<br>";

// pasinaudoję ciklu atspausdinkite 100 atsitiktinių skaičių iš 2b masyvo

// $arr2c = [];

// for ($i=0; $i < 100; $i++) { 
//     echo $arr2c[ rand($arr2b[0], count($arr2b)-1) ];
// }

// nezinau kaip paimti elementus is 2b ir juos prasukti, kad atvaizduotu 100 kartu

echo "<hr>";


//----------------------------------------------------------------
//trecia uzduotis

// 3b sukurkite dvimatį masyvą. pirmas matmuo - 10 elementų. antras 10 elementų. reikšmės - skaičiai nuo 0 iki 9.

$arr3 = [[]]; // ok, masyvas masyve. Bet kaip priskiriamos reiksmes vidiniam masyvui?

for ($i=0; $i < 10; $i++) {
    $arr4[] = rand(0, 10); 
    for ($a=0; $a < 10 ; $a++){
        $arr4[] = rand(0, 10);
    }
    $arr3[] = $arr4; //kodel reikia taip rasyti???
}

print_r($arr3); //realiai sukuriau 10 masyvu masyve. Lyg ir ne to praso...
echo "<hr>";

//padarykite tą patį, ką  darėte 3b, tik spausdinkite tuos skaičius pakeltus kvadratu

for ($i=0; $i < 10; $i++) {
    $arr4[] = rand(0, 10); 
    for ($a=0; $a < 10 ; $a++){
        $arr4[] = rand(0, 10);
    }
    $arr3[] = pow($arr4, 2); //pow panasu nesuveike
}

print_r($arr3);
echo "<hr>";


?>