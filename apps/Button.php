<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<link href="Button.css" rel="stylesheet" type="text/css" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" 
		/>
		<link rel="stylesheet" href="../css/common.css" type="text/css">
		<title>Add</title>
	</head>

	<body>
		<h1>Add new course</h1>
		<form method="post" enctype="multipart/form-data" action="Button.php">
			<label>Course name</label>
			<input type="text" class="long_inp" name="course_name" />
			<br/>
			<label>Teacher</label>
			<input type="text" class="long_inp" name="teacher"/>
			<br/>
			<label>Group</label>
			<input type="text" class="long_inp" name="group"/>
			<br/>
			<label>Duration</label>
			<input type="text" class="short_inp" name="duration"/>
			<input type="radio" name="rad_button" value="rad_duration" class="radio_button"/>
			<br/>
			<label>Specific time</label>
			<input / type="radio" name="rad_button" value="rad_time" class="radio_button"/>
			<br />
			<label id="sub_label">Time start</label>
			<input type="text" class="short_inp" name="time_start"/>
			<br />
			<label id="sub_label">Time end</label>
			<input type="text" class="short_inp" name="time_end"/>
			<br />
			<label>Available date</label>
			 <input type="button" name ="button_date" />
			 <br/>
			<div id="available_date">
				 <input type="checkbox" name ="check_mon" />Monday
				 <br/>
				 <input type="checkbox" name ="check_tues" />Tuesday
				 <br/>
				 <input type="checkbox" name ="check_wed" />Wednesday
				 <br/>
				 <input type="checkbox" name ="check_thu" />Thursday
				 <br/>
				 <input type="checkbox" name ="check_fri" />Friday
				 <br/>
			 </div>
			  <input type="submit" value="Finish" id="button_finish" />
		</form>
		<input type="button" onclick="(<?php echo "Hello"; ?>)" />     
	</body>
</html>