<html
<head>
  <style>
  button:hover {opacity: 1}

  button {
    background-color: #001a33	;
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    font-size: 18px;
    margin: 5px 10px;
    opacity: 0.6;
    transition: 0.3s;
    display: inline-block;
    text-decoration: none;
    cursor: pointer;
  }
  .innerpara{
      display: none;
      bottom: 0;
      right: 15px;
      z-index: 9;
      padding:10px;
      font-size: 25px;
      background-color: rgb(204, 204, 255);
  		margin:20px

  }
  body{
    background-image: linear-gradient(to bottom, rgba(4,3,255,0), rgba(179, 179, 255,1));
  }
  </style>
</head>
<body>
<font size="6" face="Hectiva" color="navy" style=" text-shadow: 1px 1px;"><b> Filter</b></font><img src="filter.png" height="25px" width="25px"/><br/>
<?php session_start();
?>
<script>
function showdept(){
  var x = document.getElementById("depts");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function showcourse(){
  var x = document.getElementById("courses");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function showstatus(){
  var x = document.getElementById("stat");
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
function showusername(){
  var x = document.getElementById("usernames");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function showfname(){
  var x = document.getElementById("fnames");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function showlname(){
  var x = document.getElementById("lnames");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
    <form method="post" action="searchresult.php" target="result">
<button type="button" onclick="showdept()">Department</button>
<ul>
  <div id="depts" style="display:none" class="innerpara">
    <input type="radio" name="dept" value="CS">Computer science<br>
    <input type="radio" name="dept" value="IT">Information and technology<br>
    <input type="radio" name="dept" value="ELEC">Electronics<br>
    <input type="radio" name="dept" value="EXTC">Electronics and telecommunication<br>
    <input type="radio" name="dept" value="MECH">Mechanical<br>
    <input type="radio" name="dept" value="CIVIL">Civil<br>
    <input type="radio" name="dept" value="PROD">Production<br>
    <input type="radio" name="dept" value="TEXT">Textile<br>
    <button type="submit">GO</button>
</div>
</form>
</ul>
<form method="post" action="searchresult.php" target="result" >
<button type="button" onclick="showcourse()">Courses</button>
<ul>
<div id="courses" style="display:none" class="innerpara">
<input type="radio" name="course" value="Diploma">Diploma
<br><input type="radio" name="course" value="B. Tech">B.tech
<br><input type="radio" name="course" value="M. Tech">M.tech
<br><input type="radio" name="course" value="MCA">MCA<br>
<button type="submit">GO</button>
</form>
</div>
</ul>
<form method="post" action="searchresult.php" target="result" >
<button type="button" name="Year of Passing" onclick="showyr_passing()">Year of Passing</button>
<div id="yr_passing" style="display:none" class="innerpara">
Enter Year of passing: <input type="number" name="yr_passing" value="">
<button type="submit">GO</button>
</form>
</div>
<form method="post" action="searchresult.php" target="result" >
<button type="button" onclick="showstatus()">Status</button>
<div id="stat" style="display:none" class="innerpara">
  <br><input type="radio" name="status" value="emp">Emplyeed
  <br><input type="radio" name="status" value="self">Self-Employeed
  <br><input type="radio" name="status" value="other">Other<br>
  <button type="submit">GO</button>
</form>
</div>
<form method="post" action="searchresult.php" target="result" >
<button type="button" onclick="showusername()">Username</button>
<div id="usernames" style="display:none" class="innerpara">
Enter User Name:  <input type="number" name="username" value=""><button type="submit">Go</button></form>
</div>
<form method="post" action="searchresult.php" target="result" >
<button type="button" onclick="showfname()">First Name</button>
<div id="fnames" style="display:none" class="innerpara">
Enter First Name: <input type="text" name="fname" value="">    <button type="submit">GO</button></form>
<form method="post" action="searchresult.php" target="result" >
</div>

<button type="button" onclick="showlname()">Last Name</button><div id="lnames" style="display:none" class="innerpara">

Enter Last Name:  <input type="text" name="lname" value="">    <button type="submit">GO</button>
</form>
</div>
</form>
</body>
</html>
