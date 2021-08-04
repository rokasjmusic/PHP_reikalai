<?php

echo "Sestas uzdaviniu paketas" . "<br>";

echo "pirma uzduotis"."<br>";

fnkc();
$tekstas = "kazka irasau"

function fnkc(){
    echo "<h1>{$tekstas}</h1>" . "<br>";
}

echo "<br>";
echo "<hr>";
//-----------------------------------------------------

echo "antra uzduotis"."<br>";

$rnd = rand(1, 6);

function fnkc2($tekstas, $rnd){
    echo "<h1>{$tekstas}</h1>" . $rnd . "<br>";
}

echo "<br>";
echo "<hr>";
//---



?>