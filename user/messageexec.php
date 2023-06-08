<?php

include('../connect.php');

	$username = 'Admin';
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$from1 =$_POST['username'];
	$status = 'Pending';
	$save1=mysql_query("INSERT INTO message (to1, subject, message, from1, status) VALUES ('$username','$subject','$message','$from1','$status')");

echo "<script type=\"text/javascript\">window.alert('You have successfully send a message');window.location.href = 'index.php';</script>"; 
			


?>