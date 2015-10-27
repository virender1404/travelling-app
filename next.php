<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://use.fonticons.com/1ddea501.js"></script>
	



</head>
<body>

<br>
<br>

<div class="container-fluid">
<center>
<br>
<br>
<h2>Group chat</h2>
<br>
<p>

<?php
include('pass.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



if(isset($_SESSION['user']))
{
	echo " logged in as:         ".$_SESSION["user"];
	$sql = "SELECT id, msg  ,name ,side FROM chat";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	
        echo "<html><div class='container-fluid' style='width:30%;height:30px;border:1px solid black;'>".$row['msg']."-------  ".$row['name']."
        </div>
        <html>";
       
    }
} else {
    echo "";
}

}
$conn->close();
?>
</p>
</body>
</html>

<?php
if(isset($_SESSION['user']))
{
	echo '<html>
<head>
	
</head>
<body>
<div class="row">
    <form action="s.php" method="post">


<input type="text" name="chat">

<input class="btn btn-primary" type="submit" value="SEND">
</form></center>
  </div>
  <center>
  <div id="div1" style="float:center;" >
  <br>
  <br>


 <form action="logout.php" method="post">
<input type="text" name="logout" value="1"   hidden>

<input class="btn btn-primary" type="submit" value="logout">
</form>

</div>
</center></div>

</body>
</html>';
  
}
?>
<?php
if(!isset($_SESSION['user']))
{
	echo'<html>
<body>
<div><form action="sess.php" method="post">
<h2>login using name</h2><br>
<input type="text" name="name">

<input class="btn btn-primary" type="submit" value="log IN">
</form></div>
</body>
</html>
';
}
?>


