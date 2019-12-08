<?php
	//session_start();
	if(isset($_COOKIE['username'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>

	<h1>Add New User</h1> 
	
	<a href="home.php">Back</a> |  
	<a href="logout.php">logout</a>

	<form method="post" action="../php/insertUser.php">
		<table>
			<tr>
				<td>EmployeeName:</td>
				<td><input type="text" name="employeename"></td>
			</tr>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Contact No:</td>
				<td><input type="text" name="contact"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Save"></td>
			</tr>
		</table>
	</form>


</body>	
</html>



<?php		
	}else{
		header('location: login.html');
	}

?>

