<?php
include('../auth.php');
$id=$_SESSION['SESS_MEMBER_ID'];
include('../connect.php');
$result2 = mysql_query("SELECT * FROM login WHERE id='$id'");
while($row2 = mysql_fetch_array($result2))
	{
		$username = $row2['username'];
	}
		$result1 = mysql_query("SELECT * FROM info WHERE username='$username'");
		while($row1 = mysql_fetch_array($result1))
			{
			$name = $row1['name'];
			$contact = $row1['contact'];
			$address = $row1['address'];
			$age = $row1['age'];
			$contact = $row1['contact'];
			$email = $row1['email'];
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
			<li><a href="index.php">Reservation</a></li>
			<?php
			include('../connect.php');
			$result=mysql_query("SELECT * FROM message WHERE status='' AND to1='$username'")or die (mysql_error());
			$count=mysql_num_rows($result);
			?>
			
			<li><a href="message.php">Messages [<?php echo $count ?>]</a></li>
			<li><a href="resched.php">Rescheduling of Reservations</a></li>
			<li><a href="../index.php">Logout</a></li>
			
		</ul>
	</div>
	<!-- end #menu -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
			
					<div class="post">
						<img src="images/2.png" width="90%">
						<br><br>
						<p class="meta"><span class="date"></span><span class="posted"></a></span></p>
						<div style="clear: both;">&nbsp;</div>
						<div class="entry"><center>
																	<table class="tftable" border="1">
				<thead>
					<th><center><font color="#000">From</th>
					<th><center><font color="#000">Subject</th>
					<th><center><font color="#000">Action</th>
				</thead>
				<tbody>
				<?php
				
				include('../connect.php');
$result = mysql_query("SELECT * FROM message WHERE to1 = '$username' ORDER BY ID DESC");
while($row = mysql_fetch_array($result))
{
			echo '<tr>';
			echo '<td>'.$row['from1'].'</td>';
			echo '<td>'.$row['subject'].'</td>';
			echo '<td width="35%"><center><a href="viewmessage.php?message='.$row["id"].'">View Message</a> | <a href="reply.php?id='.$row["id"].'">Reply Message</a> |  <a href="deletemessage.php?id='.$row["id"].'" onclick="return confirm(\'Are you sure you want to delete this message?\')">Delete</a></td>';
			echo '</tr>';
}

				
				?>
					<tr>
					
				
				</tbody>
			</table>
						</div>
					</div>
					
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
