<?php
    session_start();  
?>
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
        <li><a href="continue.php">Trivia</a></li>
        <!--<li><a href="instructions.html">Instructions</a></li>-->
		<li><a href="daily-winner.php">Daily Table</a></li>
		<li><a href="contacts.php">Contact</a></li>
        <li><a href="about.php">About</a></li>
        <div id="logo">
			<img src="logo.gif" align="right" height="55" width="" alt="">
       </div>
       <div style="color: orange">
			<li style="float: right;"><?php if (isset($_SESSION['user'])){ echo "Hello, "."{$_SESSION['first_name']}";} ?></li>
        </div>
    </ul>
    <h1>
        <font face="impact" color="orange">cyberTriv</font>
    </h1>

    <p><font size="5" face="arial" color="black">
        <br>
            WELCOME!<br>

            These are the instructions to the trivia. By pressing "continue" you will be 
            redirected to the trivia example. Please make sure you fully understand the instructions
            before you continue.
            <br><br>
            1. There are 30 questions in different difficulties. Answering a question will get 
            you to the next one.
            <br><br>
            2. You should choose the right answer out of multiple answers.
            <br><br>
            3. A good response time of 10 seconds or earlier, will lead to bonus points.
            <br><br>
            4. Wrong answer won't reduce points.
            <br><br>
            5. You will be able to use two hints in each question. You can use the hints
            as much as you want, but each hint-use will cost you 2 points, think carefully!
            <br><br>
            By pressing continue, you will redirect to the trivia example, this question won't 
            affect your score, it's just an example.
            <br><br>
            GOOD LUCK!
        <br><br>
    </font></p>

    <button id="submit-btn" type="submit" class="signupbtn" onclick="func()">Continue</button>

    <script>
        function func(){
            window.location.replace('example-trivia.php');
        }

    </script>


</body>
</html>