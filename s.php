<?php
include('pass.php');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$a = $_POST["chat"];

$sql = "INSERT INTO chat (msg)
VALUES ('$a');";


if ($conn->multi_query($sql) === TRUE) {
   header('location:next.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
