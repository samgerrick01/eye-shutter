<?php

include('../connect.php');
$username = $_POST['username'];
$occasion = $_POST['occasion'];
$date = $_POST['date'];
$package = $_POST['package'];
$name = $_POST['name'];
$status = 'Pending';
	$save=mysql_query("INSERT INTO reserve (username, occasion, date,package,name,status) VALUES ('$username', '$occasion', '$date','$package','$name','$status')");
	
			

echo "<script type=\"text/javascript\">window.alert('You have successfully reserve fo an occasion');window.location.href = 'index.php';</script>"; 

?>