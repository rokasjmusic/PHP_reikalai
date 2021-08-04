<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <h1>Cia HTML<h1>

    <script>
        console.log("cia js");
    </script>

<?php

$name = "Vardas";
$surname = "Pavarde";

echo "<h1>" . $name . " " . $surname . "</h1><br>";

echo "labas<br>";

$sk1 = 7;
$sk2 = 12;
echo $name . ($sk1 + $sk2) . "<br>";
$rnd = rand(1, 3);
echo $rnd;

$rand = rand(0, 10);

$color = "yellow";
if($rand > 5){
    $color = "green";
}
if($rand < 5){
    $color = "red";
}

echo "<h1>" . $rand . "</h1>";

$vardas = "Rokas";
$pavarde = "Jackunas";
$skc = 5;

echo "as esu " . $vardas . " " . $pavarde . " " . "ir as moku " . $skc . " kalbas";


?>
<h1> <?php echo $name ?> </h1>
<h1> <?= $name ?> </h1>


    </body>
</html>

