<?php

// $oly = [];


function init(){
    session_start();
    if(!isset($_SESSION['oly'])) {
        $_SESSION['oly'] = [];
        $_SESSION['id'] = 1;
    }
}

print_r($oly);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</head>
<body>
    
    <form action="" method="GET">

        <div class="form-row">
            <div class="col">
                <input type="text" class="form-control" placeholder="Name">
            </div>

            <div class="col">
                <input type="text" class="form-control" placeholder="Surname">
            </div>

            <div class="col">
                <input type="text" class="form-control" placeholder="Sport">
            </div>

            <div class="col">
                <input type="text" class="form-control" placeholder="Country">
            </div>
        </div>
        

        <button class = "btn btn-danger" type = "submit">Prideti</button>

    </form>

</body>
</html>