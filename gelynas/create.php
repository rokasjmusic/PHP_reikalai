<?php
include "config.php";

//if the submit button is clicked, we need to process the form
    if(isset($_POST['submit'])) {
        //get variables from the form
        $pavadinimas = $_POST['pavadinimas'];
        $kiekis = $_POST['kiekis'];

        //write sql query
        $sql = "INSERT INTO `users`(`pavadinimas`, `kiekis`) VALUES ('$pavadinimas', '$kiekis')";

        //execute the query

        $result = $conn->query($sql);

        if($result == TRUE){
            echo "New record created succesfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();

    }




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>Gelyno info ivedimo forma</h2>

<form action="" method="POST">
    <fieldset>
        <legend> Gelyno informacija:</legend>
        Pavadinimas:<br>
        <input type="text" name="pavadinimas">
        <br>
        Kiekis:<br>
        <input type="text" name="kiekis">
        <br>
        <!-- Gender:<br>
        <input type="radio" name="" value="Male">Male
        <input type="radio" name="gender" value="Female">Female
        <br><br> -->
        <input type="submit" name="submit" value="ivesti">
    </fieldset>
</form>

</body>
</html>

