<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php
		$no_of_courses=0;
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$no_of_courses = $_POST["no_of_courses"];
		}
	?>
     <form method="post" action="<?php echo htmlspecialchars(		$_SERVER["PHP_SELF"]);?>"> 
    	 Number of courses: <input type="text" name="no_of_courses" value="<?php echo $no_of_courses;?>">
          <input type="submit" name="submit" value="Submit">
    </form>
    
    <?php
		echo $no_of_courses."<br>";
		$gene = array();
		$check = array();
		$gene[0] = 20;
		$check[0] = 0;
		$i = 1;
		function Generate($coor, $num) {
			global $gene;
			global $check;
			$check[$coor] = 1;
			global $i;
			echo $gene[$coor]. "     ";
			for ($k = $i; $k <= $i+$num-1; $k++){
				$gene[$k] = rand(0,20);
				$check[$k] = 0;
				echo $gene[$k]."     ";
			}
			echo "<br>";
			$i=$i+$num;
			$min = 21;
			for ($k = 1; $k <= $i-1; $k++) {
				if ($gene[$k] < $min AND $check[$k] == 0) {
					$min = $gene[$k];
					$min_coor = $k;
				}
			}
			if ($min > 0) {
				Generate($min_coor,2);
			}
		}
		Generate(0,3);
	?>
</body>
</html>