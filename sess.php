<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["user"] = $_POST["name"];
//echo "name is " . $_SESSION["user"] . ".<br>";
header("location:next.php");
//print_r($_SESSION);


?>

</body>
</html>
