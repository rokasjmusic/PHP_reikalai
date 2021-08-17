<?php


// session_start();
// if( !isset( $_SESSION['cars'])  ){
// $_SESSION['cars'] = [];
// $_SESSION['id'] = 1;
// }

// function init(){
//     session_start();
//     if(!isset($_SESSION['cars'])) {
//         $_SESSION['cars'] = [];
//         $_SESSION['id'] = 1;
//     }
// }

if(!file_exists("./data.txt")){
    file_put_contents("./data.txt", "[]");
    file_put_contents("./id.txt", 0);
}

// if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['id'])){
//     foreach ($_SESSION['cars'] as $entry) {
//        if($entry['id'] == $_GET['id']){
//             $vehicle = $entry;
//             break;
//        }
//     }
// }


if($_SERVER['REQUEST_METHOD'] == "POST" && !isset($_POST['id'])){
    $data = getData();
    $vehicle['id'] = newId();
    $vehicle['brand'] = $_POST['brand'];
    $vehicle['model'] = $_POST['model'];
    $vehicle['color'] = $_POST['color'];
    $vehicle['mileage'] = $_POST['mileage'];
    $vehicle['fuel'] = $_POST['fuel'];


    // $_SESSION['id']++;
    
    $data[] = $vehicle;
    setData($data);
    // header("location:./");
    // die;
}

function getData(){
    return json_decode( file_get_contents('./data.txt', 1) );
}

function setData($arr){
    file_put_contents('./data.txt', json_encode($arr));
}

function newId() {
    $id = file_get_contents('./id.txt');
    $id++;
    file_put_contents('./id.txt', $id);
    return $id;
}

// if($_SERVER['REQUEST_METHOD'] == "POST" && !isset($_POST['brand'])){
//     foreach ($_SESSION['cars'] as $key => $vehycle) {
//         if($vehycle['id'] == $_POST['id']){
//          unset($_SESSION['cars'][$key]);
//          header("location:./");
//          die;
//         }  
//     }

//     header("location:./");
//     die;
//     }

// if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST[newId()])  ){
//    foreach ($_SESSION['cars'] as &$vehycle) {
//        if($vehycle['id'] == $_POST['id']){
//         $vehycle['brand'] = $_POST['brand'];
//         $vehycle['model'] = $_POST['model'];
//         $vehycle['color'] = $_POST['color'];
//         $vehycle['mileage'] = $_POST['mileage'];
//         $vehycle['fuel'] = $_POST['fuel'];
//         header("location:./");
//         die;
//        }  
//    }
// }




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <form class="form" action="" method="POST">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Brand</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="brand" value="<?= (isset($vehicle))? $vehicle['brand'] : "" ?>">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Model</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="model" value="<?= (isset($vehicle))? $vehicle['model'] : "" ?>">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Color</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="color" value="<?= (isset($vehicle))? $vehicle['color'] : "" ?>">
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Mileage</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="mileage" value="<?= (isset($vehicle))? $vehicle['mileage'] : "" ?>">
        </div>
        
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Fuel type</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="fuel" value="<?= (isset($vehicle))? $vehicle['fuel'] : "" ?>">
        </div>
            
        </div>
    <?php if(!isset($vehicle)){
            echo '<button class="btn btn-primary col-sm-2" type="submit">Add Car</button>';
    }else{
            echo '
            <input type="hidden" name="id" value="'. $vehicle['id'].' ">
            <button class="btn btn-info" type="submit">Update Car</button>';
    } ?>

    </form>

    <table class="table">
        <tr>
        <th>Id</th> 
        <th>Brand</th> 
        <th>Model</th> 
        <th>Color</th>
        <th>Mileage</th>
        <th>Fuel</th> 
        <th>edit</th> 
        <th>delete</th> 
        </tr>


        <?php foreach ($cars as $vehycle) {  ?>
            <tr>
            <td> <?= $vehycle[newId()]  ?> </td>
                <td> <?= $vehicle['brand']  ?> </td>
                <td> <?= $vehicle['model']  ?> </td>
                <td> <?= $vehicle['color']  ?> </td>
                <td> <?= $vehicle['mileage']  ?> </td>
                <td> <?= $vehicle['fuel']  ?> </td>
                <td><a class="btn btn-success" href="?id=<?= $vehicle['id']  ?>">edit</a></td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?=$vehicle['id']?>"  >
                        <button class="btn btn-danger" type="submit">delete</button>
</form>
            </td>
            </tr>
        <?php } ?>
    </table>

</body>
</html>