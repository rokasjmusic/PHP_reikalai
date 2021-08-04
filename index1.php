<?php
//Pirmas uzdaviniu paketas//

echo "pirma uzduotis"."<br>";
// Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
// "Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".


$vardas = "Rokas";
$pavarde = "Jackunas";
$gmetai = "1991";
$dbmetai = "2020";

echo "As esu " . $vardas . " " . $pavarde . "." . " " . "Man yra " . ($dbmetai - $gmetai) . " metai/u.";

echo "<br>";
echo "<br>";
//-----------------------------------------------------

echo "antra uzduotis"."<br>";
// Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.


$rnd1 = rand (0, 4);
$rnd2 = rand (0, 4);

echo $rnd1 . "<br>";
echo $rnd2 . "<br>";

if ($rnd1 > $rnd2 && $rnd2 != 0) {
    echo(round($rnd1 / $rnd2 , 2));
}
else if ($rnd1 < $rnd2 && $rnd1 != 0) {
    echo(round($rnd2 / $rnd1 ,2));
}
else echo "dalyba is nulio negalima";
//matau problema, kad pvz 4 / 4 meta dalyba is 0 negalima. galima ihardcodinti atsakyma 1

echo "<br>";
echo "<br>";

echo "destytojo variantas su funcijomis min ir max:"."<br>"; 
if(min($rnd1, $rnd2)!=0){
   echo round( max($rnd1, $rnd2) / min($rnd1, $rnd2) ,2) . "<br>";
}else
    echo "dalyba is 0 negalima" . "<br>";

echo "<br>";  
//-----------------------------------------------------

echo "trecia uzduotis"."<br>";
// Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.

$sk1 = rand (0, 25);
$sk2 = rand (0, 25);
$sk3 = rand (0, 25);

echo "random skaiciai " . $sk1 . " " . $sk2 . " " . $sk3 . "<br>";

if ($sk1 > $sk2 && $sk1 < $sk3 || $sk1 < $sk2 && $sk1 > $sk3 ){
    echo "vidurine reiksme: " . $sk1 . "<br>";
}
else if ($sk2 < $sk1 && $sk2 > $sk3 || $sk2 > $sk1 && $sk2 < $sk3){
    echo "vidurine reiksme: " . $sk2 . "<br>";
}
else if ($sk3 < $sk1 && $sk3 > $sk2 || $sk3 > $sk2 && $sk3 > $sk1){
    echo "vidurine reiksme: " . $sk3 . "<br>";
}
else echo "vidurines reiksmes nera, skaiciai lygus";

echo "<br>";
echo "<br>";
//-----------------------------------------------------

echo "ketvirta uzduotis"."<br>";
// Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų. 


$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);
echo "random skaiciai: " . $a . " " . $b . " " . $c . "<br>";
if( ($a+$b>$c) && ($a+$c>$b) && ($b+$c>$a) ){
    echo "trikampi sudaryti galima";
}else {
    echo "trikampio sudaryti negalima";
}

echo "<br>";
echo "<br>";
//-----------------------------------------------------

echo "penkta uzduotis"."<br>";
// Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems 
// reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).


// $skc1 = rand (0, 2);
// $skc2 = rand (0, 2);
// $skc3 = rand (0, 2);
// $skc4 = rand (0, 2);

// echo $skc1 . " " . $skc2 . " " . $skc3 . " " . $skc4 . "<br>";

// if ($skc1 == 0 && $skc2 == 0 && $skc3 == 0 && $skc4 == 0){
//     echo "4 nuliai" . "<br>";
// }
// else if ($skc1 == 1 && $skc2 == 1 && $skc3 == 1 && $skc4 == 1){
//     echo "4 vienetai" . "<br>";
// }
// else if ($skc1 == 2 && $skc2 == 2 && $skc3 == 2 && $skc4 == 2){
//     echo "dvejetai vienetai" . "<br>";
// }

// else if ($skc1 == 0 && $skc2 == 0 && $skc3 == 0 && $skc4 == 1){
//     echo "3 nuliai ir vienetas" . "<br>";
// }
// else if ($skc1 == 0 && $skc2 == 0 && $skc3 == 1 && $skc4 == 0){
//     echo "3 nuliai ir vienetas" . "<br>";
// }
// else if ($skc1 == 0 && $skc2 == 1 && $skc3 == 0 && $skc4 == 0){
//     echo "3 nuliai ir vienetas" . "<br>";
// }
// else if ($skc1 == 1 && $skc2 == 0 && $skc3 == 0 && $skc4 == 0){
//     echo "3 nuliai ir vienetas" . "<br>";
// }
// else if ($skc1 == 0 && $skc2 == 0 && $skc3 == 0 && $skc4 == 2){
//     echo "3 nuliai ir dvejetas" . "<br>";
// }
// else if ($skc1 == 0 && $skc2 == 0 && $skc3 == 2 && $skc4 == 0){
//     echo "3 nuliai ir dvejetas" . "<br>";
// }
// else if ($skc1 == 0 && $skc2 == 2 && $skc3 == 0 && $skc4 == 0){
//     echo "3 nuliai ir dvejetas" . "<br>";
// }
// else if ($skc1 == 2 && $skc2 == 0 && $skc3 == 0 && $skc4 == 0){
//     echo "3 nuliai ir dvejetas" . "<br>";
// }

// else if ($skc1 == 0 && $skc2 == 0 && $skc3 == 1 && $skc4 == 1){
//     echo "2  nuliai, 2 vienetai" . "<br>";
// }
// else if ($skc1 == 0 && $skc2 == 1 && $skc3 == 1 && $skc4 == 0){
//     echo "2  nuliai, 2 vienetai" . "<br>";
// }
// else if ($skc1 == 1 && $skc2 == 1 && $skc3 == 0 && $skc4 == 0){
//     echo "2  nuliai, 2 vienetai" . "<br>";
// }
// else if ($skc1 == 1 && $skc2 == 0 && $skc3 == 1 && $skc4 == 0){
//     echo "2  nuliai, 2 vienetai" . "<br>";
// }
// else if ($skc1 == 0 && $skc2 == 1 && $skc3 == 0 && $skc4 == 1){
//     echo "2  nuliai, 2 vienetai" . "<br>";
// }
// else if ($skc1 == 1 && $skc2 == 0 && $skc3 == 0 && $skc4 == 1){
//     echo "2  nuliai, 2 vienetai" . "<br>";
// }

// else if ($skc1 == 0 && $skc2 == 0 && $skc3 == 2 && $skc4 == 2){
//     echo "2  nuliai, 2 dvejetai" . "<br>";
// }
// else if ($skc1 == 0 && $skc2 == 2 && $skc3 == 2 && $skc4 == 0){
//     echo "2  nuliai, 2 dvejetai" . "<br>";
// }
// else if ($skc1 == 2 && $skc2 == 2 && $skc3 == 0 && $skc4 == 0){
//     echo "2  nuliai, 2 dvejetai" . "<br>";
// }
// else if ($skc1 == 2 && $skc2 == 0 && $skc3 == 2 && $skc4 == 0){
//     echo "2  nuliai, 2 dvejetai" . "<br>";
// }
// else if ($skc1 == 0 && $skc2 == 2 && $skc3 == 0 && $skc4 == 2){
//     echo "2  nuliai, 2 dvejetai" . "<br>";
// }
// else if ($skc1 == 2 && $skc2 == 0 && $skc3 == 0 && $skc4 == 2){
//     echo "2  nuliai, 2 dvejetai" . "<br>";
// }

// else echo "tu rimtai?.." . "<br>";

echo "destytojo sprendimas" . "<br>";

$e1 = rand(0, 2);
$e2 = rand(0, 2);
$e3 = rand(0, 2);
$e4 = rand(0, 2);

$er0 = 0;
$er1 = 0;
$er2 = 0;

if($e1 == 0){
    $er0++;
}

if($e1 == 1){
    $er1++;
}

if($e2 == 2){
    $er2++;
}
// --
if($e2 == 0){
    $er0++;
}

if($e2 == 1){
    $er1++;
}

if($e2 == 2){
    $er2++;
}
// --
if($e3 == 0){
    $er0++;
}

if($e3 == 1){
    $er1++;
}

if($e3 == 2){
    $er2++;
}
// --
if($e4 == 0){
    $er0++;
}

if($e4 == 1){
    $er1++;
}

if($e4 == 2){
    $er2++;
}

echo "nuliai: " . $er0 . " " . "vienetai: " . $er1 . " " . "dvejetai: " . $er2;

// kazkas cia neteisingai - kartais duoda tik 3 reiksmes!!!//

echo "<br>";
echo "<br>";
//-----------------------------------------------------

echo "sesta uzduotis"."<br>";
// Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3>

$rndskaic = rand (0, 6);
// echo $rndskaic . "<br>";
echo "Rezultatas: <h{$rndskaic}> ($rndskaic) <h{$rndskaic}>" . "<br>";

echo "<br>";
//-----------------------------------------------------


?>