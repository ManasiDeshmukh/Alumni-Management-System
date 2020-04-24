<html>
<head>
  <title>Registration system PHP and MySQL</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style2.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>  </head>
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
  <b> <h1><u>Faculty Register</u></h1><b>
  </div>
  <form method="post" onsubmit="return validation()" enctype="multipart/form-data" action="staffreq.php" target="_top">
    <div class="input-group">
      <label>First Name</label>
      <input type="TEXT" name="fname" value="" id="f1">
    </div>
    <div class="input-group">
        <label>Last Name</label>
        <input type="TEXT" name="lname" value="" id="L1">
      </div>
  <div class="input-group">
   <label>Username</label>
   <input type="text" name="username" value="" id="U1">
  </div>
  <div class="input-group">
   <label>Email</label>
   <input type="email" name="email" value="" id="e1">
  </div>
  <div class="input-group">
   <label>Password</label>
   <input type="password" name="password" id="passwords">
  </div>
  <div class="input-group">
   <label>Confirm password</label>
   <input type="password" name="password_2" id="confy">
  </div>

<div class="input-group">
   <label>Date of birth</label>
   <input type="date" name="dob" value=""> <br>
  </div> <br>
   <div class="input-group1">
   <label>Gender</label><br/><br>
  <input type="radio" id="male" name="gender" value="Male">Male <span>
   <input type="radio" id="female" name="gender" value="Female"  > Female
    <input type="radio" id="other" name="gender" value="Other"  > Other</div>
 <br> <div class="input-group">

<div class="input-group">
<label> Department </label>
<select name="dept" id="dep"><br>
   <option value="CS">Computer science</option>
   <option value="IT">Information and technology</option>
   <option value="ELEC">Electronics</option>
   <option value="EXTC">Electronics and telecommunication</option>
<option value="MECH">Mechanical</option>
<option value="CIVIL">Civil</option>
<option value="PROD">Production</option>
<option value="TEXT">Textile</option>
<br> <br></select>
  </div>
  <div class="input-group">
    <label>Year of Joining</label>
    <input type="number" name="yr_joining" value="">
  </div>

<div class="input-group">
   <label>Security Question</label>
     <select name="secq" id="sq">
	  <option value="-1">select</option>
   <option value="1">Enter your primary school name?</option>
   <option value="2">Enter your pet name?</option>
   <option value="3">Enter your childhood bestfriend?</option>
   <option value="4">Enter your parent's birth-date?</option><br><br><br>
</select> <br>

  </div>



      <div class="input-group">
       <label>Security Answer</label>
       <input type="text" name="seca" value="" id="sqa">
      </div>
      <div class="form-group">
      <label for="file">Profile Pic:  </label>
      <input type="file" name="file" id="file" class="form-control" required>
      </div>
<div class="input-group"> <br>
<button type="submit" class="btn" name="reg_user">Register </button>
  </div>
  <p> <br>
  Already a member? <a href="login.php">Sign in</a>
  </p><script type="text/javascript">
function validation()
{
	var FIRST=document.getElementById('f1').value;
	var LAST=document.getElementById('L1').value;
	var user=document.getElementById('U1').value;
	var emailid=document.getElementById('e1').value;
	var p1=document.getElementById('passwords').value;
	var p2=document.getElementById('confy').value;
var dop=document.getElementById('dep').value;
var sa=document.getElementById('sq').value;
var ss=document.getElementById('sqa').value;

	if(FIRST==""){
swal("Please Enter First Name", "", "warning", {
  button: "ok",
});
	return false;
	}


var letters = /^[A-Za-z]+$/;
   if(!FIRST.match(letters))
   {  swal( "Enter valid First Name", "Numeric value is not allowed","warning", {
  button: "ok",
});
	return false;

}

	if(LAST==""){
swal("Please Enter Last Name", "", "warning", {
  button: "ok",
});
	return false;
	}
	 if(!LAST.match(letters))
   {  swal("Enter valid Last Name","Numeric value is not allowed",  "warning", {
  button: "ok",
});
	return false;

}
	if(user.match(letters))
   {  swal( "Enter valid username", "Only Numeric value is allowed","warning", {
  button: "ok",
});
	return false;

}


	if(user==""){
swal("Please Enter username", "", "warning", {
  button: "ok",
});
	return false;
}




if(emailid==""){
swal("Please Enter email-id", "", "warning", {
  button: "ok",
});

	return false;
}

if(emailid.indexOf('@')<=0)
{
swal("Invalid Emailid", "Please Enter valid emialid", "warning", {
  button: "ok",
});

	return false;
}
	 if(p1==""){
swal("Please Enter Password", "", "warning", {
  button: "ok",
});

	return false;}

if((p1.length<=7)){
	swal("Enter valid password","Password should contain atleast 8 chars",  "warning", {
  button: "ok",
});

	return false;}

if(p2==""){
swal("Enter password", "", "warning", {
  button: "ok",
});

	return false;}


if(p1!=p2){
	swal("Enter valid password", "Password and confirm password does not match", "warning", {
  button: "ok",
});

	return false;
}


	if(dop=="dp")
	{
swal("Please select department", "", "warning", {
  button: "Ok",
});

	return false;
	}

	if(sa=="-1")
	{
		swal("Please select security Question", "", "warning", {
  button: "Ok",
});
	return false;
	}
if(ss=="")
	{
		swal("Please Enter security answer", "", "warning", {
  button: "Ok",
});

	return false;
	}

}

</script>
  </form>
 </body>
</html>
