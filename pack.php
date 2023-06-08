<?php
$id = $_GET['id'];
$price = $_GET['price'];
echo '<table width="500px;"></table>';
echo '<br>';
echo '<br>';
echo '<h1 style="color:#000;">'.$id.'</h1>';
include('connect.php');
echo '<br>';
echo '<br>';
echo '<ul>';
$result = mysql_query("SELECT * FROM package WHERE package = '$id'");
while($row = mysql_fetch_array($result))
{
echo '<li>'.$row["promo"].'</li>';

}
echo'</ul>';

echo '<br>';
echo '<br>';


?>