<?php

?>

<!doctype html>
<html lang="en-US">
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

<body>
	<ul>
        <li><a href="index.php">Sign Up</a></li>
        <li><a href="sign-in.php">Login</a></li>
		<!--<li><a href="trivia.php">Trivia</a></li>-->
		<li><a href="instructions.html">Instructions</a></li>
		<li><a href="daily-winner.php">Daily Table</a></li>
		<li><a href="contacts.html">Contact</a></li>
        <li><a href="about.html">About</a></li>
        <div id="logo">
			<img src="logo.gif" align="right" height="55" width="" alt="">
	   </div>
    </ul>
	<form name="form1" action="login.php" method="post">
		<div align="center" class="container">
			<label><b><font face="arial black" color="azure">ID</font></b></label><br>
			<input type="text" placeholder="Enter ID" name="id_num" id="id_num" required>
			<br>
			<label><b><font face="arial black" color="azure">Password</font></b></label><br>
			<input type="password" placeholder="Enter Password" name="psw" id="psw" required>
			<br>

			<div class="clearfix">
				<button id="submit-btn" type="submit" class="signupbtn">Sign Up</button>
		  </div>
		</div>
	  </form>

</body>
</html>