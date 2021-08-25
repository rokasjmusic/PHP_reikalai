<?php
include "config.php";

//write query to get data from the table
$sql = "SELECT * FROM users_bonsai";

//execute the query
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<title>View page</title>
<!--to make it look good insert bootstrap library-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>
    <div class='container'>
        <h2>users</h2>
<table class='table'>
    <thead>
        <tr>
            <th>ID</th>
            <th>Pavadinimas</th>
            <th>Ugis</th>
            <th>Parduodama</th>
        </tr>
    </thead>
    <tbody>
        <?php
            if($result->num_rows > 0) {
                //output data of each row
                while($row = $result->fetch_assoc()) {
        ?>
                   
                    <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['pavadinimas']; ?></td>
                    <td><?php echo $row['ugis']; ?></td>
                    <td><?php echo $row['parduodama']; ?></td>
                    <!-- <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td> -->
                    </tr>
        <?php }
            }
        ?>

        
    </tbody>
</table>
    </div>


</body>
</html>