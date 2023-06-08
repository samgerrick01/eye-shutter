<?php

include('../connect.php');

	$package = $_POST['package'];
	$promo = $_POST['promo'];
	$save1=mysql_query("INSERT INTO package (package, promo) VALUES ('$package','$promo')");

echo "<script type=\"text/javascript\">window.alert('You have successfully add a promo to a package');window.location.href = 'promo.php';</script>"; 
			


?>