<?php
include('connection.php');
$username=$_REQUEST['username'];
$qry=mysqli_query($con,"SELECT * FROM reqstaff WHERE username='".$username."';");
if(!$qry)
{
	echo "Not";
}
$r='DELETE FROM `reqstaff` WHERE `username`="'.$username.'"';
$result=mysqli_query($con,$r);
if(!$result)
{
	echo"NOT DELETED";
}
else
{
	header('location:chkstaff.php');
}


?>
