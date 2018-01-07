<!doctype html>
<html lang="en-US">
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<style>
    p{
        border-radius: 25px;
        background-color: rgba(255, 255, 255, 0.884);
    }
    h1{
        text-align: center;
    }
</style>

<body>
	<ul>
        <li><a href="index.php">Sign Up</a></li>
        <li><a href="sign-in.php">Login</a></li>
        <!--<li><a href="trivia.php">Trivia</a></li>-->
        <!--<li><a href="instructions.html">Instructions</a></li>-->
		<li><a href="daily-winner.php">Daily Table</a></li>
		<li><a href="contacts.html">Contact</a></li>
        <li><a href="about.html">About</a></li>
        <div id="logo">
			<img src="logo.gif" align="right" height="55" width="" alt="">
	   </div>
    </ul>

    <p><font size="5" face="arial" color="black">
        <br>
            You have just finished your trivia! Click the button to logout and see the daily winner table.
        <br><br>
    </font></p>
    <button id="submit-btn" type="submit" class="signupbtn" onclick="logout()">Logout</button>
    <script>
        function logout(){
            window.location.replace('logout.php');
        }
    </script>

</body>
</html>