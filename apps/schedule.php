<!-- This file houses the actual timetable tables and is called from index.php using the include function -->

<?php
	
	function fetchSchedule($var1, $password, $pdo) {
	// Using prepared Statements means that SQL injection is not possible.
	
	/* Alternative code starts (without arrays)
	
		if ($sql = $pdo->prepare("SELECT id, lessonstart, lessonend, evenmorestuff FROM tablenamehere WHERE var1 = :var1 LIMIT 1")) { 
		$sql->bindParam(':var1', $var1);  // Bind "$var1" to parameter.
		$sql->execute(); // Execute the prepared query.

			while($row=$sql->fetch()){ //for each result, do the following
				 $lessonId=$row['id'];
				 $lessonStart=$row['lessonstart'];
				 $lessonEnd=$row['lessonend'];
				 $lessonDuration=$row['lessonduration'];
				 $lessonTeacherId=$row['teacher_id']
			 }
		}
		
		Alternative code ends */
		
		// dbh = Database handle, sth = statement handle. In this case sth will be called something meaningful like "lessons"
		$lessons = $dbh->prepare("SELECT LessonID, LessonName, EquipmentID, TeacherID, CourseID, GrupID FROM ContactLesson");
		$lessons->execute();
		
		/* Fetch all of the remaining rows in the result set */
		print("Fetch all of the remaining rows in the result set:\n");
		$result = $lessons->fetchAll();
		print_r($result);
		
		
		
		// Do something with the variables
	}
	
	// Not sure if we'll need these or not (for storing the database query values)
	$monday = '';
	$tuesday = '';
	$wednesday = '';
	$thursday = '';
	$friday = '';
	
?>

<table class="schedule">

	<tr class="weekdays">
		<th>Monday</th>
		<th>Tuesday</th>
		<th>Wednesday</th>
		<th>Thursday</th>
		<th>Friday</th>
	</tr>
	
	<tr class="lessons">
		<td>Lesson</td>
		<td>Lesson</td>
		<td>Lesson</td>
		<td>Lesson</td>
		<td>Lesson</td>
	</tr>
	
	<tr class="lessons">
		<td>Lesson</td>
		<td>Lesson</td>
		<td>Lesson</td>
		<td>Lesson</td>
		<td>Lesson</td>
	</tr>
	
	<tr class="lessons">
		<td>Lesson</td>
		<td>Lesson</td>
		<td>Lesson</td>
		<td>Lesson</td>
		<td>Lesson</td>
	</tr>
	
	<tr class="lessons">
		<td>Lesson</td>
		<td>Lesson</td>
		<td>Lesson</td>
		<td>Lesson</td>
		<td>Lesson</td>
	</tr>

</table>