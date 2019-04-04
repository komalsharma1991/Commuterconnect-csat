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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
<div id="main" >
<div id="centercontent" >
<div class="header">
<div class="lefthead"><img src="<?php echo $row['photo']?>" alt="noimg" width="100px" height="100px" style="border-radius:50%;margin-left:15px"></div>
<div class="centerhead"><h4 class="profile">User Profile</h4></div>
<div class="righthead">
<a href="accountsetting.php?ac=<?php echo $row['regid'];?>" name="account" value="Account" class="account" value="Account">Account</a>
<a href="mainloginpage.php" name="logout" value="logout" class="account">Logout</a>
<form class="example" action="searchpage.php" style="margin:auto;max-width:300px">
  <input type="text" placeholder="Search.." name="find">
  <button type="submit"><i class="fa fa-search"></i></button>
  <style>
 	body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
    height: 30px;
	    width: 59%;
    margin-left: 12px;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
      margin-top: 15px;
    height: 30px;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
  </style>
</form>
</div>
</div>
<div id="form">
<form name="registration" align="center" class="loginform" action="updateprofile.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $row['regid'] ?>"/>
<input type="hidden" name="photo" value="<?php echo $row['photo'] ?>"/>
<table>
	 <tr><h1 class="reg">Profile</h1></tr>
		<tr><td><label><b>FirstName</b></label></td>
		<td><input type="text" placeholder="Enter FirstName" name="FirstName" value="<?php echo $row['first_name'];?>" required></br></td></tr>
        <tr><td><label><b>LastName</b></label></td>
		<td><input type="text" placeholder="Enter LastName" name="LastName" value="<?php echo $row['last_name'];?>" required></br></td></tr>
		<tr><td><label><b>E-mail</b></label></td>
		<td><input type="text" placeholder="Enter E-mail" name="Email" value="<?php echo $row['email'];?>" required></br></td></tr>
		<tr><td><label><b>Password</b></label></td>
        <td><input type="password" placeholder="Enter Password" name="password" value="<?php echo $row['password'];?>" required></br></td></tr>
		<tr><td><label><b>Age</b></label></td>
		<td><input type="date" name="age" value="<?php echo $row['age'];?>"/></br></td></tr> 
<?php
		$mstatus="unchecked";
		$fstatus="unchecked";
		$ttcstatus="unchecked";
		$mistatus="unchecked";
if($row['gender']=='male')
		{
		$mstatus="checked";
		}
		if($row['gender']=='female')
		{
		$fstatus="checked";
		}
if($row['commute']=='TTC')
		{
		$ttcstatus="checked";
		}
		if($row['commute']=='MiWay')
		{
		$mistatus="checked";
		}		
?>
<tr><td><label><b>Photo</b></label></td>
		<td><input type="file"  name="myphoto" ><img src="<?php echo $row['photo']?>" height="50px" width="50px" alt="noimg"></td></tr> 
		<tr><td ><label><b>Gender</b></label></td>
		<td><input type="radio" name="gender" value="male" <?php echo $mstatus; ?>> Male
            <input type="radio" name="gender" Value="female" <?php echo $fstatus; ?>> Female<br> </br></td>
		</tr>
		<tr><td><label><b>Commute Using</b></label></td>
		<td><select name="commute">
		  <option value="TTC" <?php echo $ttcstatus; ?> >TTC</option>
		 <option value="Toronto Subway">Toronto Subway</option>
		  <option value="Toronto Streetcar System">Toronto Streetcar System</option>
		  <option value="York Region Trnasit">York Region Transit</option>
		  <option value="Viva Rapid Transit">Viva Rapid Transit</option>
		  <option value="OC Transpo">OC Transpo</option>
		  <option value="O-Train">O-Train</option>
		  <option value="Durham Region Transit">Durham Region Transit</option>
		  <option value="Brampton Transit">Brampton Transit</option>
		  <option value="Zum">Zum</option>
		  <option value="Hamilton Street Railway">Hamilton Street Railway</option>
		  <option value="Grand  River Transit">Grand  River Transit</option>
		  <option value="Ion rapid Transit">Ion rapid Transit</option>
		  <option value="London Transit">London Transit</option>
		  <option value="Transit Windsor">Transit Windsor</option>
		  <option value="Oakville Transit">Oakville Transit</option>
		  <option value="Burlington Transit">Burlington Transit</option>
		  <option value="Sadbury Transit">Sadbury Transit</option>
		  <option value="Barrie Transit">Barrie Transit</option>
		  <option value="Go Transit">Go Transit</option>
		  <option value="St. Catharines Transit">MiWay</option>
		  <option value="Guelph Transit">Guelph Transit</option>
		  <option value="Kingston Transit">Kingston Transit</option>
		  <option value="Milton Transit">Milton Transit</option>
		  <option value="Thunder Bay Transit">Thunder Bay Transit</option>
		  <option value="Niagara Falls Transit">Niagara Falls Transit</option>
		  <option value="North Bay Transit">North Bay Transit</option>
		</select></br></td></tr>
		<tr><td><input type="submit" value="update" name="btn_update"/>
		</td></tr>
     </table>
</form>	 
</div>
</div>
</div>
</body>
</html>