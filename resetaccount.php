<html>
<head>
<title>Main Login Page</title>
<link href="main.css" rel="stylesheet" type="text/css">
<body>
<div id="main" >
<div id="centercontent" >
<div id="form">
<div style="color:Black;padding:20px;border:2px solid black;text-align:center">
<?php
    // Creating a database connection
    $connection = mysqli_connect("localhost", "root", "", "userdb");
    if ($connection) 
	{
$id=$_POST['id'];
$email = $_REQUEST['email'];
$cemail = $_REQUEST['cemail'];
$password = $_REQUEST['password'];
$cpassword = $_REQUEST['cpassword'];
if(($email==$cemail)&& ($password==$cpassword))
{
	$qry="update registration set email='$email',password='$password' where regid=$id";
	$res=mysqli_query($connection,$qry);
	if($res>0)
	{
		$qry1="update usertable set u_pass='$password' where regid=$id";
		$res1=mysqli_query($connection,$qry1);
			if($res1>0)
			{
				echo "Account Update Successfully";
?>
<a href="mainloginpage.php" id="hov3">Back to Login Page</a>
<?php
			}
}
}
			else 
			{
				echo "data not updated in user";
			}
	}	
else
{
	echo "data not updated";
}	
?>
</div>
</div>
</div>
</div>
</body>
</html>