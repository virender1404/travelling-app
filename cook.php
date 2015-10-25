

<?php
$cookie_name ="cook";
$cookie_value = $_POST["place"];
setcookie($cookie_name, $cookie_value, time() + ( 800* 1), "/"); // 86400 = 1 day
header('location:home.php');

?>



