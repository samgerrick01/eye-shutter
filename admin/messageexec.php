<?php

include('../connect.php');

	$username = $_POST['username'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$from1 ='Admin';
	$save1=mysql_query("INSERT INTO message (to1, subject, message, from1) VALUES ('$username','$subject','$message','$from1')");

echo "<script type=\"text/javascript\">window.alert('You have successfully send a message');window.location.href = 'index.php';</script>"; 
			


?>