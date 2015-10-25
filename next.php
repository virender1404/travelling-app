<!DOCTYPE html>
<html>
<head>
	<title></title>
	
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://use.fonticons.com/1ddea501.js"></script>
	

<style>
body{
	background: url('<?php
include('pass.php');
$cookie_name ="cook";
//echo $_COOKIE[$cookie_name]."<br>"; 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql="SELECT * FROM info WHERE place='$_COOKIE[cook]' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

	
    while($row = $result->fetch_assoc()) {

  	echo $row["background"];
        
    }
   

} else {
    echo "img/simple.jpg";
}

$conn->close();
?> ');
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}
</style>
</head>
<body>

<br>
<br>




<div id="div1"><center><h2>welcome</h2>


<form action="cook.php" method="post">

place:<br>
<input type="text" name="place">

<input class="btn btn-primary" type="submit" value="Submit">

</form>
</center>

</div>

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

$sql = "SELECT id, msg FROM chat";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["msg"]. "<br>";
    }
} else {
    echo "";
}
$conn->close();
?>
</p>
  <div class="row">
    <form action="s.php" method="post">


<input type="text" name="chat">

<input class="btn btn-primary" type="submit" value="Submit">
</form></center>
  </div>
  
</div>
</body>
</html>


