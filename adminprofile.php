<html>
<head>
<style>
.column {
  float: left;
  width: 20%;
  padding: 10px;
  margin:30px;
  font-size: 20px;
  font-family:initial
}

.parts{
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
 transition: 0.3s;
 width: 100%;
 border-radius: 5px;
 padding: 20px;
 margin:30px;
 background-image: linear-gradient(to bottom, rgba(4,3,255,0), rgba(179, 179, 255,1));
}
.each{

}
select{
  height:50px;
  font-size:25px
}

.updatebox{
    display: none;
    bottom: 0;
    right: 15px;
    z-index: 9;
    padding:10px;
    font-size: 25px;
    background-color: rgb(204, 204, 255);
		margin:20px

}
.nobutton{
  background-color: inherit;
  border: none;
 text-decoration: none;
}
.subbutton {
  background-color: #001a33	;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
}
input{
  height:50px;
  font-size:20px;
}
input[radio]{ margin: .4rem;}
body{
  background-image: linear-gradient(to bottom, rgba(4,3,255,0), rgba(179, 179, 255,1));

}
.data{
  font-size: 32px;
  margin:20px;
  padding:10px;
}
.subbutton:hover {opacity: 1}

</style>
</head>
<body bgcolor="">
  <script>
  function showfname(){
    var x = document.getElementById("fname");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
  function showlname(){
    var x = document.getElementById("lname");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
  function showdob(){
    var x = document.getElementById("dob");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
  function showyr_joining(){
    var x = document.getElementById("yr_joining");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
  function showemail(){
    var x = document.getElementById("email");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
  function showgender(){
    var x = document.getElementById("gender");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
  function showfile(){
    var x = document.getElementById("file");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
  </script>
<?php
ob_start();
session_start();
  $conn = new mysqli("localhost", "root", "4455surE", "ams");
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  else
  {
    $q='select * from `admin` where `username`="'.$_SESSION['uname'].'"';
  	$r=mysqli_query($conn,$q);
  	if(mysqli_num_rows($r)>0)
  	{

    $row=mysqli_fetch_assoc($r);
      echo '<div class="column"><center>';
          echo '<div class="parts" name="mainprofile"><div id="data" class="data"><b>Username:  </b>' . $row['username'].'</div>';
          echo '<form role="form" method="post"><div id="data" class=""><img src="'.$row['file'].'" height="200px" width="200px" style="  border-radius: 50%;"/><button type="button" class="nobutton" onclick="showfile()"><img src="edit.png" height="20px" width="20px"/></button></div></form>';
          echo '<div id="file" class="updatebox" style="display:none"><form method="post" role="form" enctype="multipart/form-data" >Upload New Image<input type="file" name="file" id="file" class="form-control" ><button class="subbutton" type="submit" name="submitfile">Update</button></form></div>
          <form method="post" role="form" action="forgot.php">
          <button class="subbutton" type="submit" name="chgpwd">Change Password</button>
          </form></div></div></div></center>';
          echo '<div class="column" style="width:65%"><div class="parts" name="personal"><font size="6" face="Hectiva" color="navy" style=" text-shadow: 1px 1px;"><b>Personal Details</b></font>
<form role="form" method="post"><div id="data" class="data"><b>First Name:</b>  ' . $row['fname'].'<button type="button" class="nobutton" onclick="showfname()"><img src="edit.png" height="20px" width="20px"/></button></div></form>';
          echo '<div id="fname" class="updatebox" style="display:none"><form method="post" role="form" >Enter updated First Name<input type="text" name="fnamenew" value=""><button class="subbutton" type="submit" name="submitfname">Update</button></form></div>';
          echo '<form role="form" method="post"><div id="data" class="data"><b>Last Name</b>:  ' . $row['lname'].'<button type="button" class="nobutton" onclick="showlname()"><img src="edit.png" height="20px" width="20px"/></button></div></form>';
          echo '<div id="lname" class="updatebox" style="display:none"><form method="post" role="form" >Enter updated Last Name<input type="text" name="lnamenew" value=""><button class="subbutton" type="submit" name="submitlname">Update</button></form></div>';
          echo '<form role="form" method="post"><div id="data" class="data"><b>Date of Birth</b>:  ' . $row['dob'].'<button type="button" class="nobutton" onclick="showdob()"><img src="edit.png" height="20px" width="20px"/></button></div></form>';
          echo '<div id="dob" class="updatebox" style="display:none"><form method="post" role="form" >Enter updated Date of Birth <input type="date" name="dobnew" value=""><button class="subbutton" type="submit" name="submitdob">Update</button></form></div>';
          echo '<form role="form" method="post"><div id="data" class="data"><b>Gender</b>: ' . $row['gender'].'<button type="button" class="nobutton" onclick="showgender()"><img src="edit.png" height="20px" width="20px"/></button></div></form>';
          echo '<div id="gender" class="updatebox" style="display:none"><form method="post" role="form" >Gender: <input type="radio" id="male" name="gendernew" value="Male">Male <span><input type="radio" id="female" name="gendernew" value="Female"> Female<input type="radio" id="other" name="gendernew" value="Other"> Other<button class="subbutton" type="submit" name="submitgender">Update</button></form></div>';
        	echo '<form role="form" method="post"><div id="data" class="data"><b>Year of Joining: </b>' . $row['yr_joining'].'<button type="button" class="nobutton" onclick="showyr_joining()"><img src="edit.png" height="20px" width="20px"/></button></div></form>';
          echo '<div id="yr_joining" class="updatebox" style="display:none"><form method="post" role="form" >Enter updated Year of Joining<input type="number" name="yr_joiningnew" value=""><button class="subbutton" type="submit" name="submityr_joining">Update</button></form></div>';
  }}
  if(isset($_POST['submitfile']))
  {
    $files=$_FILES['file'];
    $filename=$files['name'];
    $fileerror=$files['error'];
    $filetmp=$files['tmp_name'];
    $fileext=explode('.',$filename);
    $filecheck=strtolower(end($fileext));
    $fileextstored=array('png','jpg','jpeg');
    if(in_array($filecheck,$fileextstored))
    	{
    		$destinationfile='images/'.$filename;
    		move_uploaded_file($filetmp,$destinationfile);
    $sql='UPDATE `admin` SET `file`="'.$destinationfile.'" where `username`="'.$_SESSION['uname'].'"';
    $r=mysqli_query($conn,$sql);
      header("Refresh:0");}
      else
      echo '<script type="text/javascript">alert("Only png,jpg and jpge file format are allowed");</script>';
  }

if(isset($_POST['submitfname']))
{
  $sql='UPDATE `admin` set `fname`="'.$_POST['fnamenew'].'" where `username`="'.$_SESSION["uname"].'";';
  $r=mysqli_query($conn,$sql);
    header("Refresh:0");
}
if(isset($_POST['submitlname']))
{
  $sql='UPDATE `admin` set `lname`="'.$_POST['lnamenew'].'" where `username`="'.$_SESSION["uname"].'";';
  $r=mysqli_query($conn,$sql);
    header("Refresh:0");
}
if(isset($_POST['submitdob']))
{
  $sql='UPDATE `admin` set `dob`="'.$_POST['dobnew'].'" where `username`="'.$_SESSION["uname"].'";';
  $r=mysqli_query($conn,$sql);
    header("Refresh:0");
}
if(isset($_POST['submitgender']))
{
  $sql='UPDATE `admin` set `gender`="'.$_POST['gendernew'].'" where `username`="'.$_SESSION["uname"].'";';
  $r=mysqli_query($conn,$sql);
    header("Refresh:0");
}


if(isset($_POST['submityr_joining']))
{
  $sql='UPDATE `admin` set `yr_joining`="'.$_POST['yr_joiningnew'].'" where `username`="'.$_SESSION["uname"].'";';
  $r=mysqli_query($conn,$sql);
  header("Refresh:0");
}

if(isset($_POST['submitemail']))
{
  $sql='UPDATE `admin` set `email`="'.$_POST['emailnew'].'" where `username`="'.$_SESSION["uname"].'";';
  $r=mysqli_query($conn,$sql);
  header("Refresh:0");
}

ob_end_flush();
?>
</body>
</html>