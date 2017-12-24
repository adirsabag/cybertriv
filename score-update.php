<?php
    session_start();
    $id = $_SESSION['user'];

    $link = mysqli_connect("localhost", "root", "", "cybertriv");

    $result = mysqli_query($link, "SELECT * FROM users WHERE id=$id");
    $row = mysqli_fetch_array($result);

    $score = $row['score'];
    $score = $score + 5;

    $sql = "UPDATE users SET score=$score WHERE id=$id";

   /*if (mysqli_query($link, $sql)) {
        echo "Record updated successfully";

    } else {
        echo "Error updating record: " . mysqli_error($link);
    }*/
    if (!mysqli_query($link, $sql)) {
        echo "Error updating record: " . mysqli_error($link);
    }

    mysqli_close($link);

?>