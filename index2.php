<?php
//Antras uzdaviniu paketas//

echo "pirma uzduotis"."<br>";
// Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą.


$name = "Angelina";
$surname = "Jolie";

if(strlen($name) < strlen($surname)){
    echo $name."<br>";
}else {
    echo $surname;
}

echo "<br>";
echo "<hr>";
//-----------------------------------------------------

echo "antra uzduotis"."<br>";
// Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.

echo strtoupper($name)."<br>";

echo strtolower($surname)."<br>";

echo "<br>";
echo "<hr>";
//-----------------------------------------------------

echo "trecia uzduotis"."<br>";
// Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.

//galima atlikti ir su substringais//

echo $name[0].$surname[0]."<br>";

echo "<br>";
echo "<hr>";
//-----------------------------------------------------

echo "ketvirta uzduotis"."<br>";
// Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.

// echo $name[0].$name[1].$name[2].$surname[1]."<br>"; ???

echo substr($name,-3).substr($surname,-3)."<br>";

echo "<br>";
echo "<hr>";
//-----------------------------------------------------

echo "penkta uzduotis"."<br>";
// Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti.

$anAmerican = "An American in Paris";
$anAmerican = str_replace("a","*",$anAmerican);
$anAmerican = str_replace("A","*",$anAmerican);
echo $anAmerican."<br>";

echo "<br>";
echo "<hr>";
//-----------------------------------------------------

echo "sesta uzduotis"."<br>";
// Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.

$anAmerican = "An American in Paris";
$count = substr_count($anAmerican,'a');
$count += substr_count($anAmerican,'A');
echo $count."<br>";

echo "<br>";
echo "<hr>";
//-----------------------------------------------------

echo "septinta uzduotis"."<br>";
// Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti. Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.

$anAmerican = "An American in Paris";
$anAmerican = str_replace("a","",$anAmerican);
$anAmerican = str_replace("e","",$anAmerican);
$anAmerican = str_replace("i","",$anAmerican);
$anAmerican = str_replace("A","",$anAmerican);
echo $anAmerican."<br>";

echo "<br>";
echo "<hr>";
//-----------------------------------------------------

echo "astuntanta uzduotis"."<br>";
// Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; Surasti ir atspausdinti epizodo numerį.

$text = "Star Wars: Episode".str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
echo $text."<br>";
echo substr($text,-14,1)."<br>";

echo "<br>";
echo "<hr>";
//-----------------------------------------------------

echo "devinta uzduotis"."<br>";
// Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.


$text ="Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$textAar = explode(' ',$text);
$count = 0;
for ($i=0; $i < count($textAar); $i++) {
    if( strlen($textAar[$i]) <= 5 )
    $count++;
}
echo $count."<br>";

echo "<br>";
echo "<hr>";
//-----------------------------------------------------

echo "desimta uzduotis"."<br>";
// Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.

$letters = ['a','b','c','d','e','f','g'];

echo $letters[ rand (0, count($letters)-1) ] . $letters[ rand (0, count($letters)-1) ] . $letters[ rand (0, count($letters)-1) ]."<br>";

echo "<br>";
echo "<hr>";
//-----------------------------------------------------

// echo "vienuolikta uzduotis"."<br>";
// Parašykite kodą, kuris generuotų atsitiktinį stringą su 10 atsitiktine tvarka išdėliotų žodžių, o žodžius generavimui imtų iš 9-me uždavinyje pateiktų dviejų stringų. Žodžiai neturi kartotis. (reikės masyvo)



?>