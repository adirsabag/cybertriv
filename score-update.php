<?php
    session_start();

    $p = $_POST['points'];
    $id = $_SESSION['user'];

    $link = mysqli_connect("localhost", "root", "", "cybertriv");
    //$link = mysqli_connect("sql211.epizy.com", "epiz_21296255", "dkgpXAxtN4FC", "epiz_21296255_cybertriv");

    //$result = mysqli_query($link, "SELECT * FROM users WHERE id=$id");
    //$row = mysqli_fetch_array($result);

    $sql = "UPDATE users SET score=$p WHERE id=$id";

    if (!mysqli_query($link, $sql)) {
        echo "Error updating record: " . mysqli_error($link);
    }

    mysqli_close($link);

    //header( "Location: q-generate.php" ); // go to finish trivia page

?>