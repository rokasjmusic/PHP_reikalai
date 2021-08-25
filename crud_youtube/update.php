<?php
include "config.php";

//if the form's update button is clicked we need to process the form
if(isset($_GET['update'])) {
    $first_name = $_POST['firstname'];
    $user_id = $_POST['user_id'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    //write the update query
    $sql = "UPDATE `users` SET `firstname`='$firstname',`lastname`='$lastname',`email`='$email',`password`='$password',`gender`='$gender' WHERE `id`='$user_id'";

    //execute the query
    $result = $conn->query($sql);

    if($result == TRUE) {
        echo "Record Updated successfully!";
    }else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

//if the 'id' variable is in the URL, we know that we need to edit a record
if(isset($_GET['id'])) {
    $user_id = $_GET['id'];
    //write SQL to get user data
    $sql = "SELECT * FROM `users` WHERE `id`='$user_id'";

    //excecute the SQL
    $result = $conn->query($sql);

    if($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $email = $row['email'];
            $password = $row['password'];
            $gender = $row['gender'];
            $id = $row['id'];
        }
    }
?>
            <h2>Update Form</h2>

        <form action="" method="POST">
            <fieldset>
                <legend>Personal information:</legend>
                First name:<br>
                <input type="text" name="firstname" value ="<?php echo $firstname; ?>">
                <input type="hidden" name="user_id" value="<?php echo $id; ?>">
                <br>
                Last name:<br>
                <input type="text" name="lastname" value ="<?php echo $lastname; ?>">
                <br>
                Email:<br>
                <input type="email" name="email" value ="<?php echo $email; ?>">
                <br>
                Password:<br>
                <input type="password" name="password" value ="<?php echo $password; ?>">
                <br>
                Gender:<br>
                <input type="radio" name="gender" value="Male" <?php if($gender == "Male") {echo "checked";} ?> >Male
                <input type="radio" name="gender" value="Female" <?php if($gender == "Female") {echo "checked";} ?> >Female
                <br><br>
                <input type="submit" name="submit" value="update">
            </fieldset>
        </form>

<?php
} else {
        //If the "id" value is not valid redirect the user back to view.php page
     header('Location: view.php');
    }

?>