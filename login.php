<?php
	session_start();
	include('connect.php');
	if (isset($_POST['submit'])) {
	$login=$_POST['username'];
	$password=$_POST['password'];
	$result=mysql_query("SELECT * FROM login WHERE username='$login' AND password='$password'")or die (mysql_error());
	
$count=mysql_num_rows($result);
$row=mysql_fetch_array($result);
		
		if ($count > 0){
		$_SESSION['SESS_MEMBER_ID'] = isset($member['id']);
	$login = $_POST['username'];
	$password = $_POST['password'];
	$result = mysql_query("SELECT * FROM login WHERE username='$login' AND password='$password'")or die (mysql_error());
	while($row = mysql_fetch_array($result))
		{
		$position = $row['type'];
		}
	if ($position=='admin')
	{
		$qry="SELECT * FROM login WHERE username='$login' AND password='$password'";
		$result=mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				session_regenerate_id();
				$member = mysql_fetch_assoc($result);
				$_SESSION['SESS_MEMBER_ID'] = $member['id'];
				session_write_close();
				header("location: admin/index.php");
				exit();
			}else {
				header("location: index.php");
				exit();
			}
		}else {
			die("Query failed");
		}
	}
	if ($position=='user')
	{
		$qry="SELECT * FROM login WHERE username='$login' AND password='$password'";
		$result=mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				session_regenerate_id();
				$member = mysql_fetch_assoc($result);
				$_SESSION['SESS_MEMBER_ID'] = $member['id'];
				$_SESSION['SESS_FIRST_NAME'] = $member['course'];
				session_write_close();
				header("location: user/index.php");
				exit();
			}else {
				header("location: index.php");
				exit();
			}
		}else {
			die("Query failed");
		}
	}
	

	
	
	
	}else{
		 echo "<script type=\"text/javascript\">window.alert('Access Denied!!!.');window.location.href = 'index.php';</script>"; 
   exit;
		}
}
?>