
<?php

// This is a sample code in case you wish to check the username from a mysql db table
include('../connect.php');
if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "delete from reserve where ID='$id'";
 mysql_query( $sql);
}
	echo "<script type=\"text/javascript\">window.alert('You have successfully delete a reservation request.Press OK to continue');window.location.href = 'reserve.php';</script>"; 
?>