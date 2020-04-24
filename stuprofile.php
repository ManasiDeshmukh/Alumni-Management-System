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
  function showyr_passing(){
    var x = document.getElementById("yr_passing");
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
  function showdept(){
    var x = document.getElementById("dept");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
  function showcourse(){
    var x = document.getElementById("course");
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
    $q='select fname,lname,username,dob,email,gender,course,yr_passing,dept,email,file from `student` where `username`="'.$_SESSION['uname'].'"';
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
  				echo '<form role="form" method="post"><div id="data" class="data"><b>E-mail</b>:  ' . $row['email'].'<button type="button" class="nobutton" onclick="showemail()"><img src="edit.png" height="20px" width="20px"/></button></div></form>';
          echo '<div id="email" class="updatebox" style="display:none"><form method="post" role="form" >Enter updated Email<input type="email" name="emailnew" value=""><button class="subbutton" type="submit" name="submitemail">Update</button></form></div>';
          echo '<form role="form" method="post"><div id="data" class="data"><b>Gender</b>: ' . $row['gender'].'<button type="button" class="nobutton" onclick="showgender()"><img src="edit.png" height="20px" width="20px"/></button></div></form>';
          echo '<div id="gender" class="updatebox" style="display:none"><form method="post" role="form" >Gender: <input type="radio" id="male" name="gendernew" value="Male">Male <span><input type="radio" id="female" name="gendernew" value="Female"> Female<input type="radio" id="other" name="gendernew" value="Other"> Other<button class="subbutton" type="submit" name="submitgender">Update</button></form></div>';
          echo '</div><div class="parts" name="institutional"><font size="6" face="Hectiva" color="navy" style=" text-shadow: 1px 1px;"><b>Educational Details</b></font>
<form role="form" method="post"><div id="data" class="data"><b>Deptartment:  </b> ' . $row['dept'].'<button type="button" class="nobutton" onclick="showdept()"><img src="edit.png" height="20px" width="20px"/></button></div></form>';
          echo '<div id="dept" class="updatebox" style="display:none"><form method="post" role="form" >Enter updated Department<select name="deptnew" id="dep"><br><option value="CS">Computer science</option>
             <option value="IT">Information and technology</option>
             <option value="ELEC">Electronics</option>
             <option value="EXTC">Electronics and telecommunication</option>
          <option value="MECH">Mechanical</option>
          <option value="CIVIL">Civil</option>
          <option value="PROD">Production</option>
          <option value="TEXT">Textile</option>
          <br> <br></select><button class="subbutton" type="submit" name="submitdept">Update</button></form></div>';
        	echo '<form role="form" method="post"><div id="data" class="data"><b>Course: </b>' . $row['course'].'<button type="button" class="nobutton" onclick="showcourse()"><img src="edit.png" height="20px" width="20px"/></button></div></form>';
          echo '<div id="course" class="updatebox" style="display:none"><form method="post" role="form" >Enter updated Course  <select name="coursenew" id="selection"><br>
              <option value="Diploma">Diploma</option>
              <option value="B. Tecj">B.tech</option>
              <option value="M. Tech">M.tech</option>
              <option value="MCA">MCA</option>
            </select><button class="subbutton" type="submit" name="submitcourse">Update</button></form></div>';
        	echo '<form role="form" method="post"><div id="data" class="data"><b>Year of Passing: </b>' . $row['yr_passing'].'<button type="button" class="nobutton" onclick="showyr_passing()"><img src="edit.png" height="20px" width="20px"/></button></div></form>';

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
    $sql='UPDATE `student` SET `file`="'.$destinationfile.'" where `username`="'.$_SESSION['uname'].'"';
    $r=mysqli_query($conn,$sql);
      header("Refresh:0");}
      else
      echo '<script type="text/javascript">alert("Only png,jpg and jpge file format are allowed");</script>';
  }

if(isset($_POST['submitfname']))
{
  $sql='UPDATE `student` set `fname`="'.$_POST['fnamenew'].'" where `username`="'.$_SESSION["uname"].'";';
  $r=mysqli_query($conn,$sql);
    header("Refresh:0");
}
if(isset($_POST['submitlname']))
{
  $sql='UPDATE `student` set `lname`="'.$_POST['lnamenew'].'" where `username`="'.$_SESSION["uname"].'";';
  $r=mysqli_query($conn,$sql);
    header("Refresh:0");
}
if(isset($_POST['submitdob']))
{
  $sql='UPDATE `student` set `dob`="'.$_POST['dobnew'].'" where `username`="'.$_SESSION["uname"].'";';
  $r=mysqli_query($conn,$sql);
    header("Refresh:0");
}
if(isset($_POST['submitgender']))
{
  $sql='UPDATE `student` set `gender`="'.$_POST['gendernew'].'" where `username`="'.$_SESSION["uname"].'";';
  $r=mysqli_query($conn,$sql);
    header("Refresh:0");
}
if(isset($_POST['submitdept']))
{
  $sql='UPDATE `student` set `dept`="'.$_POST['deptnew'].'" where `username`="'.$_SESSION["uname"].'";';
  $r=mysqli_query($conn,$sql);
    header("Refresh:0");
}

if(isset($_POST['submityr_passing']))
{
  $sql='UPDATE `student` set `yr_passing`="'.$_POST['yr_passingnew'].'" where `username`="'.$_SESSION["uname"].'";';
  $r=mysqli_query($conn,$sql);
  header("Refresh:0");
}

if(isset($_POST['submitemail']))
{
  $sql='UPDATE `student` set `email`="'.$_POST['emailnew'].'" where `username`="'.$_SESSION["uname"].'";';
  $r=mysqli_query($conn,$sql);
  header("Refresh:0");
}
if(isset($_POST['submitcourse']))
{
  $sql='UPDATE `student` set `course`="'.$_POST['coursenew'].'" where `username`="'.$_SESSION["uname"].'";';
  $r=mysqli_query($conn,$sql);
  header("Refresh:0");
}
ob_end_flush();
?>
</body>
</html>
