<!-- Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju nedarykite, o vietoj to padarykite, URL eilutėje ranka įvedus GET kintamąjį color su RGB spalvos kodu (pvz color=ff1234) puslapio fono spalva pasidarytų tokios spalvos. -->

<!-- Perdarykite 2 uždavinį taip, kad spalvą būtų galimą įrašyti į laukelį ir ją išsiųsti mygtuku GET metodu formoje. -->


<?php
$color = "green";
if(isset($_GET["color"])){
    header("location:./7_1ng.php");
    die;
    $color = $_GET["color"];
}
?>

<!DOCTYPE html>
<html lang="en">

<style>
    .bg-color {
        background-color: #<?= $color ?>;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="bg-color">
    <a href="./7_2ng.php">empty</a>
    <form action="" method="get">
        <input type="text" name="color">
        <button type="submit">spalvink</button>
    </form>
</body>
</html>