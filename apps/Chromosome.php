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
		$mono = array();
		for ($i = 0; $i <= $no_of_courses-1; $i++) {
			$mono[$i]=$i+1;
		}
		shuffle($mono);
		for ($i = 0; $i <= $no_of_courses-1; $i++) {
			echo $mono[$i]."      ";
		}
		echo "<br>";
		/*------------------------------------------*/
		function Inversion($array) {
			$size = sizeof($array);
			$num_1 = mt_rand(0, $size-1);
			$num_2 = mt_rand(0, $size-1);
			while ($num_1 == $num_2) {
				$num_2 = mt_rand(0, $size-1);
			}
			if ($num_1 > $num_2) {
				$temp = $num_1;
				$num_1 = $num_2;
				$num_2 = $temp;
			}
			$count = round(($num_2 - $num_1+1)/2,0, PHP_ROUND_HALF_DOWN);
			for ($k = 0; $k <= $count-1; $k++) {
				$temp = $array[$num_1+$k];
				$array[$num_1+$k]=$array[$num_2-$k];
				$array[$num_2-$k] = $temp;
			}
			for ($i = 0; $i <= $size-1; $i++) {
			echo $array[$i]."      ";
			}
			echo "<br>";
		}
		Inversion($mono);
		/*------------------------------------------*/
		function Insertion($array) {
			$size = sizeof($array);
			$num_1 = mt_rand(0, $size-1);
			$num_2 = mt_rand(0, $size-1);
			while ($num_1 == $num_2) {
				$num_2 = mt_rand(0, $size-1);
			}
			$temp = $array[$num_1];
			if ($num_1 < $num_2) {
				for ($k = $num_1; $k <= $num_2-1; $k++) {
					$array[$k] = $array[$k+1];
				}
				$array[$num_2] = $temp;
			} else {
				for ($k = $num_1; $k >= $num_2+1; $k--) {
					$array[$k] = $array[$k-1];
				}
				$array[$num_2] = $temp;
			}
			for ($i = 0; $i <= $size-1; $i++) {
			echo $array[$i]."      ";
			}
			echo "<br>";
		}
		Insertion($mono);
		/*------------------------------------------*/
		function Displacement($array) {
			$size = sizeof($array);
			$num_1 = mt_rand(0, $size-1);
			$length = mt_rand(1,$size-$num_1);
			while ($num_1 == 0 AND $length == $size) {
				$length = mt_rand(1,$size-$num_1);
			}
			$num_2 = mt_rand(0,$size-$length);
			while ($num_1 == $num_2) {
				$num_2 = mt_rand(0,$size-$length);
			}
			$array_temp = array();
			if ($num_1 < $num_2) {
				for ($i = 0; $i <= $size-1; $i++) {
					$array_temp[$i] = $array[$i];
				}
				for ($j = $num_1; $j <= $size-$length-$num_1; $j++) {
					$array_temp[$j] = $array[$j+$length];
				}
				for ($k = $num_2; $k <= $size-$length-$num_2; $k++) {
					$array_temp[$k+$length] = $array_temp[$k];
				}
				for ($h = 1; $h <= $length; $h++) {
					$array_temp[$num_2+$h-1] = $array[$num_1+$h-1];
				}
			} else {
				for ($i = 0; $i <= $size-1; $i++) {
					$array_temp[$i] = $array[$i];
				}
				for ($j = $num_1-1; $j >= 0; $j--) {
					$array_temp[$j+$length] = $array[$j];
				}
				for ($k = $num_2+$length-1; $k >= $num_1; $k--) {
					$array_temp[$num_2] = $array_temp[$num_2+$length];
				}
				for ($h = 1; $h <= $length; $h++) {
					$array_temp[$num_2+$h-1] = $array[$num_1+$h-1];
				}
			}
			
			for ($i = 0; $i <= $size-1; $i++) {
			echo $array_temp[$i]."      ";
			}
			echo "<br>";
		}
		Displacement($mono);
	?>
</body>
</html>