<html>
<head>
	<style>
	button:hover {opacity: 1}
	button {
	  border: none;
height: 50px;
width:100px; text-align: center;
	  font-size: 16px;
	  margin: 4px 2px;
	  opacity: 0.6;
	  transition: 0.3s;
	  display: inline-block;
	  text-decoration: none;
	  cursor: pointer;
	}
	a:link {
  text-decoration: none;
	color: white;

}

a:visited {
  text-decoration: none;
	color: white;

}

a:hover {
  text-decoration: none;
	color: white;

}

a:active {
  text-decoration: none;
	color: white;

}
.card{
	box-shadow: 0 5px 10px 0 rgba(0,0,0,0.2);
 transition: 0.3s;
 width: 100%;
 text-align: center;
 border-radius: 5px;
 padding: 20px;
 margin:15px;
 background-image: linear-gradient(to bottom, rgba(4,3,255,0), rgba(179, 179, 255,1));
}
.card-title{
  font-size: 20px;
	box-shadow: 0 2px 2px 0 rgba(0,0,0,0.2);
	text-align:left;
	padding:2px
}
body{
  background-image: linear-gradient(to bottom, rgba(4,3,255,0), rgba(179, 179, 255,1));

}
</style>
</head>
<?php
include('connection.php');
	echo '<font size="6" face="Hectiva" color="navy" style=" text-shadow: 1px 1px;text-align:center"><b> Alumni</b></font>';
$q1="SELECT * FROM `reqalumni`";
$r1=mysqli_query($con,$q1);
$result1=$r1->num_rows;

	while($row1=mysqli_fetch_assoc($r1))
	{
		$fname=$row1['fname'];
		$lname=$row1['lname'];
		$username=$row1['username'];
		$dept=$row1['dept'];
		$year=$row1['yr_passing'];
		$cgpa=$row1['cgpa'];
		$email=$row1['email'];
		$password=$row1['password'];
		$dob=$row1['dob'];
		$gender=$row1['gender'];
		$question=$row1['secq'];
		$answer=$row1['seca'];
		$course=$row1['course'];
		$status=$row1['status'];
		$file=$row1['file'];
		echo '<div class="card" style="width: 20rem;"> <img src="'.$file.'" class="card-img-top" height="200px" width="200px" style="  border-radius: 50%;"/>  <div class="card-body">
		<div class="card-title"><b>Username: </b>'.$username.'</div>';
		echo'	<div class="card-title"><b>First Name:  </b>'.$fname.'</div>';
		echo '	<div class="card-title"><b>Last Name:  </b>'.$lname.'</div>';
		echo '	<div class="card-title"><b>Email:  </b>'.$email.'</div>';
		echo '	<div class="card-title"><b>Year of Passing: </b>'.$year.'</div>';
		echo '	<div class="card-title"><b>Department: </b>'.$dept.'</div></div>';
    ?>
		<div class="twobutton">
    <button style="	  background-color: red	"><a href="accalumni.php?username=<?php echo $username;?>" >Accept</a></button>
    <button style="	  background-color: green	;"><a href="rejalumni.php?username=<?php echo $username;?>" >Reject</a></button>
</div></div>
    	<?php
    	}
        ?>
</html>
