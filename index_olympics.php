<?php

// print_r($_POST);

session_start();

if( !isset($_SESSION['olympics']) ){
    $_SESSION['olympics'] = [];
    $_SESSION['id'] = 1;
}

if($_SERVER[ 'REQUEST_METHOD' ] == "GET" && isset($_GET['id'])){
    foreach ($_SESSION['olympics'] as $athlete) { 
        if($athlete['id'] == $_GET['id']){
            break;
        }
    }
}


if($_SERVER[ 'REQUEST_METHOD' ] == "POST"){
    $athlete["id"] = $_SESSION["id"];
    $athlete["name"] = $_POST["name"];
    $athlete["surname"] = $_POST["surname"];
    $athlete["sport"] = $_POST["sport"];
    $athlete["country"] = $_POST["country"];
    $athlete["gender"] = $_POST["gender"];
    $athlete["victories"] = $_POST["victories"]; 
    
    $_SESSION["id"]++;

    $_SESSION['olympics'][] = $athlete;
    header("location:./index_olympics.php");
    die;
}

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

    <form action="" method="post">
<!-- jeigu isset athlete, sukuriam hidden input, kuris perduos to įrašo id -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="name" value="<?= (isset($athlete))? $athlete['name'] : "" ?>">
            </div>
         </div>

         <div class="form-group row">
            <label class="col-sm-2 col-form-label">Surname</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="surname" value="<?= (isset($athlete))? $athlete['surname'] : "" ?>">
            </div>
         </div>

         <div class="form-group row">
            <label class="col-sm-2 col-form-label">Sport</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="sport" value="<?= (isset($athlete))? $athlete['sport'] : "" ?>">
            </div>
         </div>

         <div class="form-group row">
            <label class="col-sm-2 col-form-label">Country</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="country" value="<?= (isset($athlete))? $athlete['country'] : "" ?>">
            </div>
         </div>

         <div class="form-group row">
            <label class="col-sm-2 col-form-label">Gender</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="gender" value="<?= (isset($athlete))? $athlete['gender'] : "" ?>">
            </div>
         </div>

         <div class="form-group row">
            <label class="col-sm-2 col-form-label">Victories</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="victories" value="<?= (isset($athlete))? $athlete['victories'] : "" ?>">
            </div>
         </div>

        <!-- <button class = "btn btn-primary" type="submit">Add Data</button> -->
        
        <?php if(!isset($athlete)){
            echo '<button class="btn btn-primary" type="submit">Pridėti atleta</button>';
        }else{
            echo '
            <input type="hidden" name="id" value="'. $athlete['id'].' ">
            <button class="btn btn-info" type="submit">Atnaujinti atleta</button>';
    } ?>


    </form>

    <table class="table">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Sport</th>
            <th>Country</th>
            <th>Gender</th>
            <th>Victories</th>
            <th>edit</th>
            <th>delete</th>
        </tr>

        <?php foreach ($_SESSION["olympics"] as $athlete) { ?>
            <tr>
                <td> <?= $athlete["id"] ?> </td>
                <td> <?= $athlete["name"] ?> </td>
                <td> <?= $athlete["surname"] ?> </td>
                <td> <?= $athlete["sport"] ?> </td>
                <td> <?= $athlete["country"] ?> </td>
                <td> <?= $athlete["gender"] ?> </td>
                <td> <?= $athlete["victories"] ?> </td>
                <td>
                    <a class="btn btn-success" href="?id=<?=$athlete['id']?>">edit</a>
                </td>
                <td>
                    <form>
                        <input type="hidden" name = "id" value = "<= $athlete['id']?>"
                        <input action = "" method = "POST">
                        <button class = "btn btn-danger" type="submit">delete</button>
                    </form>
                </td>
            </tr>
        <?php } ?>

    </table>


</body>
</html>