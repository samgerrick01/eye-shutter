<?php
$id = $_GET['id'];
				include('../connect.php');
$result = mysql_query("SELECT * FROM package WHERE id='$id'");
while($row = mysql_fetch_array($result))
{
	$package = $row['package'];
	$promo = $row['promo'];
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Online Reservation for Eye Shutter</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="../assets/jquery.shutter/jquery.shutter.css" />
<script type="text/javascript" src="../jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="../jquery/jquery.gallerax-0.2.js"></script>
<link rel="stylesheet" type="text/css" href="../assets/css/styles.css" />
<script src="../jquery.min.js"></script>
<script src="../assets/jquery.shutter/jquery.shutter.js"></script>
<script src="../assets/js/script.js"></script>
<script src="../jquery.backstretch.js"></script>
<style type="text/css">
@import "gallery.css";
.tftable {font-size:12px;color:#000;width:90%;border-width: 1px;border-color: #ebab3a;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:lightblue;border-width: 2px;padding: 8px;border-style: dotted;border-color: #ebab3a;text-align:left;color:#000;}
.tftable tr {background-color:#FFF;border-style: dotted;border-width: 2px;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #ebab3a;color:#000;border-style: dotted;border-width: 2px;}
.tftable a {text-decoration:none;color:#000;  }

</style>


</head>
<body>

<div id="wrapper">
	<div id="header">
		<div id="logo">
		
		<center><img src="images/banner.png" width="800px;" style="height:150px;"></center>
		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>
			<li><a href="index.php">User List</a></li>
			<?php
			include('../connect.php');
			$result=mysql_query("SELECT * FROM message WHERE status='Pending'")or die (mysql_error());
			$count=mysql_num_rows($result);
			?>
			<li><a href="messagelist.php">Message List [<?php echo $count ?>]</a></li>
			<?php
			include('../connect.php');
			$result1=mysql_query("SELECT * FROM reserve WHERE status='Pending'")or die (mysql_error());
			$count1=mysql_num_rows($result1);
			?>
			<li><a href="reserve.php">Reservations [<?php echo $count1 ?>]</a></li>
			
			<li><a href="promo.php">Promo List</a></li>
			<li><a href="../index.php">Logout</a></li>
		</ul>
	</div>
	<!-- end #menu -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
				<!-- content here -->
					
						<div class="post">
							<img src="images/a3.png" style="height:50px;">
						<div style="clear: both;">&nbsp;</div>
						<div class="entry">
						<input type="button" value="Back to Promo List" onclick="window.location='promo.php'" style="width:200px;">
						<br><br>
						<br><br>
						<form action="editpromoexec.php" method="POST">
						<table border="0" style="color:#FFF">
							<tr>
							<input type="hidden" name="id" value="<?php echo $id ?>">
								<td>Package:</td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td>
								<select required name="package">
									<option><?php echo $package ?></option>
									<option>Event Package - Package - A</option>
											<option>Event Package - Package - B</option>
											<option>Event Package - Package - C</option>
											<option>Event Package - Package - D</option>
											<option>Event Package - Package - E</option>
											<option>Photoshoot Package Indoor - Package - I</option>
											<option>Photoshoot Package Indoor - Package - II</option>
											<option>Photoshoot Package Indoor - Package - III</option>
											<option>Photoshoot Package Indoor - Package - IV</option>
											<option>Photoshoot Package Indoor - Package - V</option>
											<option>Photoshoot Package Outdoor - Package - I</option>
											<option>Photoshoot Package Outdoor - Package - II</option>
											<option>Photoshoot Package Outdoor - Package - IIII</option>
											<option>Photoshoot Package Outdoor - Package - IV</option>
								</select>
								</td>
							</tr>
							<tr>
								<td>&nbsp;&nbsp;&nbsp;</td>
								<td>&nbsp;&nbsp;&nbsp;</td>
								<td>&nbsp;&nbsp;&nbsp;</td>
							</tr>
							<tr>
								<td>Promo:</td>
								<td>&nbsp;&nbsp;&nbsp;</td>
								<td><input type="text" name="promo" required value="<?php echo $promo ?>"></td>
							</tr>
							<tr>
								<td>&nbsp;&nbsp;&nbsp;</td>
								<td>&nbsp;&nbsp;&nbsp;</td>
								<td>&nbsp;&nbsp;&nbsp;</td>
							</tr>
							<tr>
								<td></td>
								<td>&nbsp;&nbsp;&nbsp;</td>
								<td><input type="submit" value="Submit" name="submit" style="width:100px"></td>
							</tr>
						
						
						</table>
								</form>	
						</div>
					</div>
						
						
						<!-- end -->
					
					
					<div style="clear: both;">&nbsp;</div>
				</div>
				<!-- end #content -->
				<!-- end #sidebar -->
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page -->
</div>
<div id="footer">
	<p>Copyright (c) 2016 -  Online Reservation for Eye Shutter Photography</p>
</div>
<!-- end #footer -->
</body>
</html>
