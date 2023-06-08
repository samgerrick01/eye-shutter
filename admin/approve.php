<?php 
include('../connect.php');
$id= $_GET['id'];
$result3 = mysql_query("SELECT * FROM reserve WHERE id='$id'");
while($row3 = mysql_fetch_array($result3))
	{
	$status = $row3['status'];
	$username = $row3['username'];
	$date = $row3['date'];
	}
$status1 = 'Approved';
	mysql_query("UPDATE reserve SET status='$status1' WHERE id='$id'");
	
// message send 
	$to1 = $username;
	$subject = 'Reservation Request';
	$message = "Your reservation for ".$date." has been approved.";
	$from1 ='Admin';
	$save1=mysql_query("INSERT INTO message (to1, subject, message, from1) VALUES ('$username','$subject','$message','$from1')");	

	echo "<script type=\"text/javascript\">window.alert('You have successfully approved a reservation request.');window.location.href = 'reserve.php';</script>"; 		

?>

