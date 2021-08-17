<!-- Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save. Viena nuoroda su failo vardu, o kita nuoroda su failo vardu ir GET duomenų  perdavimo metodu perduodamu kintamuoju color=1. Padaryti taip, kad paspaudus ant nuorodos su perduodamu kintamuoju fonas nusidažytų raudonai, o paspaudus ant nuorodos be perduodamo kintamojo, vėl pasidarytų juodas. -->

<!DOCTYPE html>
<html lang="en">

<?php
$color = "black";
if(isset($_GET['color'])){
    $color = "red";
}
?>

<style>
    .bg-color {
        background-color: <?= $color ?>;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="bg-color">

    <a href="./7_1ng.php">A</a>
    <a href="./7_1ng.php?color=1">B</a>

</body>
</html>