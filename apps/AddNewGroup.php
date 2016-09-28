<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="Button.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add a new group</title>
</head>

<body>
	<h1>Add a new group</h1>
    <form  method="post" enctype="multipart/form-data" action="NewGroupHandler.php">
    	<label>Group name:</label>
        <input type="text" class="input" name="grupname" />
        <br/>
		<label>Group size:</label>
        <input type="number" min="0" class="input" name="grupsize"/>
        <br/>
		<input type="submit" value="Save"/>
    </form>
</body>
</html>