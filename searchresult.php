<html>
<body>
  <head>
    <style>
    body {
	background: #fafafa url(https://jackrugile.com/images/misc/noise-diagonal.png);
	color: #444;
	font: 100%/30px 'Helvetica Neue', helvetica, arial, sans-serif;
	text-shadow: 0 1px 0 #fff;
}

strong {
	font-weight: bold;
}

em {
	font-style: italic;
}

table {
	background: #f5f5f5;
	font-size: 12px;
	margin: 30px auto;
	text-align: left;
	width: 800px;
}

th {
  background-image: linear-gradient(to bottom, rgba(0,0,0,0), rgba(6, 30, 66,1));

	box-shadow: inset 0 1px 0 #999;
  font-weight: bold;
	padding: 10px 15px;
	position: relative;
	text-shadow: 0 1px 0 #000;
  font-size:20px;
  color:white;
  text-shadow: 2px 2px 5px black;

}

th:after {
	background: linear-gradient(rgba(255,255,255,0), rgba(255,255,255,.08));
	content: '';
	display: block;
	height: 25%;
	left: 0;
	margin: 1px 0 0 0;
	position: absolute;
	top: 25%;
	width: 100%;
  text-shadow: 1px 1px;
}
td {

	padding: 10px 15px;
	position: relative;
	transition: all 300ms;
  font-size:16px;
  font-weight: bold;
}

td:first-child {
	box-shadow: inset 1px 0 0 #fff;
}

td:last-child {
	border-right: 1px solid #e8e8e8;
	box-shadow: inset -1px 0 0 #fff;
}

tr {
	background: url(https://jackrugile.com/images/misc/noise-diagonal.png);
}

tr:nth-child(odd) td {
	background: #f1f1f1 url(https://jackrugile.com/images/misc/noise-diagonal.png);
}

tr:last-of-type td {
	box-shadow: inset 0 -1px 0 #fff;
}

tr:last-of-type td:first-child {
	box-shadow: inset 1px -1px 0 #fff;
}

tr:last-of-type td:last-child {
	box-shadow: inset -1px -1px 0 #fff;
}

tbody:hover td {
	color: transparent;
	text-shadow: 0 0 3px #aaa;
}

tbody:hover tr:hover td {
	color: #444;
	text-shadow: 0 1px 0 #fff;
}
    body{
      background-image: linear-gradient(to bottom, rgba(4,3,255,0), rgba(179, 179, 255,1));
    }
    </style>
  </head>
<font size="7" face="Hectiva" color="navy" style=" text-shadow: 1px 1px;"><b>Results</b></font>
    <table class="content-table">
      <?php
      error_reporting(0);

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$con1=new mysqli('localhost','root','4455surE','ams');
{
  if($_POST['dept']!="")
  {
    $parameter="dept";
    $valueof=$_POST['dept'];
    $_POST['dept']="";
  }
  else if($_POST['course']!="")
  {
    $parameter="course";
    $valueof=$_POST['course'];
    $_POST['course']="";
  }
  else if($_POST['status']!="")
  {
    $parameter="status";
    $valueof=$_POST['status'];
    $_POST['status']="";
  }
  else if($_POST['username']!="")
  {
    $parameter="username";
    $valueof=$_POST['username'];
    $_POST['username']="";
  }
  else if($_POST['fname']!="")
  {
    $parameter="fname";
    $valueof=$_POST['fname'];
    $_POST['fname']="";
  }
  else if($_POST['lname']!="")
  {
    $parameter="lname";
    $valueof=$_POST['lname'];
    $_POST['lname']="";
  }
  else if($_POST['yr_passing']!=0)
  {
    $parameter="yr_passing";
    $valueof=$_POST['yr_passing'];
    $_POST['yr_passing']=0;
  }

	$_SESSION['parameter']=$parameter;
  $_SESSION['valueof']=$valueof;
	$q='select fname,lname,username,dob,email,gender,course,yr_passing,dept from `alumni` where `'.$_SESSION['parameter'].'`="'.$_SESSION['valueof'].'"';
	$r=mysqli_query($con1,$q);
	if(mysqli_num_rows($r)>0)
	{
    echo "<tr class='active-row'>";
echo "<th>Firstname</th>";
echo "<th>Lastname</th>";
        echo "<th>Username</th>";
echo "<th>DOB</th>";
        echo "<th>Email</th>";
 echo "<th>Gender</th>";
echo "<th>Dept</th>";
echo "<th>Course</th>";
   echo "<th>Passing Year</th>";

    echo "</tr>";
	while($row=mysqli_fetch_assoc($r))
	{
            echo "<tr class='active-row'>";
			  echo "<td>" . $row['fname'] . "</td>";
			    echo "<td>" . $row['lname'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";

                echo "<td>" . $row['dob'] . "</td>";
				 echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['dept'] . "</td>";
				 echo "<td>" . $row['course'] . "</td>";
				 echo "<td>" . $row['yr_passing'] . "</td>";
            echo "</tr>";
}}
	else
	{
		echo"<h1 style={color:navy;}>No such Alumni Found</h1>";
	}
}}
error_reporting(1);

?>
  </center>
  </table>

</body>

</html>
