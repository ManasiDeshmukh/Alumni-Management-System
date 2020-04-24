<?php
$servername = "localhost";
$username = "root";
$password = "4455surE";
$dbname = "ams";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gen'];
$dob=$_POST['dob'];
$yr_passing=$_POST['yr_passing'];
$course=$_POST['course'];
$dept=$_POST['dept'];
$secq=$_POST['secq'];
$seca=$_POST['seca'];
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

  	$sql1 = "SELECT * FROM student WHERE username='$username'";
  	$results = mysqli_query($conn, $sql1);
  	if (mysqli_num_rows($results) > 0){
  	  echo '<script language="javascript">alert("Username already taken");location.href = "student_reg.php";</script>';
}

$sql1 = "SELECT * FROM reqstudent WHERE username='$username'";
$results = mysqli_query($conn, $sql1);
if (mysqli_num_rows($results) > 0){
  echo '<script language="javascript">alert("Username already taken");location.href = "student_reg.php";</script>';
}
$sql1 = "SELECT * FROM alumni WHERE username='$username'";
$results = mysqli_query($conn, $sql1);
if (mysqli_num_rows($results) > 0){
  echo '<script language="javascript">alert("Username already taken");location.href = "student_reg.php";</script>';
}
$sql1 = "SELECT * FROM reqalumni WHERE username='$username'";
$results = mysqli_query($conn, $sql1);
if (mysqli_num_rows($results) > 0){
  echo '<script language="javascript">alert("Username already taken");location.href = "student_reg.php";</script>';
}
$sql1 = "SELECT * FROM staff WHERE username='$username'";
$results = mysqli_query($conn, $sql1);
if (mysqli_num_rows($results) > 0){
  echo '<script language="javascript">alert("Username already taken");location.href = "student_reg.php";</script>';
}
$sql1 = "SELECT * FROM reqstaff WHERE username='$username'";
$results = mysqli_query($conn, $sql1);
if (mysqli_num_rows($results) > 0){
  echo '<script language="javascript">alert("Username already taken");location.href = "student_reg.php";</script>';
}
$sql1 = "SELECT * FROM admin WHERE username='$username'";
$results = mysqli_query($conn, $sql1);
if (mysqli_num_rows($results) > 0){
  echo '<script language="javascript">alert("Username already taken");location.href = "student_reg.php";</script>';
}
 else{


$sql = "INSERT INTO reqstudent (username, password, fname, lname, gender, dob, yr_passing, dept, course,  secq, seca, email,file)
                   VALUES ($username,'$password','$fname','$lname','$gender','$dob',$yr_passing,'$dept','$course','$secq','$seca','$email','$destinationfile')";
if ($conn->query($sql) === TRUE) {

      echo '<script language="JavaScript">swal("Account Request send","Wait till confirmation","sucess");</script>';
      header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}}
else
echo '<script type="text/javascript">alert("Only png,jpg and jpge file format are allowed");location.href="student_reg.php";</script>';

$conn->close();
?>
