<?php

// 1.sukurkite masyvą. užpildykite 30čia atsitiktinių skaičių nuo 20 iki 40.
//1b. atspausdinkite masyvo skaičius vienoje eilutėje atsirtus tarpais.

$arr = [];
$arr ['vardas'] = "Kestas";
$arr[0] = "Jonas";
$arr[20]= "Gabriele";
$arr["daina"] = "3m";
$arr[] = "Petras";
print_r($arr);

echo "<hr>";

$arr1 = [];
for($i = 0; $i < 30; $i++){
    $arr1[$i] = rand(20, 40);
}

echo "<hr>";

print_r($arr1);

for($i = 0; $i < 30; $i++){
    echo $arr1[$i] . " ";
}

// 2. sukurkite masyvą su 10 skaičių nuo 0 iki 10

$arr2 = [];
for($i = 0; $i < 10; $i++){
    $arr2[] = $i;
}

print_r($arr2);

echo "<hr>";

//2b. sukurkite kitą masyvą su 10 skaičių nuo 10 iki 20

$arr3 = [];
for($i = 10; $i < 20; $i++){
    $arr[] = $i;
}

print_r($arr3);
echo "<hr>";

//2c. pasinaudoję ciklu atspausdinkite 100 atsitiktinių skaičių iš 2b masyvo. t.y kiekvienoje ciklo iteracijoje imkite atsitiktinį 2b masyvo skaičių.

$arr3[0];
count($arr3);

$arr3[ count ($arr3) -1 ]; //paklausiu kokio ilgio masyvas ir atimu viena nes prasislenka index'as

rand(0, count($arr3) -1 );

$minVal = 0;
$maxVal = count($arr3) -1;


for($i = 0; $i < 100; $i++){
    $randomPosition = rand($minVal, $maxVal);
    $rndNum - $arr[$randomPosition];
    echo $rndNum . " ";
}

for($i = 0; $i < 100; $i++){
    echo $arr3[ rand(0, count($arr3)-1)] . " ";
}

echo "<hr>";

// 3. sukurkite dvimatį masyvą. pirmas matmuo - 10 elementų. antras 10 elementų.


$arr4 = [[]];

for($i = 0; $i < 10; $i++){
    $arrMin = [];
    for($a = 0; $a < 10; $a++){
        $arrMin[] = rand(0,9);
    }
    $arr4[] = $arrMin;
}

echo "<pre>";
print_r($arr4);
echo "</pre>";
echo "<hr>";

$arr5 = [];
for($i = 0; $i < 10; $i++){
    for($a = 0; $a < 10; $a++){
        $arr5[$i][] = $a;
    }
}

print_r($arr5);
echo "<hr>";

//3b. atspausdinkite duomenis. (gausis skaičių stačiakampis).

for ($i = 0; $i < count($arr5); $i++) {
    for ($a = 0; $a < count($arr5[$i]); $a++){
        echo $arr5[$i][$a] . " ";
    }
    echo "<br>";
}

echo "<hr>";

//3c. padarykite tą patį, ką  darėte 3b, tik spausdinkite tuos skaičius pakeltus kvadratu

for ($i = 0; $i < count($arr5); $i++) {
    for ($a = 0; $a < count($arr5[$i]); $a++){
        // echo $arr5[$i][$a] * $arr5[$i][$a] . " ";
        echo pow($arr5[$i][$a],2) . " ";
    }
    echo "<br>";
}

echo "<hr>";


//4. sukurkite masyvą pavadinimu $gyvunas; suteikite jam reikšmes key + value principu.
// raktažodžiai (key): "species","age", "name", "description". Tai bus vienas objektas,
// vienas gyvūnas, su rūšimi, amžiumi, vardu ir aprašu.

$gyvunas = [];
$gyvunas['species'] = "kengaroo";
$gyvunas['age'] = "3";
$gyvunas['name'] = "Skippy";
$gyvunas['description'] = "likes to jump a lot";

print_r($gyvunas);

echo "<hr>";

//5. sukurkite tris masyvus:
// $names = ["vardas1","vardas2","vardas3"....] vardus sugalvokite patys. jų reikia 10.
// $species = ["kengūra","gazelė","liūtas"....] gyvūnus sugalvokite patys. jų reikia 10.
// $descriptions = ["gražus bet piktas","pastoviai miega","šauniai maskuojasi"....] 
//         aprašus sugalvokite patys. jų reikia 10.


$names = ["vardas1","vardas2","vardas3"];
$species = ["kengūra","gazelė","liūtas"];
$descriptions = ["gražus bet piktas","pastoviai miega","šauniai maskuojasi"];

//5b. sukurkite dvimatį masyvą iš 20 elementų.  didžiąjame masyve bus sudėti mažesni masyvai,

$zoo = [];

for ($i=0; $i < 20; $i++) { 
    $zoo[$i]["name"] = $name[ rand(0, count_chars($names)-1) ];
    $zoo[$i]["species"] = $species[ rand(0, count($species)-1) ];
    $zoo[$i]["age"] = $age[ rand(0, round($age)-1) ];
    $zoo[$i]["description"] = $description[ rand(0, count($description)-1) ];
}

for ($i=0; $i < count($zoo) ; $i++) { 
    echo $zoo[$i]["name"] . " " . $zoo[$i]["species"] . " " . $zoo[$i]["age"] . " " . $zoo[$i]["description"] . "<br>";
}

echo "<hr>";

// 6. padarykite daugybos lentelę nuo 1 iki 9.

for ($i=0; $i < 10 ; $i++) { 
    for ($a=0; $a < 10; $a++) { 
        echo $i * $a . " ";
    }
    echo "<br>";
}

echo "<hr>";

// 1. sukurkite funkciją kuri išspausdina kokį nors tekstą.

sayHi();
function sayHi(){
    echo "hi" . "<hr>";
}

sayHiYou("Petras");

function sayHiYou($name){
    echo "hi " . $name . "<hr>";
}

?>