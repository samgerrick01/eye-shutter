
<?php

// This is a sample code in case you wish to check the username from a mysql db table
include('../connect.php');
if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "delete from message where ID='$id'";
 mysql_query( $sql);
}
	echo "<script type=\"text/javascript\">window.alert('You have successfully delete a message.Press OK to continue');window.location.href = 'messagelist.php';</script>"; 
?>