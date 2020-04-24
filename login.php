<html>
<head>
  <title>Login system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style2.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
  <style>
    body {
  background-image: url('al.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
  <div class="header">
    <b>
      <h1><u>Login</u></h1><b>
  </div>
  <form method="post" target="_top">
    <div class="input-group">
      <label>Username</label> <br>
      <input type="text" name="username" id="U1"value="" required> <br>
    </div>
    <div class="input-group">
      <label>Password</label> <br>
      <input type="password" name="password" id="passwords" value="" required> <br>
    </div>
    <div class="input-group1">
      <br><label> <u>Login as a? </u></label><br />
      <input type="radio" id="admin" name="log" value="Admin" required>Admin <br>
      <input type="radio" id="staff" name="log" value="Staff" required> Staff <br>
      <input type="radio" id="student" name="log" value="Student" required> Student <br>
      <input type="radio" id="alumni" name="log" value="Alumni" required>Alumni </div> <br>
    <div class="input-group"> <br>
      <button type="submit" class="btn" name="login_user">Login </button>
    </div>
    <p> <br>
      Forgot password? <a href="forgot.php">Click here..</a>
    </p>
    <p> <br>
      New member? <a href="askregister.php">Register here..</a>
    </p>


</form></body>
</html>

<?php
include("connection.php");
session_start();
if(isset($_POST['login_user']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$_SESSION["uname"]=$username;
	if(isset($_POST['log']))
	{
		$select=$_POST['log'];

		if($select=="Admin")
		{
			$q='SELECT * FROM `admin` where `username`="'.$username.'" and `password`="'.$password.'"';
			$r=mysqli_query($con,$q);
			if(mysqli_num_rows($r)>0)
			{
        header("Location: admin.html");
			}
			else
			{

				 echo '<script language="javascript"> swal("Invalid Username or Password", "Enter valid Data", "warning", {
  button: "ok",
			});</script>';}
	}}
		if($select=="Staff")
		{
			$q='SELECT * FROM `staff` where `username`="'.$username.'" and `password`="'.$password.'"';
			$r=mysqli_query($con,$q);
			if(mysqli_num_rows($r)>0)
			{
        header("Location: staff.html");
			}
			else
			{

				 echo '<script language="javascript"> swal("Invalid Username or Password", "Enter valid Data", "warning", {
  button: "ok",
			});</script>';}
		}
		if($select=="Student")
		{
			$q='SELECT * FROM `student` where `username`="'.$username.'" and `password`="'.$password.'"';
			$r=mysqli_query($con,$q);
			if(mysqli_num_rows($r)>0)
			{
        header("Location: student.html");
			}
			else
			{
				 echo '<script language="javascript"> swal("Invalid Username or Password", "Enter valid Data", "warning", {
  button: "ok",
});</script>';
			}


		}
    if($select=="Alumni")
		{
			$q='SELECT * FROM `alumni` where `username`="'.$username.'" and `password`="'.$password.'"';
			$r=mysqli_query($con,$q);
			if(mysqli_num_rows($r)>0)
			{
        header("Location: alumni.html");
			}
			else
			{

				 echo '<script language="javascript"> swal("Invalid Username or Password", "Enter valid Data", "warning", {
  button: "ok",
});</script>';
		}
	}
}
?>
