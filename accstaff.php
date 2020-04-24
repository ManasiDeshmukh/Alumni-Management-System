<?php

include('connection.php');
$username=$_REQUEST['username'];
echo $username;
$qry=mysqli_query($con,"SELECT * FROM `reqstaff` WHERE `username`='".$username."';");
if(!$qry)
{
	echo "Not";
}
$row=mysqli_fetch_assoc($qry);
$q='INSERT INTO `staff` (`dept`,`dob`,`email`,`fname`,`lname`,`password`,`secq`,`seca`,`gender`,`username`,`yr_joining`,`file`)
VALUES ("'.$row["dept"].'","'.$row["dob"].'","'.$row["email"].'","'.$row["fname"].'","'.$row["lname"].'","'.$row["password"].'",
	"'.$row["secq"].'","'.$row["seca"].'","'.$row["gender"].'","'.$row["username"].'","'.$row["yr_joining"].'","'.$row["file"].'")';
				if(mysqli_query($con,$q))
				{
						echo"successful";
				$r='DELETE FROM `reqstaff` WHERE `username`="'.$username.'"';
				$result=mysqli_query($con,$r);
        header("Location:chkstaff.php");
				if(!$result)
				{
					echo"NOT DELETED";
				}

				}
				else
				{
					echo"not inserted";
				}
?>
