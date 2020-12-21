<?php 
	$username =$_POST['user'];
	$password =$_POST['pass'];


	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);

	mysqli_connect("localhost", "root", "");
	mysqli_select_db("exam");

	$result = mysql_query("select *from users where username ='$username' and password ='$password'" ) or die("Failed to query database "mysql_error());
	$row = mysql_fetch_array($result);
	if($row['username']== $username && $row ['password'] == $password) {
		echo "Login Success!! wecome " . $row['username'];
	}else{
		echo"Failed to login.";
	}
?>
