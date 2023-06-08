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
			$sched = $_GET['sched'];
$result3 = mysql_query("SELECT * FROM reserve WHERE id='$sched'");
while($row3 = mysql_fetch_array($result3))
	{
		$date = $row3['date'];
		$package = $row3['package'];
		$occasion = $row3['occasion'];
	}
?>

<?php
if(count($_POST)>0) {
include('../connect.php');
$username1 = $_POST['username'];
$occasion = $_POST['occasion'];
$date = $_POST['date'];
$package = $_POST['package'];
$name = $_POST['name'];
$status = 'Pending';

$result1=mysql_query("SELECT * FROM reserve WHERE date='$date'");
$count1=mysql_num_rows($result1);
if ($count1 > 2) {
$message = "<font color='red'>We are fully booked with the date that you selected.<br>Please choose another date.</font>";
} else {
	$to1 = 'Admin';
	$subject = 'Reservation Request';
	$message = "Your reservation for ".$date." has been rescheduled.";
	
	$status2 = 'Pending';
	$save1=mysql_query("INSERT INTO message (to1, subject, message, from1,status) VALUES ('$to1','$subject','$message','$username','$status2')");	
mysql_query("UPDATE reserve SET date='$date' WHERE id='$sched'");

echo "<script type=\"text/javascript\">window.alert('You have successfully reserve fo an occasion');window.location.href = 'index.php';</script>"; 
}


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
.tftable th {font-size:12px;background-color:lightblue;border-width: 1px;padding: 8px;border-style: solid;border-color: #ebab3a;text-align:left;color:#000;}
.tftable tr {background-color:#ff7f7f;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #ebab3a;color:#FFF;}
.tftable a {text-decoration:none;color:#FFF;  }

</style>


</head>
<body>


<script>
function picture() {
    var picture_type = document.getElementById('package').value;
    if (picture_type == "Event Package - Package - A") {
        document.getElementById('promo').innerHTML = '<h3>EVENT PACKAGE A (Php17,500)</h3>'+
		'<ul>'+
		'<li>One Photographer</li>	'+
		'<li>Prenup</li>'+
		'<li>EventCoverage</li>'+
		'<li>40 pages 8R Magnetic Album</li>'+
		'<li>1 DVD Copy of Event Coverage (RAW)</li>'+
		'</uL>'+
		'FREE: 	11R PHOTO with Elegant Frame, 10 pages 8R Guest Book, Rotating Tarpaulin'+
		'<br><br>';
		
    }
    if(picture_type == "Event Package - Package - B") {
    document.getElementById('promo').innerHTML = '<h3>EVENT PACKAGE B (Php27,500)</h3>'+
		'<ul>'+
		'<li>One Photographer'+
		'<li>Prenup'+			
		'<li>EventCoverage'+
		'<li>40 Pages 8R Magnetic Album'+
		'<li>1 DVD Copy of Event Coverage (RAW)'+
		'<li>One Videographer'+	
		'<li>1 DVD Copy of Event Video (MTV Style)'+
		'</ul>'+
		'FREE:11R PHOTO with Elegant Frame,10 pages 8R Guest Book,	Rotating Tarpaulin'+
		'<br><br>';
    }
    if(picture_type == "Event Package - Package - C") {
    document.getElementById('promo').innerHTML = '<h3>EVENT PAGKAGE C (Php 32,500)</h3></a>'+
		'<ul>'+
		'<li>Two Photographers</li>'+
		'<li>Prenup			</li>				'+
		'<li>Event Coverage		</li>				'+
		'<li>40 pages 8R Magazine Album				</li>'+
		'<li>1 DVD Copy of Event Coverage (RAW)			</li>	'+
		'<li>One  Videographer						</li>'+
		'<li>1 DVD Copy of Event Video (MTV Style)	</li>'+
		'<li>100 piecesPersonalized Invitation</li>'+
		'</ul>'+
		'FREE:11R PHOTO with Elegant Frame, 15 pages 8R Guest Book, 3x4 Tarpaulin, Rotating Tarpaulin'+
		'<br><br>';
		
    }    
	if(picture_type == "Event Package - Package - D") {
    document.getElementById('promo').innerHTML = '<h3>EVENT PAGKAGE D (Php 37,500)</h3>'+
		'<ul>'+
		'<li>Two Photographers</li>'+
		'<li>Prenup			</li>				'+
		'<li>Event Coverage		</li>				'+
		'<li>40 pages 8R Magazine Album				</li>'+
		'<li>1 DVD Copy of Event Coverage (RAW)			</li>	'+
		'<li>Two Videographers						</li>'+
		'<li>1 DVD Copy of Event Video (MTV Style)	</li>'+
		'<li>100 piecesPersonalized Invitation</li>'+
		'</ul>'+
		'FREE:11R PHOTO with Elegant Frame, 15 pages 8R Guest Book, 3x4 Tarpaulin, Rotating Tarpaulin'+
		'<br><br>';
		
		
    }	
	if(picture_type == "Event Package - Package - E") {
    document.getElementById('promo').innerHTML = '<h3>EVENT PACKAGE E (Php 47,500)</h3></a>'+
		'<ul>'+
		'<li>Two Photographers						</li>'+
		'<li>Prenup							</li>'+
		'<li>Event Coverage						</li>		'+		
		'<li>40 pages 8R Magazine Album				</li>'+
		'<li>1 DVD Copy ofEvent Coverage (RAW)			</li>	'+
		'<li>Two Videographers						</li>'+
		'<li>1 DVD Copy of Event Video (MTV Style)		</li>			'+	
		'<li>100 pieces of Personalized Invitation			</li>	'+
		'<li>100 pieces of Souvenirs 	</li>'+
		'</ul>'+
		'FREE:11R PHOTO with Elegant Frame, 15 pages 8R Guest Book, 3x4 Tarpaulin, Rotating Tarpaulin';
    }
	if(picture_type == "Photoshoot Package Indoor - Package - I") {
    document.getElementById('promo').innerHTML = '<h3>INDOOR PACKAGE I (Php 300)</h3>'+
		'<ul>'+
		'<li>1pc 5r Photo</li>'+
		'<li>2pcs 4r Photos</li>'+
		'<li>4pcs Wallet Size Photos</li>'+
		'</ul>';
	}
	if(picture_type == "Photoshoot Package Indoor - Package - II") {
    document.getElementById('promo').innerHTML = '<h3>INDOOR PACKAGE II (Php 400)</h3>'+
		'<ul>'+
		'<li>1pc 8r Photo</li>'+
		'<li>1pc 5r Photo</li>'+
		'<li>2pcs 4r Photos</li>'+
		'<li>4pcs Wallet Size Photos</li>'+
		'</ul>';
	}
	if(picture_type == "Photoshoot Package Indoor - Package - III") {
    document.getElementById('promo').innerHTML = '<h3>INDOOR PACKAGE III (Php 800)</h3>'+
		'<ul>'+
		'<li>1pc 8r Photo with Frame</li>'+
		'<li>1pc 8r Photo</li>'+
		'<li>1pc 5r Photo</li>'+
		'<li>2pcs 4r photos</li>'+
		'<li>4pcs Wallet Size Photos</li>'+
		'</ul>';
	}
	if(picture_type == "Photoshoot Package Indoor - Package - IV") {
    document.getElementById('promo').innerHTML = '<h3>INDOOR PACKAGE IV (Php 1200)</h3>'+
		'<ul>'+
		'<li>1pc 8r Photo with Frame</li>'+
		'<li>1pc 8r Photo</li>'+
		'<li>2pcs 5r Photo</li>'+
		'<li>2pcs 4r Photo</li>'+
		'<li>4pcs Wallet Size Photo</li>'+
		'<li>2 Sets</li>'+
		'<li>Soft Copy of Pictures with Cover</li>'+
		'</ul>';
	}
	if(picture_type == "Photoshoot Package Indoor - Package - V") {
    document.getElementById('promo').innerHTML = '<h3>INDOOR Package V (Php 2100)</h3></a>'+
		'<ul>'+
		'<li>1 pc 8r Photo with Frame</li>'+
		'<li>1pc 8r Photo</li>'+
		'<li>2pcs 5r Photos</li>'+
		'<li>2pcs 4r Photos</li>'+
		'<li>4pcs Wallet Size Photos</li>'+
		'<li>Soft Copy of Pictures with Cover</li>'+
		'<li>2 Sets</li>'+
		'<li>With Hair and Make Up Artist</li>'+
		'</ul>';
	}
	if(picture_type == "Photoshoot Package Outdoor - Package - I") {
    document.getElementById('promo').innerHTML = '<h3>OUTDOOR PACKAGE I (Php 1500)</h3>'+
		'<ul>'+
		'<li>1pc 8r Photo</li>'+
		'<li>1pc 5r Photo</li>'+
		'<li>2pcs 4r Photos</li>'+
		'<li>4pcs Wallet Size Photos</li>'+
		'</ul>';
	}
	if(picture_type == "Photoshoot Package Outdoor - Package - II") {
    document.getElementById('promo').innerHTML = '<h3>OUTDOOR PACKAGE II (Php 2000)</h3></a>'+
		'<ul>'+
		'<li>1pc 8r Photo with Frame</li>'+
		'<li>1pc 8r Photo</li>'+
		'<li>1pc 5r Photo</li>'+
		'<li>2pcs 4r </li>'+
		'<li>4pcs Wallet SizePhotos</li>'+
		'</ul>';
	}
	if(picture_type == "Photoshoot Package Outdoor - Package - III") {
    document.getElementById('promo').innerHTML = '<h3>OUTDOOR PACKAGE III (Php 2500)</h3>'+
		'<ul>'+
		'<li>1pc 8r Photo with Frame</li>'+
		'<li>1pc 8r Photo</li>'+
		'<li>2pc 5r Photo</li>'+
		'<li>2pcs 4r photos</li>'+
		'<li>4pcs Wallet Size Photos</li>'+
		'<li>Soft Copy of Pictures with Cover</li>'+
		'<li>2 Themes</li>'+
		'</ul>';
	}
	if(picture_type == "Photoshoot Package Outdoor - Package - IV") {
    document.getElementById('promo').innerHTML = '<h3>PACKAGE IV (Php 4000)</h3></a>'+
		'<ul>'+
		'<li>1pc 8r Photo with Frame</li>'+
		'<li>1pc 8r Photo</li>'+
		'<li>2pcs 5r Photo</li>'+
		'<li>2pcs 4r Photo</li>'+
		'<li>4pcs Wallet Size Photo</li>'+
		'<li>2 Themes</li>'+
		'<li>Soft Copy of Pictures with Cover</li>'+
		'<li>With Hair and Make Up Artist</li>'+
		'</ul>';
	}

// clear
    if (picture_type == "") {
        document.getElementById('promo').innerHTML = "";
    } 
}
</script>
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
				<li class="current_page_item"><a href="resched.php">Rescheduling of Reservations</a></li>
			<li><a href="../index.php">Logout</a></li>
			
		</ul>
	</div>
	<!-- end #menu -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
			
					<div class="post">
												<img src="images/3.png" width="90%">
						<br><br>

						<p class="meta"><span class="date"></span><span class="posted"></a></span></p>
						<div style="clear: both;">&nbsp;</div>
						<div class="entry">
						<table border="0" width="90%">
							<tr>
								<td valign="top">
						<form action="" method="post">
							<table border="0" width="90%">
							<input type="hidden" name="sched1" value="<?php echo $sched ?>">
							<input type="hidden" name="name" value="<?php echo $name ?>">
							<input type="hidden" name="username" value="<?php echo $username ?>">
							<tr>
									<td style="color:#FFF;">Occasion</td>
									<td>&nbsp;&nbsp;</td>
									<td><input type="text" name="occasion" value="<?php echo $occasion ?>" required readonly></td>
								</tr>
								<tr>
									<td></td>
									<td>&nbsp;&nbsp;</td>
									<td></td>
								</tr>
								<tr>
									<td  style="color:#FFF;" valign="top">Date of Reservation</td>
									<td>&nbsp;&nbsp;</td>
									<td><input type="date" name="date" required value="<?php echo $date ?>"><br>
									 <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
									</td>
								</tr>
								<tr>
									<td></td>
									<td>&nbsp;&nbsp;</td>
									<td></td>
								</tr>
								<tr>
									<td style="color:#FFF;">Package:</td>
									<td>&nbsp;&nbsp;</td>
									<td>
										<select name="package" id="package"  onchange="return picture();" required readonly>
											<option><?php echo $package ?></option>
											
											
										</select>
									</td>
								<tr>
									<td></td>
									<td>&nbsp;&nbsp;</td>
									<td></td>
								</tr>
								<tr>
									<td></td>
									<td>&nbsp;&nbsp;</td>
									<td><input type="submit" name="submit" id="submit" style="width:100px">&nbsp;&nbsp;&nbsp;<input type="reset" value="Reset" style="width:100px">	</td>
								</tr>
								</tr>
							</table>
							</form>
								</td>
								<td width="40%" valign="top">
								<div id="promo">
								
								</div>
								</td>
								</tr>
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
