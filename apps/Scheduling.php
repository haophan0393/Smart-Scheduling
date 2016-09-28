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
		echo $no_of_courses;
		$status = array();
		for ($course = 1; $course <=$no_of_courses; $course++) {
			$status[$course] = array();
			for ($period = 1; $period <=3200; $period++) {
				$status[$course][$period] = 0;
			}
		}
   /*---------------------------------------------------------------*/
   
   function Check($x, $no_of_period) {
	   global $status;
	   $z = 0;
	   for ($i = 1; $i <= 3200; $i++) {
		   if ($status[$x][$i] == 0) {
			   for ($k = $i+1; $k <= $i+$no_of_period-1; $k++) {
				   if ($status[$x][$k] != 0) {
					   $k = $i+$no_of_period;
					   $i = $k;
				   }
				   if ($k == $i+$no_of_period-1) {
					   $z = $i;
					   $i = 3200;
				   }
			   }
		   }
	   }
	   return $z;
   }
   
/*---------------------------------------------------------------*/
   
   function Status_update($y, $x, $no_of_period) {
	   global $no_of_course;
	   global $status;
	   for ($y_coor = $y; $y_coor <= $y+$no_of_period-1; $y_coor++) {
		   for ($x_coor = 1; $x_coor <= $no_of_courses ; $x_coor++) {
		   $status[$x_coor][$y_coor] = -1;
	   }
	  	   $status[$x][$y_coor] = 1;
	   }
	   /*----------------------------------*/
	   if ($y < 640) {$test_counter = 640;}
	   elseif ($y < 1280) {$test_counter = 1280;}
	   elseif ($y < 1920) {$test_counter = 1920;}
	   elseif ($y < 2560) {$test_counter = 2560;}
	   else {$test_counter = 3200;}
	   for ($y_coor = $test_counter-639; $y_coor <= $test_counter; $y+= 32) {
		   for ($y_loop = 0; $y_loop <= $no_of_period-1; $y_loop++) {
			   $status[$x][$y_coor+$y_loop] = -1;
		   }
		   for ($y_loop = 0; $y_loop <= $no_of_period-1; $y_loop++) {
			   $status[$x][$y+$y_loop] = 1;
		   }
	   }
   }
/*---------------------------------------------------------------*/
	function Status_update_round2($x, $y, $no_of_period) {
		if ($y < 640) {$test_counter = 640;}
	   elseif ($y < 1280) {$test_counter = 1280;}
	   elseif ($y < 1920) {$test_counter = 1920;}
	   elseif ($y < 2560) {$test_counter = 2560;}
	   else {$test_counter = 3200;}
	   for ($y_coor = $test_counter-639; $y_coor <= $test_counter; $y+= 32) {
		   for ($y_loop = 0; $y_loop <= $no_of_period-1; $y_loop++) {
			   $status[$x][$y_coor+$y_loop] = -1;
		   }
	   }
	}
/*---------------------------------------------------------------*/
	function Arrange($course_id) {
		global $processing_lesson;
		global $max_lesson;
		global $sum_lesson;
		global $lesson;
		global $status;
		$count = 1;
		while ($count <= $max_lesson[$course_id]) {
			for ($i = 1; $i <= $sum_lesson; $i++) {
				if ($lesson[1][$i] == $course_id * 100 + $processing_lesson[$course_id]) {
					$k = $i;
					$i = $sum_lesson;
				}
			}
			$z = Check($course_id,$lesson[2][$k]);
			for ($i = 1; $i <= $lesson[2][$k]; $i++){
				$status[$course_id][$z + $i -1] = 1;
			}
			$processing_lesson[$course_id]++;
			$count++;
		}
	}

/*-----------------------MAIN------------------------------------*/
	$max_lesson = array();
	$processing_lesson = array();
	for ($i = 1; $i <= $no_of_courses; $i++){
		$processing_lesson[$i] = 1;
		$max_lesson[$i] = ceil($no_of_lessons[$i] / $no_of_weeks[$i]);
	}
	for ($week = 1; $week <= 40; $week++) {
		
	}
/*-----------------------MAIN------------------------------------*/   
	?>
</body>
</html>