<html>
<head>
<title>Main Login Page</title>
<link href="main.css" rel="stylesheet" type="text/css">
<body>
<div id="main" >
<div id="centercontent" >
<div id="form">
<div style="padding:20px;text-align:center;color:black;">
<?php
$connection = mysqli_connect("localhost", "root", "", "userdb");
    if($connection) 
	{
$name = $_REQUEST['find'];
$result = mysqli_query($connection, "SELECT * FROM registration
    WHERE first_name LIKE '%{$name}%' OR last_name LIKE '%{$name}%' OR email LIKE '%{$name}%' OR commute LIKE '%{$name}%'");
	?>
<table align="center" border="1px solid black;" class="searchtable">
	<tr>
	<th class="tabletd">Name</th>
	<th>Photo</th>
	<th>Email</th>
	<th>Commute Using</th>
	</tr>
	<?php
$i=1;
while ($row = mysqli_fetch_array($result))
{	
	?>
<tr>
	<td><?php echo $row['first_name'] . " " . $row['last_name']; ?></td>
	<td><img src="<?php echo $row['photo']; ?>" width="50px" height="50px" alt="noimage"/></td>
       <td> <?php echo $row['email'];?></td>
       <td> <?php echo $row['commute'];?></td>
  </tr>
	<?php
}
}
?>
</table>
<a href="mainloginpage.php" class="hovs">Logout</a>
</div>
</div>
</div>
</div>
</body>
</html>