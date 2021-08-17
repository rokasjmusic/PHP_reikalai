<?php

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





?>