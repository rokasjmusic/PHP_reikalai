<?php
$servername = "localhost";
$username = "root"; //default password for localhost is root
$password = ""; //default password for localhost is empty
$dbname = "gelynas"; //databasename

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if($conn -> connect_error) {
    die("Connection failed: " . $conn -> connect_error);
}

?>