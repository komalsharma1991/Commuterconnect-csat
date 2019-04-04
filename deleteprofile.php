<html>
<head>
<title>Main Login Page</title>
<link href="main.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main" >
<div id="centercontent" >
<div id="form">
<div style="color:Black;padding:20px;border:2px solid black;text-align:center">
<?php
$connection = mysqli_connect("localhost", "root", "", "userdb");
    if($connection) 
	{
		$id=$_REQUEST['ac'];
	$qry="delete from registration where regid=$id";
$res=mysqli_query($connection,$qry);
if($res>0)
{
 echo "Account Deleted Successfully";
}
	}
else
{
 echo "data not deleted";
}	
?>
<a href="homepage.html" id="hov3">Back to Home Page</a>
</div>
</div>
</div>
</div>
</body>
</html>