<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="Button.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>1 record added</title>
<!-- this part is responsible for establishing a connection to the database -->
<?php
$user = 'root';
$pass = '';
$db = 'testdb';

$dbcon = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

$grupname = mysqli_real_escape_string($dbcon, $_POST['grupname']);
$grupsize = mysqli_real_escape_string($dbcon, $_POST['grupsize']);

$sql="INSERT INTO Grup (GrupName, GrupSize)
VALUES ('$grupname', '$grupsize')";

if (!mysqli_query($dbcon,$sql)) {
  die('Error: ' . mysqli_error($dbcon));
}
echo "1 record added <br> <br>";

mysqli_close($dbcon);
?>
</head>


<body>
	<form action="/smart-scheduling-system/index.php">
		<input type="button" value="To the main page">
	</form>
	</br>
	<form action="AddNewGroup.php">
		<input type="button" value="Add one more group">
	</form>
</body>
</html>