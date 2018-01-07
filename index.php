<?php
	session_start();
?>

<!doctype html>
<html lang="en-US">

<head>
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>

	<ul>
		<li><a href="index.php">Sign Up</a></li>
		<li><a href="sign-in.php">Login</a></li>
		<li><a href="continue.php">Trivia</a></li>
		<!--<li><a href="instructions.html">Instructions</a></li>-->
		<li><a href="daily-winner.php">Daily Table</a></li>
		<li><a href="contacts.php">Contact</a></li>
		<li><a href="about.php">About</a></li>
		<li><a href="javascript: logout_func();">Logout</a></li>

		<div id="logo">
			<img src="logo.gif" align="right" height="55" width="" alt="">
	   </div>
	   <div style="color: orange">
			<li style="float: right;"><?php if (isset($_SESSION['user'])){ echo "Hello, "."{$_SESSION['first_name']}";} ?></li>
		</div>
	</ul>

	<form name="form1" action="register.php" method="post">
		<div align="center" class="container">
			<label><b><font face="arial black" color="azure">ID</font></b></label><br>
			<input type="text" placeholder="Enter ID" name="id_num" required>
			<br>
			<label><b><font face="arial black" color="azure">First name</font></b></label><br>
			<input type="text" placeholder="Enter first name" name="first_name" required>
			<br>
			<label><b><font face="arial black" color="azure">Last name</font></b></label><br>
			<input type="text" placeholder="Enter last name" name="last_name" required>
			<br>
			<label><b><font face="arial black" color="azure">Password</font></b></label><br>
			<input type="password" placeholder="Enter Password" name="psw" id="psw" required>
			<br>
			<label><b><font face="arial black" color="azure">Repeat password</font></b></label><br>
			<input type="password" placeholder="Repeat Password" name="psw_repeat" id="psw_repeat" required>
			
			<div class="clearfix" onclick="validatePassword(document.form1.psw)">
				<button id="submit-btn" type="submit" class="signupbtn">Sign Up</button>
		  </div>
		</div>
	  </form>

	<script>
		
		function logout_func(){
			var con = confirm('By pressing OK, you will lose any progress you made in the trivia and will be redirected to the daily winner table.');
			if (con == true){
				window.location.replace('logout.php');
			}
		}

		var password = document.getElementById("psw")
		,confirm_password = document.getElementById("psw_repeat");

		function validatePassword(txt){
			if(password.value != confirm_password.value) {
				confirm_password.setCustomValidity("Passwords Don't Match");
			} else {
				confirm_password.setCustomValidity('');
			}

		}
		password.onchange = validatePassword;
		confirm_password.onkeyup = validatePassword;
</script>

</body>
</html>
