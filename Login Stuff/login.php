<?php


if(isset($_POST["username"]) || isset($_POST["password"]))
{
			require_once '../config.php';
			require_once 'login.js';

			$g_link = mysql_connect('localhost', $g_username, $g_password); //TODO use a persistant database connections

			mysql_select_db('stt', $g_link);

			$query = "SELECT * FROM `students` WHERE 1";

			if(!$g_link)
				 {
				 die("Connection failed: " . mysql_connect_error());
				 }
	
		$query = "SELECT * FROM `students` WHERE 1";
		$result = mysql_query($query);
		$row = mysql_fetch_assoc($result);
	
		if($_POST["username"] === $row["username"])
		{
			header('location:10.1.50.69');
		}
	
		if($_POST["username"] !== $row["username"])
		{
			echo"You did a bad";
		}

			mysql_close($g_link);

}

else
{
?>
	<html>
	<head>
		<titlePlease type your Username and Password... </title>
			<script language="JavaScript" type="text/JavaScript" src="login.js"></script>
	<body background= "http://www.pptwallpapers.com/uploads/abstract-blue-grid-backgrounds-powerpoint.jpg">
		<form name="LogMeIn" method="post">
			<br>
			<center>
				Username:
				<input type="text" name="username" style="background:#bfbfbf;color:#212121;border-color:#212121;" onFocus="this.style.background = '#ffffff';" onBlur="this.style.background = '#bfbfbf';">
				<br>Password:
				<input type="password" name="password" style="background:#bfbfbf;color:#212121;border-color:#212121;" onFocus="this.style.background = '#ffffff';" onBlur="this.style.background = '#bfbfbf';">
				<br>
				<input type="button" value="Login" onClick="Login(this.form);" style="background:#bfbfbf;color:#000000;border-color:#212121;" onMouseOver="this.style.color = '#404040';" onMouseOut="this.style.color = '#000000';" onFocusr="this.style.color = '#404040';"
				onBlur="this.style.color = '#000000';">
			</center>
			<br>
		</form>
	</body>
	</head>
	</html>
<?php
}