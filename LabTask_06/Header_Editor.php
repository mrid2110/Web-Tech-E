<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div style="position: relative; top: -30px;"><img src="logo.png" style="height: 200px; width: 200px"></div>
	<input type="text" name="search_name" style="position: relative; top: -90px; left: 60%;">
	<input type="submit" name="search" value="Search" style="position: relative; top: -90px; left: 60%">
	<label style="position: relative; top: -90px; padding-left: 60%">Logged in as <?php echo $_SESSION['username'];?> | </label>
	<a href="Dashboard.php" style="position: relative; top: -90px;">Home</a>
	<label style="position: relative; top: -90px;">|</label>
	<a href="Logout.php" style="position: relative; top: -90px;">Logout</a>
	<div style="width: 100%; border-top: 2px solid gray;position: relative; top: -85px;"></div>
	
	

</body>
</html>