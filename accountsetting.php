<?php
$connection = mysqli_connect("localhost", "root", "", "userdb");
    if($connection) 
	{
		$id=$_REQUEST['ac'];
		$qry="select * from registration where regid=$id";
		$res=mysqli_query($connection,$qry);
		$row=mysqli_fetch_array($res);
			}
?>
<html>
<head>
<title>Main Login Page</title>
<link href="main.css" rel="stylesheet" type="text/css">
<body>
<div id="main" >
<div id="centercontent" >


<div id="form">



<form name="registration" align="center" class="loginform" action="resetaccount.php" enctype="multipart/form-data" method="post">
<input type="hidden" name="id" value="<?php echo $row['regid'] ?>"/>
     <table>
	 <tr><h1 class="reg">General Account Settings</h1></tr>
		
		<tr><td><label><b>E-mail</b></label></td>
		<td><input type="text" placeholder="Enter E-mail" name="email" required></br></td></tr>
		<tr><td><label><b>Confirm E-mail</b></label></td>
		<td><input type="text" placeholder="Re-Enter E-mail" name="cemail" required></br></td></tr>
		<tr><td><label><b>Password</b></label></td>
		<td><input type="password" placeholder="Enter Password" name="password" required></br></td></tr>
        <tr><td><label><b>Confirm Password</b></label></td>
		<td><input type="password" placeholder="Re-Enter Password" name="cpassword" required></br></td></tr>
		
        <tr><td><input type="submit" value="Save Changes" name="btn_update" class="savebtn" /></td>
		<td><a href="mainloginpage.php" class="hov1">Cancel</a></td>
		</tr>
     </table>
</form>	 

</div>



</div>



</div>
</body>
</html>