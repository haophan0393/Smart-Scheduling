<!DOCTYPE html>
<html>
	<head>
		<title>Smart Scheduling System</title>
		<link rel="stylesheet" href="css/common.css" type="text/css">
		<link rel="stylesheet" href="apps/schedule.css" type="text/css">
		<link rel="stylesheet" href="css/jquery-ui-1.10.4.custom.min.css" type="text/css">
		<script src="js/jquery-1.11.0.min.js"></script>
		<script src="js/jquery-ui-1.10.4.custom.min.js"></script>
	</head>
	<body>

		<div id="container"> <!-- The outlines of the whole page. Also known as the 'wrapper' -->
		
			<div id="header" class="outline">
				<h1>Smart Scheduling System</h1>
			</div>
			
			<div id="leftmenu">
				<span><a href="apps/Button.php" target="_blank">User input</a></span>
			</div>
			
			<div id="content">
			<!-- The majority of the code will go inside this div -->
				
				<!-- For some peculiar reason disabling this div messes up the whole layout (leftmenu and rightmenu go all the way down on the page) -->
				<div class="appstatus">
					<p>Demo version</p> 
					<!--
					<p>In the meantime - do enjoy this awesome jQuery date picker! ;)</p>
					<input type="text" name="date" id="date" />
					
					<br /><br />
					-->
				</div>
				
				
				
				<?php
				/* Initialize plugins/components */
					include 'apps/connection.php'; // connect to the database
					include 'apps/schedule.php'; // show the schedule
					// testConnection(); doesn't work, has errors
					
					// include 'apps/Chromosome.php';
					/* commented out because of an endless loop, output is:
					
					Warning: mt_rand(): max(-1) is smaller than min(0) in C:\Users\Juho\Downloads\ict-projekti\git\smart-scheduling-system\apps\Chromosome.php on line 33

					Warning: mt_rand(): max(-1) is smaller than min(0) in C:\Users\Juho\Downloads\ict-projekti\git\smart-scheduling-system\apps\Chromosome.php on line 34

					Warning: mt_rand(): max(-1) is smaller than min(0) in C:\Users\Juho\Downloads\ict-projekti\git\smart-scheduling-system\apps\Chromosome.php on line 36
					
					*/
					
				?>
				
			</div>
			
			<div id="rightmenu">
				<p>Right menu reserved space</p>
			</div>
			
			<div id="footer"> <!-- Contact information, legal details, author names etc. -->
				<p>&nbsp;&copy; Team 7 - Last update: 25.5.2014 by JK</p>
			</div>
				
		</div>
		
		<script>
			$( "#date" ).datepicker({
			dateFormat: 'dd.mm.yy'});
		</script>
		
	</body>
</html>