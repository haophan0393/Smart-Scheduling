<?php

$user = 'root';
$pass = '';
$db = 'testdb';

$dbcon = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

echo "Great, connection works!";

?>