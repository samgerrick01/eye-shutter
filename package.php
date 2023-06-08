<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Online Reservation for Eye Shutter</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<style type="text/css">
@import "gallery.css";
   
</style>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
  jQuery(document).ready(function($) {
  
	 $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
	
    })
	</script>
  
 <script src="jquery/jquery.min.js"></script>
    <script src="jquery/jquery-ui.min.js"></script>

<script type="text/javascript" src="jquery-1.9.1.js"></script>
</head>
 


<script src="jquery.backstretch.js"></script>
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
		
		<center><img src="images/banner.png" width="800px;" height="150px;"></center>
		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="how.php">How to Reserve</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="contact.php">Contact Information</a></li>
			<li><a href="register.php">Register</a></li>
			<li class="current_page_item"><a href="package.php">Packages</a></li>
			<li><a href="terms.php">Terms and Condition</a></li>
		</ul>
	</div>
	<!-- end #menu -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">

					<div class="post">
						<img src="images/3.png" width="40%">
						<p class="meta"><span class="date"></span><span class="posted"></a></span></p>
						<div style="clear: both;">&nbsp;</div>
						<div class="entry">
						<table border="0" width="100%">
						<tr>
							<td valign="top" width="50%">
 <a class="button-show"  href="pack.php?id=Event Package - Package - A&price=17,500" style="cursor: pointer;" rel="facebox"><img src="images/packages/1.png" width="100%"></a>    
		<div id="box" style="display: none;">
		
		<?php

include('connect.php');
echo '<ul>';
$result = mysql_query("SELECT * FROM package WHERE package = 'Event Package - Package - A'");
while($row = mysql_fetch_array($result))
{
echo '<li>'.$row["promo"].'</li>';

}
echo'</ul>';

?>
		
		</div>

</td>
<td valign="top" width="50%">
 <a class="button-show"  href="pack.php?id=Event Package - Package - B&price=27,500" style="cursor: pointer;" rel="facebox"><img src="images/packages/2.png" width="100%"></a>
		<div id="box1" style="display: none;">
		
				<?php

include('connect.php');
echo '<ul>';
$result = mysql_query("SELECT * FROM package WHERE package = 'Event Package - Package - B'");
while($row = mysql_fetch_array($result))
{
echo '<li>'.$row["promo"].'</li>';

}
echo'</ul>';

?>
		
		</div>
</td>
<tr>
<td valign="top">
<a class="button-show"  href="pack.php?id=Event Package - Package - C&price=32,500" style="cursor: pointer;" rel="facebox"><img src="images/packages/3.png" width="100%"></a>
		<div id="box2" style="display: none;">
		
				<?php

include('connect.php');
echo '<ul>';
$result = mysql_query("SELECT * FROM package WHERE package = 'Event Package - Package - C'");
while($row = mysql_fetch_array($result))
{
echo '<li>'.$row["promo"].'</li>';

}
echo'</ul>';

?>
		
		</div>
		</td>
		<td valign="top">
		
<a class="button-show"  href="pack.php?id=Event Package - Package - D&price=37,500" style="cursor: pointer;" rel="facebox"><img src="images/packages/4.png" width="100%"></a>
		<div id="box3" style="display: none;">
		
				<?php

include('connect.php');
echo '<ul>';
$result = mysql_query("SELECT * FROM package WHERE package = 'Event Package - Package - D'");
while($row = mysql_fetch_array($result))
{
echo '<li>'.$row["promo"].'</li>';

}
echo'</ul>';

?>
		
		</div>
		</td>
		</tr>
		<tr>
		<td valign="top" colspan="2"><center>
<a class="button-show"  href="pack.php?id=Event Package - Package - E&price=47,500" style="cursor: pointer;" rel="facebox"><img src="images/packages/5.png" width="50%"></a>
		<div id="box4" style="display: none;">
		
				<?php

include('connect.php');
echo '<ul>';
$result = mysql_query("SELECT * FROM package WHERE package = 'Event Package - Package - E'");
while($row = mysql_fetch_array($result))
{
echo '<li>'.$row["promo"].'</li>';

}
echo'</ul>';

?>
		</div>
		</td>
		</tr>
</table>

						</div>
						<img src="images/4.png" width="100%">
						<p class="meta"><span class="date"></span><span class="posted"></a></span></p>
						<div style="clear: both;">&nbsp;</div>
						<div class="entry">
						<table border="0" width="100%">
							<tr>
							<td valign="top" width="50%">
<a class="button-show"  href="pack.php?id=Photoshoot Package Indoor - Package - I&price=300" style="cursor: pointer;" rel="facebox"><img src="images/packages/i1.png" width="100%"></a>
		<div id="box5" style="display: none;">
				<?php

include('connect.php');
echo '<ul>';
$result = mysql_query("SELECT * FROM package WHERE package = 'Photoshoot Package Indoor - Package - I'");
while($row = mysql_fetch_array($result))
{
echo '<li>'.$row["promo"].'</li>';

}
echo'</ul>';

?>
		</div>
		</td>
		<td valign="top">
<a class="button-show"  href="pack.php?id=Photoshoot Package Indoor - Package - II&price=400" style="cursor: pointer;" rel="facebox"><img src="images/packages/i2.png" width="100%"></a>
		<div id="box6" style="display: none;">
						<?php

include('connect.php');
echo '<ul>';
$result = mysql_query("SELECT * FROM package WHERE package = 'Photoshoot Package Indoor - Package - II'");
while($row = mysql_fetch_array($result))
{
echo '<li>'.$row["promo"].'</li>';

}
echo'</ul>';

?>
		</div>
		</td>
		</tr>
		<tr>
		<td valign="top">
<a class="button-show"  href="pack.php?id=Photoshoot Package Indoor - Package - III&price=800" style="cursor: pointer;" rel="facebox"><img src="images/packages/i3.png" width="100%"></a>
		<div id="box7" style="display: none;">
						<?php

include('connect.php');
echo '<ul>';
$result = mysql_query("SELECT * FROM package WHERE package = 'Photoshoot Package Indoor - Package - III'");
while($row = mysql_fetch_array($result))
{
echo '<li>'.$row["promo"].'</li>';

}
echo'</ul>';

?>
		</div>
		</td>
		<td valign="top" colspan="2">
<a class="button-show"  href="pack.php?id=Photoshoot Package Indoor - Package - IV&price=1,200" style="cursor: pointer;" rel="facebox"><img src="images/packages/i4.png" width="100%"></a>
		<div id="box8" style="display: none;">
						<?php

include('connect.php');
echo '<ul>';
$result = mysql_query("SELECT * FROM package WHERE package = 'Photoshoot Package Indoor - Package - IV'");
while($row = mysql_fetch_array($result))
{
echo '<li>'.$row["promo"].'</li>';

}
echo'</ul>';

?>
		</div>
		</td>
		</tr>
		<tr>
		<td valign="top" colspan="2"><center>
<a class="button-show"  href="pack.php?id=Photoshoot Package Indoor - Package - V&price=1,200" style="cursor: pointer;" rel="facebox"><img src="images/packages/v.png" width="50%">></a>
		<div id="box9" style="display: none;">
						<?php

include('connect.php');
echo '<ul>';
$result = mysql_query("SELECT * FROM package WHERE package = 'Photoshoot Package Indoor - Package - V'");
while($row = mysql_fetch_array($result))
{
echo '<li>'.$row["promo"].'</li>';

}
echo'</ul>';

?>
		</td>
		</tr>
</table>
		</div>
						
	<img src="images/5.png" width="100%">
						<p class="meta"><span class="date"></span><span class="posted"></a></span></p>
						<div style="clear: both;">&nbsp;</div>
						<div class="entry">
						<table border="0" width="100%">
						<tr>
						<td valign="top">
<a class="button-show"  href="pack.php?id=Photoshoot Package Outdoor - Package - I&price=1,500" style="cursor: pointer;" rel="facebox"><img src="images/packages/i1.png" width="100%"></a>
		<div id="box10" style="display: none;">
						<?php

include('connect.php');
echo '<ul>';
$result = mysql_query("SELECT * FROM package WHERE package = 'Photoshoot Package Outdoor - Package - I'");
while($row = mysql_fetch_array($result))
{
echo '<li>'.$row["promo"].'</li>';

}
echo'</ul>';

?>
		</div>
		</td>
		<td valign="top">
<a class="button-show"  href="pack.php?id=Photoshoot Package Outdoor - Package - II&price=2,000" style="cursor: pointer;" rel="facebox"><img src="images/packages/i2.png" width="100%"></a>
		<div id="box11" style="display: none;">
								<?php

include('connect.php');
echo '<ul>';
$result = mysql_query("SELECT * FROM package WHERE package = 'Photoshoot Package Outdoor - Package - II'");
while($row = mysql_fetch_array($result))
{
echo '<li>'.$row["promo"].'</li>';

}
echo'</ul>';

?>
		</div>
		</td>
		</tr>
		<tr>
		<td valign="top">
<a class="button-show"  href="pack.php?id=Photoshoot Package Outdoor - Package - III&price=2,500" style="cursor: pointer;" rel="facebox"><img src="images/packages/i3.png" width="100%"></a>
		<div id="box12" style="display: none;">
								<?php

include('connect.php');
echo '<ul>';
$result = mysql_query("SELECT * FROM package WHERE package = 'Photoshoot Package Outdoor - Package - III'");
while($row = mysql_fetch_array($result))
{
echo '<li>'.$row["promo"].'</li>';

}
echo'</ul>';

?>
		</div>
		</td>
		<td valign="top">
<a class="button-show"  href="pack.php?id=Photoshoot Package Outdoor - Package - IV&price=4,000" style="cursor: pointer;" rel="facebox"><img src="images/packages/i4.png" width="100%"></a>
		<div id="box13" style="display: none;">
								<?php

include('connect.php');
echo '<ul>';
$result = mysql_query("SELECT * FROM package WHERE package = 'Photoshoot Package Outdoor - Package - IV'");
while($row = mysql_fetch_array($result))
{
echo '<li>'.$row["promo"].'</li>';

}
echo'</ul>';

?>		
</td>
</tr>		
</table>
		</div>
		<br><br>						
						
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
