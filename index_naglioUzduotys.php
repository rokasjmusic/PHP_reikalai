<?php

// 1.sukurkite masyvą. užpildykite 30čia atsitiktinių skaičių nuo 20 iki 40.

//         1b. atspausdinkite masyvo skaičius vienoje eilutėje atsirtus tarpais.

$masyvas = [];

for ($i = 0; $i < 30; $i++){
    $masyvas = rand(20, 40);
    echo $masyvas . " ";
}

"<br>";
"<hr>";



// ----------------------------------------------------------------





//         2. sukurkite masyvą su 10 skaičių nuo 0 iki 10

$masyvas2 = [];

for ($i = 0; $i < 10; $i++){
    print_r($masyvas2);
}

"<br>";

//         2b. sukurkite kitą masyvą su 10 skaičių nuo 10 iki 20

$masyvas2b = [];

for ($i = 0; $i < 10; $i++){
    $masyvas2b = rand(10, 20);
    echo $masyvas2b . " ";
}


//         2c. pasinaudoję ciklu atspausdinkite 100 atsitiktinių skaičių iš 2b masyvo.
//         t.y kiekvienoje ciklo iteracijoje imkite atsitiktinį 2b masyvo skaičių.



"<br>";
"<hr>";


// ----------------------------------------------------------------






// 3. sukurkite dvimatį masyvą. pirmas matmuo - 10 elementų. antras 10 elementų.

//         reikšmės - skaičiai nuo 0 iki 9.

$dvimatis = [[]];

for ($i = 0; $i < 10; $i++){
    for ($i = 0; $i < 10; $i++){
        print_r($dvimatis);
    }
}

//         3b. atspausdinkite duomenis. (gausis skaičių stačiakampis).

//         3c. padarykite tą patį, ką  darėte 3b, tik spausdinkite tuos skaičius pakeltus kvadratu




"<br>";
"<hr>";

// ----------------------------------------------------------------



// 4. sukurkite masyvą pavadinimu $gyvunas; suteikite jam reikšmes key + value principu.
//         raktažodžiai (key): "species","age", "name", "description". Tai bus vienas objektas,
//         vienas gyvūnas, su rūšimi, amžiumi, vardu ir aprašu.



$gyvunas = ["species" => "arklys", "age" => "10", "name" => "Beris", "description" => "su dantim"];

print_r($gyvunas);



"<br>";
"<hr>";

// ----------------------------------------------------------------

// 5. sukurkite tris masyvus:
//         $names = ["vardas1","vardas2","vardas3"....] vardus sugalvokite patys. jų reikia 10.
//         $species = ["kengūra","gazelė","liūtas"....] gyvūnus sugalvokite patys. jų reikia 10.
//         $descriptions = ["gražus bet piktas","pastoviai miega","šauniai maskuojasi"....] 
//         aprašus sugalvokite patys. jų reikia 10.


$names = ["Jonas", "Petras", "Zigmas", "Rimas", "Romas", "Robertas", "Antanas", "Andrius", "Simas", "Vilius"];
$species = ["suo", "kate", "seskas", "ziurkenas", "zirafa", "liuc", "begemoc", "vilkas", "zasis", "antis"];
$description = ["rudas", "pilkas", "piktas", "nuolat miega", "greitas", "storas", "letokas", "tingus", "aktyvus", "kamufliazinis"];


//         5b. sukurkite dvimatį masyvą iš 20 elementų.  didžiąjame masyve bus sudėti mažesni masyvai,

$masyv = [[]];

//          iš eilės. maži masyvai bus tokie patys kaip 4. užduotyje. jų reikšmes užpildykite 5. 
//          masyvų reikšmėmis. t.y imate random vardą, ir priskiriate konstruojamam gyvūnui ir tt.
        
//         5c. atvaizduokite gyvūnus iš 5b masyvo. vienas gyvūnas - viena eilutė.




"<br>";
"<hr>";

// ----------------------------------------------------------------


// 6. padarykite daugybos lentelę nuo 1 iki 9.


//nusikopijavau is interneto. pasikeiciau reiksmes

for ($i = 1; $i < 10; $i++) {
    for ($j = 1; $j < 10; $j++) {
       if ($j == 1) {
         echo str_pad($i*$j, 2, " ");
       } else {
         echo str_pad($i*$j, 4, " ");
       }
    }
    echo "\n";
  }



"<br>";
"<hr>";
// ----------------------------------------------------------------

echo "FUNKCIJOS" . "<br>";

// 1. sukurkite funkciją kuri išspausdina kokį nors tekstą.

funkc();

function funkc() {
    echo "Koks nors tekstas" . "<br>";
}

//         1b. sukurkite funkciją kuri priima vieną parametrą ir išspausdina tekstas "labas" + tas paduotas kintamasis

funkc2("Kintamasis");

function funkc2($kint) {
    echo "labas " . $kint . "<br>";
}

//         1c. sukurkite funkciją kuri gražina skaičiaus PI pirmus 8 skaičius

// nusiziurejau nuo 08.03 paskaitos iraso

$pi = myPi();
echo myPi();

function myPi(){
    return 3.1415926;
}

"<br>";
"<hr>";

//         1d. sukurkite funkciją kuri gražina dviejų parametrų sąndaugą.

multiply();

function multiply($a = 1, $b = 2){
    echo $a * $b . "<br>";
}

//         1e. sukurkite funkciją kuri apskaičiuoja skritulio PLOTĄ. ši funkcija priima 1 parametrą bei naudoja 1c. funkciją savo viduje, kad gautų PI reikšmę.

plotas(10);
$r = 10;

function plotas($r){
    echo "Plotas yra " . $r * $pi . "<br>";
}

//aisku cia neteisingai




//         1f. sukurkite funkciją kuri apskaičiuoja skritulio ILGĮ. ši funkcija priima 1 parametrą
//         bei naudoja 1c. funkciją savo viduje, kad gautų PI reikšmę.
//         1g. sukurkite funkciją kuri: priima vieną parametrą. savyje iškviecia 1e ir 1f funkcijas
//         ir atspausdina:
//          apskritimo ilgis: (tai ka gražino funkcija 1f)
//          apskritimo plotas: (tai ka gražino funkcija 1g)









?>