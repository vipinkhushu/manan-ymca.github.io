<?php
include('session.php');

?>
<html>
<head>
<title>
Edit Manan's Website
</title>
<style>
.head
{
	width:100%;
	height:100px;
	border:1px solid black;
	
}
.left
{
	width:100%;
	height:1000px;
	border:1px solid black;
	float:left;
	
}

.col
{
	width:100%;
	height:50%;
	border:1px solid black;
	font-size:40px;
}
</style>
<head>
<body>
<div class="head">
<img src="../img/manan_logo_full.png" width="50%" height="100%">
<span style="float:right;font-size:80px;">ADMIN PANEL</span>
</div>
<div class="left"><br/>
<div class="col">
Update Events
<hr>
<?php
include('pass.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `events`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
$num=1;
    while($row = $result->fetch_assoc()) {
		echo"$num";
		    echo"<input type='text' value='".$row["name"]."'>";
			echo"<input type='text' value='".$row["host"]."'>";
			echo"<input type='text' value='".$row["time"]."'>";
			echo"<input type='text' value='".$row["date"]."'>";
			echo"<input type='text' value='".$row["venue"]."'>";
			echo"<input type='submit' value='Update'>";
			echo"<input type='submit' value='Remove'>";
			$num+=1;
			echo"<br/>";
			}
} else {
    echo "No events available";
}
$conn->close();
?>
</div>
<div class="col">
Update Mananiya
<hr>
<?php
include('pass.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `mananiya`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
		
		    echo"<input type='text' value='".$row["name"]."'>";
			echo"<input type='text' value='".$row["line"]."'>";

			echo"<input type='submit' value='Update'>";
			
			echo"<br/>";
			}
} else {
    echo "No events available";
}
$conn->close();
?>

</div>
<div class="col">
Update Feedbacks
<hr>


</div>
</div>

</body>
<html>