
<?php

// This is a sample code in case you wish to check the username from a mysql db table
include('../connect.php');
$id = $_GET['id'];
$result = mysql_query("SELECT * FROM info WHERE id = '$id'");
while($row = mysql_fetch_array($result))
{
$username = $row['username'];
}
 $sql = "delete from info where ID='$id'";
 $sql1 = "delete from login where username='$username'";
 mysql_query( $sql);
 mysql_query( $sql1);
	echo "<script type=\"text/javascript\">window.alert('You have successfully delete an item.Press OK to continue');window.location.href = 'index.php';</script>"; 
?>