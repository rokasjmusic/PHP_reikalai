<?php
echo "KETVIRTAS BLOKAS"."<br>";
echo "Pirma uzduotis"."<br>";
//Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.

$arr = [];

for ($i = 0; $i < 30; $i++) {
    $arr[] = rand(5, 25);
}
    print_r($arr);

echo "<br>";
echo "<hr>";
//----------------------------------------------------------

echo "Antra uzduotis" . "<br>";
//Naudodamiesi 1 uždavinio masyvu:
//a) Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;
//c) Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;
//b) Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus jeigu yra keli;

$count = 0;
$even = 0;

for ($i=0; $i < count($arr); $i++) { 
    if ($arr[$i] > 10) {
        $count++;
    }
}

for ($i=0; $i < count($arr) ; $i++) { 
        if ($i % 2 == 0){
        $even += $arr[$i];
    }
}

echo "a) Didesniu reiksmiu uz 10 masyve yra: " . $count . "<br>";
echo "c) Lyginiu indeksu reiksmiu suma yra: " . $even . "<br>";


$max = max($arr);
$iArr = [];

for ($i=0; $i < count($arr); $i++) { 
   if ($arr[$i] == $max){
       $iArr[] = $i; 
   }
}

echo "b) Didziausia masyvo reiksme yra: " . max($arr) . "<br>";
echo "Didziausios masyvo reiksmes indeksas(-ai) yra: " . print_r($iArr) . "<br>";

echo "<br>";
//d)Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;

// $arr1 = [$arr - $i];
//nesuprantu


//e)Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;

for ($i=0; $i < 10; $i++) { 
    $arr[] = rand(5, 25);
}

print_r($arr) . "<br>";
echo "<br>" . "<br>";

//f)Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;


$arrEven = [];
$arrOdd = [];

for ($i=0; $i < count($arr) ; $i++) { 
    if ($i % 2 == 0){
    $arrOdd[$i] = $i;
    }
}

print_r($arrOdd);



echo "<br>";
echo "<hr>";
//----------------------------------------------------------





?>