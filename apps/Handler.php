<!-- this part is responsible for establishing a connection with the database -->
<?php
$user = 'root';
$pass = '';
$db = 'testdb';

$dbcon = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
echo "Great, connection works!";

//here we are sending data from form fields to the database

$coursename = mysqli_real_escape_string($dbcon, $_POST['coursename']);
$amountlessons = mysqli_real_escape_string($dbcon, $_POST['amountlessons']);
$grupname = mysqli_real_escape_string($dbcon, $_POST['grupname']);

$sql="INSERT INTO Course (CourseName, AmountLessons, GrupName)
VALUES ('$coursename', '$amountlessons', '$grupname')";

if (!mysqli_query($dbcon,$sql)) {
  die('Error: ' . mysqli_error($dbcon));
}
echo "1 record added";

mysqli_close($dbcon);
?>