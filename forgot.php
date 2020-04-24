<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style2.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>  </head>
<link rel="stylesheet" type="text/css" href="style5.css">
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
<center>
<div class="row">
    <div class="col-md-9 col-md-offset-2">
        <form role="form" method="post">
            <div class="row">
                <div class="col-sm-9 form-group">
                    <label for="uname">Username </label>
                    <input type="text" class="form-control" id="uname" name="uname" value="" maxlength="10" placeholder="Enter your name" required="">
                </div>
            </div>
            <div class="input-group">
             <label>Password</label>
             <input type="password" name="password" id="passwords" minlength="8">
            </div>
            <div class="input-group">
             <label>Confirm password</label>
             <input type="password" name="password_2" id="confy" minlenght="8">
            </div>
            <div class="input-group1">
              <br><label> <u>Are you a? </u></label><br />
              <input type="radio" id="staff" name="log" value="staff"> Staff <br>
              <input type="radio" id="student" name="log" value="student"> Student <br>
              <input type="radio" id="admin" name="log" value="admin">Admin<br>

              <input type="radio" id="alumni" name="log" value="alumni">Alumni </div> <br>
            <div class="input-group"> <br>
              <div class="row">
                  <div class="col-sm-9 form-group">
                      <label for="mobile">Mobile Number</label>
                      <input type="text" class="form-control" id="mobile" name="mobile" value="" minlength="10" maxlength="10" placeholder="Enter valid mobile number" required="">
                  </div>
              </div>
            <div class="row">
                <div class="col-sm-9 form-group">
                    <button type="submit" name="sendopt" class="btn btn-lg btn-success btn-block">Send OTP</button>
                </div>
            </div>
            </form>
            <form method="POST" action="">
            <div class="row">
                <div class="col-sm-9 form-group">
                    <label for="otp">OTP</label>
                    <input type="text" class="form-control" id="otp" name="otp" placeholder="Enter OTP" maxlength="5" required="">
                </div>
            </div>

             <div class="row">
                <div class="col-sm-9 form-group">
                    <button type="submit" name="verifyotp" class="btn btn-lg btn-info btn-block">Verify</button>
                </div>
            </div>
        </form>
</div>
</div>
</center>
</p>
</body>
</html>
		<?php
		if(isset($_POST['sendopt']))
    {
      $p1=$_POST['password'];
      $p2=$_POST['password_2'];
      if($p1==$p2)
      {
          require('textlocal.class.php');
          require('credential.php');
          $textlocal = new Textlocal(false,false,'I+mSZhYod+A-MJaO7J03YCebdzB3QkJtvGsz9neWAV');
          $num=$_POST['mobile'];
          $numbers =array($num);
          $sender = 'TXTLCL';
          $otp=mt_rand(10000,99999);
          $message = "Hello".$_POST['uname']."This is your OTP:".$otp;
          try
          {
            $result = $textlocal->sendSms($numbers, $message, $sender);
	          setcookie('otp',$otp);
            echo"<script>alert(OTP SUCCESSFULLY SENT);</script>";
          }
          catch (Exception $e)
          {
            die('Error: ' . $e->getMessage());
		      }
      }
      if(isset($_POST['verifyotp']))
      {
      	$otp=$_POST['otp'];
      	if($_COOKIE['otp']==$otp)
      	{
            echo"Congratualations,Your mobile number is verified";
            if(isset($_POST['log']))
    	      {
                $conn = new mysqli("localhost", "root" , "4455surE", "ams");
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $username=$_POST['uname'];
            		$select=$_POST['log'];
            	  $q1="UPDATE `".$select."` SET `password`='".$p1."' WHERE `username`='".$username."';";
                if ($conn->query($q1) === TRUE) {
                    echo '<script language="JavaScript">swal("Password Updated","We are logging you out of all devices","success");</script>';
                    header("Location:logout.php");
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                $conn->close();
        	  }
        }
	      else
		        echo '<script language="JavaScript">swal("Please enter correct OTP","","warning");</script>';
      }
      else
      {
        echo '<script language="javascript"> swal("Password Mismatch", "", "warning", {button: "ok",});</script>';
      }
    }
?>
