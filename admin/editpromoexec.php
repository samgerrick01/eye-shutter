<?php 
include('../connect.php');
$id= $_POST['id'];
$package = $_POST['package'];
$promo = $_POST['promo'];
	mysql_query("UPDATE package SET package='$package', promo='$promo' WHERE id='$id'");
	

	echo "<script type=\"text/javascript\">window.alert('You have successfully update an item.');window.location.href = 'promo.php';</script>"; 		

?>

