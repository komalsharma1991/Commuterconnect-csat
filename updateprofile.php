<?php
    // Creating a database connection
    $connection = mysqli_connect("localhost", "root", "", "userdb");
    if ($connection) 
	{
$id=$_POST['id'];
$path=$_REQUEST['photo'];
 $FirstName =$_REQUEST['FirstName'];
	$LastName = $_REQUEST['LastName'];
	$Email = $_REQUEST['Email'];
	$password = $_REQUEST['password'];
	$Age = $_REQUEST['age'];
	$gender = $_REQUEST['gender'];
	$commute = $_REQUEST['commute'];
	$basename=$_FILES['myphoto']['name']; 
if(!empty($basename))
{
$tempname=$_FILES['myphoto']['tmp_name'];
$path="images/".$basename;
move_uploaded_file($tempname,$path);
}
	echo $qry="update registration set first_name='$FirstName',last_name='$LastName',email='$Email',password='$password',age='$Age',gender='$gender'
,commute='$commute',photo='$path' where regid=$id";
	$res=mysqli_query($connection,$qry);
	if($res>0)
	{
		echo $qry1="update usertable set u_name='$FirstName',u_pass='$password' where regid=$id";
		$res1=mysqli_query($connection,$qry1);
			if($res1>0)
			{
				header("location:edit.php?ac=$id");
				
			}
			else
			{
				echo "data not updated in user";
			}
	}
}
else
{
	echo "data not updated";
}
?>
