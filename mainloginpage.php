<html>
<head>
<title>Main Login Page</title>
<link href="main.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main" >
<div id="centercontent" >
<div id="form">
<div class="formcontent">
<div id="logo"><a href="homepage.html"/><img src="images/logo.jpg"/></a></div>
</div>
<div class="formcontent">
<h1 class="commuter">COMMUTERSCONNECT</h1>
<p class="commuter1">Find your daily travel partner</p>
</div>
<form name="login" align="center" class="loginform" action="login.php" method="post"> 
<table style="margin-left:27%" class="form">
<tr><td class="image" ><img src="images/user.png" width="20"/></td><td class="text"><input type="text" placeholder="username" name="user" /></td></tr>
<tr><td class="image" ><img src="images/password.png" width="20"/></td><td class="text"><input type="password" placeholder="password" name="password"/></td></tr>
<tr><td class="signin"><input type="submit" value="Sign-in" name="signin" class="button"></td>
</form>
<form action="empregistration.php" method="post" name="login" align="center" class="loginform">
<tr><td class="signin">
<input type="submit" value="Sign-up" name="signup" class="button1"></td></tr>
</table>
</form>
</div>
</div>
</div>
</body>
</html>