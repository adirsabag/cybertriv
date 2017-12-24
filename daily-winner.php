<?php

    $connection = mysqli_connect("localhost", "root", "", "cybertriv"); //The Blank string is the password
    mysqli_select_db($connection, 'users');

    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query) or die('unable to connect*');
?>


<!doctype html>
<html lang="en-US">
    <head>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>

</head>
<body>
	<ul>
		<li><a href="index.php">Sign Up</a></li>
		<li><a href="sign-in.php">Login</a></li>
		<!--<li><a href="trivia.php">Trivia</a></li>-->
		<li><a href="daily-winner.php">Daily Table</a></li>
		<li><a href="contacts.html">Contact</a></li>
		<li><a href="about.html">About</a></li>
		<div id="logo">
			<img src="logo.gif" align="right" height="55" width="" alt="">
	   </div>
    </ul>
<!--style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;" -->
    <table id="myTable" border="0" align="center">
      <thead>
        <tr>
          <th>ID</th>
          <th>FIRST NAME</th>
          <th>LAST NAME</th>
          <th>SCORE</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysqli_fetch_assoc($result) ){
            echo
            "<tr>
              <td>{$row['id']}</td>
              <td>{$row['first_name']}</td>
              <td>{$row['last_name']}</td>
              <td>{$row['score']}</td>
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
<br>

<p>
    <div style="text-align:center;">
        <button id="btn" onclick="sortByScore()">Sort by score</button>
        <button id="btn" onclick="sortByFirstName()">Sort by first name</button>
        <button id="btn" onclick="sortByLastName()">Sort by last name</button>
        <button id="btn" onclick="sortByID()">Sort by ID</button>
        </div>
    </p>

<script>
function sortByScore() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("myTable");
  switching = true;

  while (switching) {
    switching = false;
    rows = table.getElementsByTagName("TR");

    for (i = 1; i < (rows.length - 1); i++) {
      shouldSwitch = false;

      x = rows[i].getElementsByTagName("TD")[3];
      y = rows[i + 1].getElementsByTagName("TD")[3];

      if ((x.innerHTML - y.innerHTML) == 0){
        shouldSwitch= false;
      }
      else if ((x.innerHTML - y.innerHTML) < 0) {
        shouldSwitch= true;
        break;
      }
    }
    if (shouldSwitch) {
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}

function sortByFirstName() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("myTable");
  switching = true;

  while (switching) {
    switching = false;
    rows = table.getElementsByTagName("TR");

    for (i = 1; i < (rows.length - 1); i++) {
      shouldSwitch = false;

      x = rows[i].getElementsByTagName("TD")[1];
      y = rows[i + 1].getElementsByTagName("TD")[1];

    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        shouldSwitch= true;
        break;
      }
    }
    if (shouldSwitch) {
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}

function sortByLastName() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("myTable");
  switching = true;

  while (switching) {
    switching = false;
    rows = table.getElementsByTagName("TR");

    for (i = 1; i < (rows.length - 1); i++) {
      shouldSwitch = false;

      x = rows[i].getElementsByTagName("TD")[2];
      y = rows[i + 1].getElementsByTagName("TD")[2];

    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        shouldSwitch= true;
        break;
      }
    }
    if (shouldSwitch) {
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}

function sortByID() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("myTable");
  switching = true;

  while (switching) {
    switching = false;
    rows = table.getElementsByTagName("TR");

    for (i = 1; i < (rows.length - 1); i++) {
      shouldSwitch = false;

      x = rows[i].getElementsByTagName("TD")[0];
      y = rows[i + 1].getElementsByTagName("TD")[0];

      if ((x.innerHTML - y.innerHTML) == 0){
        shouldSwitch= false;
      }
      else if ((x.innerHTML - y.innerHTML) < 0) {
        shouldSwitch= true;
        break;
      }
    }
    if (shouldSwitch) {
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}
</script>

</body>
</html>
