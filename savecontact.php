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
  	$email =$_REQUEST['email'];
	$msg = $_REQUEST['msg'];

$qry="insert into contact values('','$email','$msg')";
$res=mysqli_query($connection,$qry);
?>
<div style="color:Black;padding:20px;border:2px solid black;text-align:center">
<?php
if($res>0)
{

	echo "Message Sent Successfully";
}


	else
	{
		echo "data not inserted sucessfully";
	}

	}    
?>
</div>
<a href="homepage.html" class="hovs">Back To Home Page</a>
</div>
</div>
</div>
</div>
</body>
</html>