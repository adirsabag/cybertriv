<?php
    session_start(); 
?>
<script>
    var pre = new Date();
</script>
<!doctype html>
<html lang="en-US">
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="style-questions.css">
    </head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
   h2 { 
    background-color: rgba(255, 255, 255, 0.884);
    display: block;
    text-align: center;
    font-size: 3em;
    margin-top: 0.83em;
    margin-bottom: 0.83em;
    margin-left: 0;
    margin-right: 0;
    font-weight: bold;
    font-family: arial;
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
        <li><a href="javascript: logout_func();">Logout</a></li>

        <div id="logo">
			<img src="logo.gif" align="right" height="55" width="" alt="">
       </div>
       <div style="color: orange">
			<li style="float: right;"><?php if (isset($_SESSION['user'])){ echo "Hello, "."{$_SESSION['first_name']}";} ?></li>
        </div>
    </ul>

    <h2 style="color:black;">
        <?php
            echo $_SESSION['question'];
        ?>
    </h2>
    <p><font size="5" face="arial" color="black">

            <div id="quiz" style="text-align:center;">
            <button id="trivia-btn2" onclick="hint1();">Hint 1</button>
            <button id="trivia-btn2" onclick="hint2();">Hint 2</button><br><br>

            <button id="trivia-btn" onclick="answer(1);"><?php echo $_SESSION['answer1']; ?></button><br>
            <button id="trivia-btn" onclick="answer(2);"><?php echo $_SESSION['answer2']; ?></button><br>
            <button id="trivia-btn" onclick="answer(3);"><?php echo $_SESSION['answer3']; ?></button><br>
            <button id="trivia-btn" onclick="answer(4);"><?php echo $_SESSION['answer4']; ?></button><br>
            <div id="results"></div>   

        </font>
        </p>

    </p>
    <script>

        function timer(){
            var post = new Date();
            var diff = (post - pre) / 1000;
            return diff;
        }

        function logout_func(){
			var con = confirm('By pressing OK, you will lose any progress you made in the trivia and will be redirected to the daily winner table.');
			if (con == true){
				window.location.replace('logout.php');
			}
		}

        function hint1(){
            var w = <?php echo $_SESSION['wheel1']; ?>;
            var con = confirm("WARNING! Using a hint will cost you 2 points");
            if (con == true){
                alert("Answer " + w + " is " + " wrong ");
                var p = parseInt((sessionStorage.getItem("points")), 10) - 2;
                sessionStorage.setItem("points", p);
            }
        }
        function hint2(){
            var w = <?php echo $_SESSION['wheel2']; ?>;
            var con = confirm("WARNING! Using a hint will cost you 2 points");
            if (con == true){
                alert("Answer " + w + " is " + " wrong ");
                var p = parseInt((sessionStorage.getItem("points")), 10) - 2;
                sessionStorage.setItem("points", p);
            }
        }

        function answer(x){
            var diff = timer();
            var s = <?php echo $_SESSION['ans']; ?>;

            if (s == x){
                right(diff);
            }
            else{
                wrong();
            }
        }

        function right(diff) {
            var iter = <?php echo $_SESSION['iter']; ?>;
            if (diff <= 10){
                var p = parseInt((sessionStorage.getItem("points")), 10) + 15;
                alert('You have got time bonus! +5');
            }
            else{
                var p = parseInt((sessionStorage.getItem("points")), 10) + 10;
            }
            sessionStorage.setItem("points", p);
            console.log(p);
            alert("You are right!");

            if (iter > 3){
                points_update();
            }
            else{
                window.location.replace('generate.php');
            }
        }

        function wrong() {
            var iter = <?php echo $_SESSION['iter']; ?>;
            alert("You are wrong!");
            if (iter > 3){
                points_update();
            }
            else{
                window.location.replace('generate.php');
            }
        }

        function points_update(){
            var p = parseInt((sessionStorage.getItem("points")), 10);
            $.ajax({  
                type: 'POST',  
                url: 'score-update.php', 
                data: {points: p},
                /*success: function(data) {
                alert("Data was succesfully captured");
                }*/
            });
            window.location.replace('finish.php');
        }
    </script>
</body>
</html>