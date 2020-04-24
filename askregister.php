<html>
<head>
  <title>Login system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style2.css">
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
      <h1><u>Registration</u></h1><b>
  </div>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="input-group1">
      <br><label> <u>Are you a? </u></label><br />
      <input type="radio" id="staff" name="log" value="Staff"> Staff <br>
      <input type="radio" id="student" name="log" value="Student"> Student <br>
      <input type="radio" id="alumni" name="log" value="Alumni">Alumni </div> <br>
    <div class="input-group"> <br>
      <button type="submit" class="btn" name="login_user">Submit </button>
    </div>
  </form>
</body>

</html>

<?php
	if(isset($_POST['log']))
	{
		$select=$_POST['log'];
		echo $select;

		if($select=="Staff")
		{
      header("Location: staff_reg.php");

		}
		if($select=="Student")
		{
      header("Location: student_reg.php");

		}
    if($select=="Alumni")
		{
      header("Location: alumni_reg.php");

    		}
	}
?>
