<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
if($_POST["logout"]==1)
{
	session_unset(); 

// destroy the session 
session_destroy(); 
header("location:next.php");

}
//print_r($_SESSION);
?>

</body>
</html>
