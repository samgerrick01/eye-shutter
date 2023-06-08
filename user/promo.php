<?php
$q = $_GET['q'];

include('../connect.php');
echo '<h3>'.$q.'</h3><br>';
echo '<ul>';
$result = mysql_query("SELECT * FROM package WHERE package = '$q'");
while($row = mysql_fetch_array($result))
{
echo '<li>'.$row["promo"].'</li>';

}
echo'</ul>';

?>