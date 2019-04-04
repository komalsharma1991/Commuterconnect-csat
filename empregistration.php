<html>
<head>
<title>Main Login Page</title>
<link href="main.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main" >
<div id="centercontent" >
<div id="form">
<form name="registration" align="center" class="loginform1" enctype="multipart/form-data" action="registration.php" method="post">
     <table class="loginform1">
	 <tr><h1 class="reg">Registration</h1></tr>
		<tr><td><label><b>FirstName</b></label></td>
		<td><input type="text" placeholder="Enter FirstName" name="FirstName" required></br></td></tr>
        <tr><td><label><b>LastName</b></label></td>
		<td><input type="text" placeholder="Enter LastName" name="LastName" required></br></td></tr>
		<tr><td><label><b>E-mail</b></label></td>
		<td><input type="text" placeholder="Enter E-mail" name="Email" required></br></td></tr>
		<tr><td><label><b>Password</b></label></td>
        <td><input type="password" placeholder="Enter Password" name="password" required></br></td></tr>
		<tr style="margin-top:20px"><td><label><b>Age</b></label></td>
		<td><input type="date"name="Age"/></td></tr> 
		<tr><td><label><b>Photo</b></label></td>
		<td><input type="file"  name="photo"/></td></tr> 
		<tr><td><label ><b>Gender</b></label></td>
			<td><input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female"> Female</td>
		</tr>
		<tr><td><label><b>Commute Using</b></label></td>
		<td><select name="commute">
		  <option value="TTC">TTC</option>
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
        <tr><td class="signin"><input type="submit" class="registration" value="Register" onsubmit="regpopup"/></td>
		</tr>
     </table>
</form>	 
</div>
</div>
</div>
</body>
</html>
