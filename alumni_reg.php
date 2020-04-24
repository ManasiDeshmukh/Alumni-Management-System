<html>

<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style2.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

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
      <h1><u>Register</u></h1><b>
  </div>


  <form method="post" action="alumnireq.php" onsubmit="return validation()" enctype="multipart/form-data" target="_top">
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
      <input type="text" name="email" value="" id="e1">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password" id="passwords">
    </div>
    <div class="input-group">
      <label>Confirm password</label>
      <input type="password" name="conpsw" id="confy">
    </div>

    <div class="input-group">
      <label>Date of birth</label>
      <input type="date" name="dob" value=""> <br>
    </div>

    <div class="input-group1">
      <label>Gender</label><br /><br>
      <input type="radio" id="male" name="gen" value="Male">Male <span>
        <input type="radio" id="female" name="gen" value="Female"> Female
        <input type="radio" id="other" name="gen" value="Other"> Other</div>
    <div class="input-group">
    </div>
    <div class="input-group">
      <label>Year of passing</label>
      <input type="text" name="yr_passing" value="">
    </div>
    <div class="input-group">
      <label>CGPA</label>
      <input type="TEXT" name="cgpa" value="">
    </div>
    <div class="input-group">
      <label>Are you</label>

      <select name="status">
        <option value="emp">Employed</option>
        <option value="self">Self Employed</option>
        <option value="other">other</option>

      </select>

    </div>
    <div class="input-group">
      <label> Course </label>

      <select name="course" id="selection"><br>
        <option value="Diploma">Diploma</option>
        <option value="B. Tech">B.tech</option>
        <option value="M. Tech">M.tech</option>
        <option value="MCA">MCA</option>
      </select>
      <br>
    </div>


    <br>
    <div class="input-group">

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

        </select>
        <br> <br>
      </div>
      <div class="input-group">
        <label>Security Question</label>
        <select name="secq" id="sq">
		<option value="-1">Select security Question</option>
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
      <div class="input-group">
<div class="form-group">
<label for="file">Profile Pic:  </label>
<input type="file" name="file" id="file" class="form-control" required>
</div>
      <div class="input-group"> <br>
        <button type="submit" class="btn" name="reg_user">Register </button>
      </div>
      <p> <br>
        Already a member? <a href="login.php">Sign in</a>
      </p>
  </form>
<script type="text/javascript">
function validation()
{
	var FIRST=document.getElementById('f1').value;
	var LAST=document.getElementById('L1').value;
	var user=document.getElementById('U1').value;
	var emailid=document.getElementById('e1').value;
	var p1=document.getElementById('passwords').value;
	var p2=document.getElementById('confy').value;
	var s1=document.getElementById('selection').value;
var dop=document.getElementById('dep').value;
var sa=document.getElementById('sq').value;
var ss=document.getElementById('sqa').value;

	if(FIRST==""){
swal("Please enter First Name", "", "warning", {button: "ok",});
	return false;
	}
var letters = /^[A-Za-z]+$/;
   if(!FIRST.match(letters))
   {  swal("Enter valid First Name","Numeric value is not allowed", "warning", {
  button: "ok",
});
	return false;

}

	if(LAST==""){
swal("Please enter Last Name", "", "warning", {
  button: "ok",
});
	return false;
	}
	 if(!LAST.match(letters))
   {  swal("Enter valid Last Name", "Numeric value is not allowed", "warning", {
  button: "ok",
});
	return false;

}
	if(user.match(letters))
   {  swal("Enter valid username", "Only Numeric value is allowed", "warning", {
  button: "ok",
});
	return false;

}
	if(user==""){
swal("Please enter username", "", "warning", {
  button: "ok",
});
	return false;
}




if(emailid==""){
swal("Please enter email-id", "", "warning", {
  button: "ok",
});

	return false;
}

if(emailid.indexOf('@')<=0)
{
swal("Invalid Email Id", "Plaese enter valid email-id", "warning", {
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
	swal("Enter valid password", "Password should contain atleast 8 chars", "warning", {
  button: "ok",
});

	return false;}

if(p2==""){
swal("Enter password", "", "warning", {
  button: "ok",
});

	return false;}


if(p1!=p2){
	swal("Password and confirm password does not match", "enter valid password", "warning", {
  button: "ok",
});

	return false;
}
	if(s1=="dip1")
	{
swal("Please select Course", "", "warning", {
  button: "OK",
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
		swal("Please enter security answer", "", "warning", {
  button: "Ok",
});

	return false;
	}

}

</script>
</body>
</html>
