<html>
<style>
footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
}

nav {
margin-left:0;
width:100%;
background-color: black;
font-family: sans-serif;
color : white;
font-size:130% ;
padding:5px;
}
</style>
<body>
<div style="border:5px solid black ;width:100%; height:100%;background-size:cover;background-image:url(main.jpg);background-size:full;background-repeat:no-repeat">
<center>
<div style="width:50%; height:70%;margin-top:300px;margin-left:60px">
<center>
<?php 
Session_start();
include("connection1.php");
echo<<<vaga
<form method="post"><br>
<label style="margin-top:20px;font-family:Times New Roman;font-size:30px"><b>Enter Your Name:</b></label><br><br>
<input type="text" name="name" style="width:400px;height:50px;margin-top:20px;border:solid black" placeholder="Enter your username"><br><br>
<input type="submit" name="submit" style="font-family:algerian;font-size:30px;background-color:white;color:blue;border:solid black" value="Submit">
</form>
vaga;
if(isset($_POST['submit']))
{
	$user_name=$_POST['name'];
	if($user_name !="")
	{
		$_SESSION['user_name']=$user_name;
		$q="INSERT INTO `user`(`name`) VALUES('".$user_name."')";
		if(mysqli_query($con,$q))
		{
			echo "you are succesfully registered";
			header('location:chatbox.php');
		}
		else
			echo $q;
		
	
	}
	else
		echo"Enter user name";
}
else
{
	echo "Press the Button Above";
}
?>

</center>
</div>
</center>
</div>
</body>
<footer align="center">             
</footer>
</html>
