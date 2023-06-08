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
	
// message send 
	$to1 = $username;
	$subject = 'Reservation Request';
	$message = "Your reservation for ".$date." has been rescheduled.";
	$from1 ='Admin';
	$status2 = 'Pending';
	$save1=mysql_query("INSERT INTO message (to1, subject, message, from1,status) VALUES ('$username','$subject','$message','$from1','$status2')");	

	echo "<script type=\"text/javascript\">window.alert('You have successfully approved a reservation request11.');window.location.href = 'reserve.php';</script>"; 		

?>

