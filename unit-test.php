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
        <li><a href="unit-test.php">Unit Test</a></li>
		<li><a href="javascript: logout_func();">Logout</a></li>

		<div id="logo">
			<img src="logo.gif" align="right" height="55" width="" alt="">
	   </div>
	   <div style="color: orange">
			<li style="float: right;"><?php if (isset($_SESSION['user'])){ echo "Hello, "."{$_SESSION['first_name']}";} ?></li>
		</div>

	</ul>

    <label><b><font face="arial black" color="azure">Password</font></b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
    <br>
    <label><b><font face="arial black" color="azure">Repeat password</font></b></label><br>
    <input type="password" placeholder="Repeat Password" name="psw_repeat" id="psw_repeat" required>

    <div class="clearfix" onclick="validatePassword()">
				<button id="submit-btn" type="submit" class="signupbtn">Check passwords</button>
		  </div>
    <br><br>

    <label><b><font face="arial black" color="azure">ID</font></b></label><br>
    <input type="password" placeholder="Enter ID" name="id" id="id" required>
    <br>

    <div class="clearfix" onclick="validateID()">
				<button id="submit-btn" type="submit" class="signupbtn">Check ID</button>
		  </div>


	<script>

		function logout_func(){
			var con = confirm('By pressing OK, you will lose any progress you made in the trivia and will be redirected to the daily winner table.');
			if (con == true){
				window.location.replace('logout.php');
			}
		}

        var password = document.getElementById("psw")
		,confirm_password = document.getElementById("psw_repeat");
        var id = document.getElementById("id");
            
        function validatePassword(){
            var txt;
            if(password.value != confirm_password.value) {
                txt = "Passwords don't match";
            } else {
                txt = "Passwords match";
            }
            alert(txt);
        }

        function validateID(){
			var len = (id.value).toString().length;
			var txt;
			if (len != 9){
				txt = "ID number should be 9 digits length";
			}
            else{
                txt = "ID is correct!";
            }
            alert(txt);
		}


    </script>

</body>
</html>