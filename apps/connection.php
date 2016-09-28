<!-- This file is used to establish the MySQL database connection and is called from index.php-->
<?php

	$dbaddr = "localhost"; // database address
	$dbname = "sss"; // database name
	$dbuser = "root"; // database username
	$dbpw = ""; // database password
	
	$connection = new PDO('mysql:host='.$dbaddr.';dbname='.$dbname, $dbuser, $dbpw);
	
	function testConnection(){
		$database = $dbh->prepare("database();");;
		$dbtables = $dbh->prepare("show tables;");
		$dbtables->execute();
		$dbtablesarray = $dbtables->fetchAll();
		$printtables = print_r($dbtablesarray);
		
		echo "Currently using a database called &quot;".$database."&quot; which has the following tables: <br />".$printtables;
		
	}
	
?>