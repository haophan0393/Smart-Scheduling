<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="Button.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add a new course</title>
</head>

<body>
	<h1>Add a new course</h1>
    <form  method="post" enctype="multipart/form-data" action="Handler.php">
    	<label>Course name:</label>
        <input type="text" class="input" name="coursename" />
        <br/>
		<label>Amount of contact lessons:</label>
        <input type="number" class="input" name="amountlessons"/>
        <br/>
        <label>Group:</label>
        <input type="text" class="input" name="grupname"/>
        <br/>
        <input type="submit" value="Proceed to contact lessons"/>
    </form>
</body>
</html>