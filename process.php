<?php 
	$username =$POST['username'];
	$password =$POST['password'];


	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);

	mysql_connect("localhost", "root", "");
	mysql_select_db("exam");

	$result = mysql_query("select *from users where username ='$username' and password ='$password'" ) or die("Failed to query database "mysql_error());
	$row = mysql_fetch_array($result);
	if
?>