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
    #modalContainer {
        background-color:rgba(0, 0, 0, 0.3);
        position:absolute;
    top:0;
        width:100%;
        height:100%;
        left:0px;
        z-index:10000;
        background-image:url(tp.png); /* required by MSIE to prevent actions on lower z-index elements */
    }

    #alertBox {
        position:relative;
        width:33%;
        min-height:100px;
        max-height:400px;
        margin-top:50px;
        border:1px solid #fff;
        background-color:#fff;
        background-repeat:no-repeat;
    top:30%;
    }

    #modalContainer > #alertBox {
        position:fixed;
    }

    #alertBox h1 {
        margin:0;
        font:bold 1em Raleway,arial;
        background-color: darkslateblue;
        color:#FFF;
        border-bottom:1px solid #f97352;
        padding:10px 0 10px 5px;
    }


    #alertBox p {
        height:50px;
        padding-left:5px;
    padding-top:30px;
    text-align:center;
    vertical-align:middle;
    }

    #alertBox #closeBtn {
        display:block;
        position:relative;
        margin:10px auto 10px auto;
        padding:7px;
        border:0 none;
        width:70px;
        text-transform:uppercase;
        text-align:center;
        color:#FFF;
        background-color: darkslateblue;
        border-radius: 0px;
        text-decoration:none;
    outline:0!important;
    }

    /* unrelated styles */

    #mContainer {
        position:relative;
        width:600px;
        margin:auto;
        padding:5px;
        border-top:2px solid #fff;
        border-bottom:2px solid #fff;
    }

    h1,h2 {
        margin:0;
        padding:4px;
    }

    code {
        font-size:1.2em;
        color:#069;
    }

    #credits {
        position:relative;
        margin:25px auto 0px auto;
        width:350px; 
        font:0.7em verdana;
        border-top:1px solid #000;
        border-bottom:1px solid #000;
        height:90px;
        padding-top:4px;
    }

    #credits img {
        float:left;
        margin:5px 10px 5px 0px;
        border:1px solid #000000;
        width:80px;
        height:79px;
    }

    .important {
        background-color:#F5FCC8;
        padding:2px;

    }

    @media (max-width: 600px) 
    {
    #alertBox {
        position:relative;
        width:90%;
    top:30%;
    }
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
    <h1>
        <font face="impact" color="azure">cyberTriv</font>
    </h1>
    <h2 style="color:black;">
    ‘Cyber Security’ is the protection of computers from threats and attacks that originate from the Internet.
    </h2>

    <p><font size="5" face="arial" color="black">

            <div id="quiz" style="text-align:center;">
            <button id="trivia-btn" onclick="createCustomAlert('Cyber Security is the practice of protecting computer systems from threats and attacks that originate from the Internet');">True</button><br>
            <button id="trivia-btn" onclick="createCustomAlert2('It is true! Cyber Security is the practice of protecting computer systems from threats and attacks that originate from the Internet');">False</button>
            <div id="results"></div>   
            <br><br>
        </font>
        </p>
        <br><br>
    </font></p>

    <script>

        var ALERT_TITLE = "Correct answer!";
        var ALERT_BUTTON_TEXT = "Ok";

        if(document.getElementById) {
            window.alert = function(txt) {
                createCustomAlert(txt);
            }
        }

        function createCustomAlert(txt) {
            d = document;

            if(d.getElementById("modalContainer")) return;

            mObj = d.getElementsByTagName("body")[0].appendChild(d.createElement("div"));
            mObj.id = "modalContainer";
            mObj.style.height = d.documentElement.scrollHeight + "px";
            
            alertObj = mObj.appendChild(d.createElement("div"));
            alertObj.id = "alertBox";

            if(d.all && !window.opera) alertObj.style.top = document.documentElement.scrollTop + "px";
            alertObj.style.left = (d.documentElement.scrollWidth - alertObj.offsetWidth)/2 + "px";
            alertObj.style.visiblity="visible";

            h1 = alertObj.appendChild(d.createElement("h1"));
            h1.appendChild(d.createTextNode(ALERT_TITLE));

            msg = alertObj.appendChild(d.createElement("p"));
            //msg.appendChild(d.createTextNode(txt));
            msg.innerHTML = txt;

            btn = alertObj.appendChild(d.createElement("a"));
            btn.id = "closeBtn";
            btn.appendChild(d.createTextNode(ALERT_BUTTON_TEXT));
            btn.href = "#";
            btn.focus();
            btn.onclick = function() { removeCustomAlert();return false; }

            alertObj.style.display = "block";
            
        }

        function removeCustomAlert() {
            document.getElementsByTagName("body")[0].removeChild(document.getElementById("modalContainer"));
            sessionStorage.setItem("points", 5);
            window.location.replace('q-2.php');
        }
        function removeCustomAlert2() {
            document.getElementsByTagName("body")[0].removeChild(document.getElementById("modalContainer"));
            sessionStorage.setItem("points", 0);
            window.location.replace('q-2.php');
        }

        function ful(){
        alert('Alert this pages');
        }


        var ALERT2_TITLE = "Wrong answer!";
        var ALERT2_BUTTON_TEXT = "Ok";

        if(document.getElementById) {
            window.alert = function(txt) {
                createCustomAlert2(txt);
            }
        }

        function createCustomAlert2(txt) {
            d = document;

            if(d.getElementById("modalContainer")) return;

            mObj = d.getElementsByTagName("body")[0].appendChild(d.createElement("div"));
            mObj.id = "modalContainer";
            mObj.style.height = d.documentElement.scrollHeight + "px";
            
            alertObj = mObj.appendChild(d.createElement("div"));
            alertObj.id = "alertBox";

            if(d.all && !window.opera) alertObj.style.top = document.documentElement.scrollTop + "px";
            alertObj.style.left = (d.documentElement.scrollWidth - alertObj.offsetWidth)/2 + "px";
            alertObj.style.visiblity="visible";

            h1 = alertObj.appendChild(d.createElement("h1"));
            h1.appendChild(d.createTextNode(ALERT2_TITLE));

            msg = alertObj.appendChild(d.createElement("p"));
            //msg.appendChild(d.createTextNode(txt));
            msg.innerHTML = txt;

            btn = alertObj.appendChild(d.createElement("a"));
            btn.id = "closeBtn";
            btn.appendChild(d.createTextNode(ALERT2_BUTTON_TEXT));
            btn.href = "#";
            btn.focus();
            btn.onclick = function() { removeCustomAlert2();return false; }

            alertObj.style.display = "block";
            
        }

    </script>


</body>
</html>