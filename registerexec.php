<?php

include('connect.php');

	$name = $_POST['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$age = $_POST['age'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$type = 'user';
	$save=mysql_query("INSERT INTO info (name, username,age,address,contact,email) VALUES ('$name','$username','$age','$address','$contact', '$email')");
	$save1=mysql_query("INSERT INTO login (username, password, type) VALUES ('$username','$password','$type')");

echo "<script type=\"text/javascript\">window.alert('You have successfully registered!!');window.location.href = 'index.php';</script>"; 
			


?>