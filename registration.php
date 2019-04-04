<html>
<head>
<title>Main Login Page</title>
<link href="main.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main" >
<div id="centercontent" >
<div id="form">
<?php
    // Creating a database connection
    $connection = mysqli_connect("localhost", "root", "", "userdb");
    if ($connection) 
	{
  	$FirstName =$_REQUEST['FirstName'];
	$LastName = $_REQUEST['LastName'];
	$Email = $_REQUEST['Email'];
	$password = $_REQUEST['password'];
	$Age = $_REQUEST['Age'];
	$gender = $_REQUEST['gender'];
	$commute = $_REQUEST['commute'];
	$basename=$_FILES['photo']['name'];
	$tempname=$_FILES['photo']['tmp_name'];
	$path="images/".$basename;
	move_uploaded_file($tempname,$path);
$qry="insert into registration values('$FirstName','$LastName','$Email','$password','$Age','$gender','$commute','','$path')";
$res=mysqli_query($connection,$qry);
if($res>0)
{
		$qry1="select max(regid) as lastid from registration";
	$res1=mysqli_query($connection,$qry1);
		$row=mysqli_fetch_array($res1);
		$largestid=$row['lastid'];
		$qry2="insert into usertable values('$FirstName','$password','','$largestid')";
	$res2=mysqli_query($connection,$qry2);
	if($res2>0)
	{
		$qry3="insert into transit values('','$commute','$largestid')";
		$res3=mysqli_query($connection,$qry3);
		if($res3>0)
		{
?>
<div style="color:Black;padding:20px;border:2px solid black;text-align:center">
<?php
echo "Registration Successful";
		}
	}
	else
	{
		echo "data not inserted sucessfully";
	}
}
	}    
?>
</div>
<a href="homepage.html" class="hov">Back To Home Page</a>
</div>
</div>
</div>
</body>
</html>