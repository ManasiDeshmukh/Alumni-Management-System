<html>
<head>
<title> contact us </title>
<link rel="stylesheet" type="text/css" href="style3.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<style>
body {
  background-image: url('contact.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
<form method="post"  onsubmit="return validation()" >
  <div class="header1" style="background-image:url(qcu.jpg); background-size:cover; width:70%; float:left" >
<div class="container">
  <div style="text-align:center">
    <h2>Hey, your suggestions are most welcome</h2>
<h3>Leave us a message here:</3>
  </div>

<center>
    <div class="cont">


        <label for="fname" >First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Type your name here..." required>
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Type your last name here..." required>

        <label for="country">Country</label>
        <select id="country1" name="country" >
          <option value="India" >India</option>
          <option value="Germany" >Germany</option>
          <option value="usa" >USA</option>
        </select>

        <label for="subject">Subject</label>
        <textarea id="subject1" name="subject" placeholder="Your views are precious..Write something here.." style="height:170px" required></textarea>
        <input type="submit" value="Submit" name="submit">
    </div>
</center>
  </div>
</div>

</form><div class="header1" style="width:25%; float:left; height:100%"><div class="container">
<center>
<table width="100%">
<tr><td align="center"><img src="cup.png" width="50" height="50"></td></tr>
<tr><td align="center"><font color='black' face="Papyrus" size="5">9619384455</font></td></tr>
<tr><td align="center"><font color="black" face="Papyrus" size="5">9920022044</font></td></tr>
<tr><td align="center"><img src="cue.png" width="50" height="50"></td></tr>
<tr><td align="center"><font color="black" face="Papyrus" size="5">developer@gmis.org</font></td></tr>
<tr><td align="center"><font color="black" face="Papyrus"size="3">  </font></td></tr>
<tr><td align="center"><a href="https://www.facebook.com/srushti123shah" target="_blank"><img src="cuf.png" width="100" height="100"></a></td></tr>
<tr><td align="center"><a href="https://www.instagram.com/ssrushti/" target="_blank"><img src="cui.png" width="100" height="100"></a></td></tr>
<tr><td align="center"><a href="https://twitter.com/SrushtiShah2" target="_blank"><img src="cut.png" width="100" height="100"></a></font></center></td></tr>
</table>
</div></body>
</html>
<?php
$con=mysqli_connect("localhost","root","4455surE","ams");

	if(isset($_POST['submit']))
	{
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$cou=$_POST['country'];
	$sub=$_POST['subject'];

$q='insert into `contactus`(`fname`,`lname`,`country`,`words`) VALUES("'.$fname.'","'.$lname.'","'.$cou.'","'.$sub.'")';
			$r=mysqli_query($con,$q);
			if($r==TRUE)

echo "<script language='javascript'>swal('Thank-you for suggestion!', '', 'success');</script>";
else
	echo '<script language="javascript"> swal("Not more than 300 chars allowed in subject field", "Enter valid Data", "warning", {
  button: "ok",
			});</script>';
}?>
