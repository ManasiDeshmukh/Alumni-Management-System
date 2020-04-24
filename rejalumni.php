<?php
include('connection.php');
$username=$_REQUEST['username'];
$qry=mysqli_query($con,"SELECT * FROM reqalumni WHERE username='".$username."';");
if(!$qry)
{
	echo "Not";
}
$r='DELETE FROM `reqalumni` WHERE `username`="'.$username.'"';
$result=mysqli_query($con,$r);
if(!$result)
{
	echo"NOT DELETED";
}
else
{
	header('location:chkalumni.php');
}


?>
