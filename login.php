<html>
<head>
<title>Main Login Page</title>
<link href="main.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main" >
<div id="centercontent" >
<div id="form">
<div class="delete">
<?php
    // Creating a database connection
    $connection = mysqli_connect("localhost", "root", "", "userdb");
    if ($connection) 
	{
  	$user =$_REQUEST['user'];
	$password = $_REQUEST['password'];
$qry="select * from usertable where u_name='$user' && u_pass='$password'";
$res=mysqli_query($connection,$qry);
$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
$uid=$row['regid'];
$count=mysqli_num_rows($res);
      if($count == 1) {
          header("Location: profile.php?ae=$uid");
      }
	  else {
         ?>
		 <div style="color:Black;padding:20px;border:2px solid black;text-align:center">
		 <?php echo ("\nYour Login Name or Password is invalid");
		 ?>
		 <a href="mainloginpage.php" id="hov3">Back to Login Page</a>
		 <div>
		 <?php
      }
   }
?>
</div>
</div>
</div>
</div>
</body>
</html>