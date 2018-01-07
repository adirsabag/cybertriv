<?php
    session_start();
    $id = $_SESSION['iter'];

    $link = mysqli_connect("localhost", "root", "", "cybertriv");
    //$link = mysqli_connect("sql211.epizy.com", "epiz_21296255", "dkgpXAxtN4FC", "epiz_21296255_cybertriv");

    $result = mysqli_query($link, "SELECT * FROM questions WHERE id=$id");
    $row = mysqli_fetch_array($result);

    $question = $row['question'];
    $answer1 =  $row['answer1'];
    $answer2 =  $row['answer2'];
    $answer3 =  $row['answer3'];
    $answer4 =  $row['answer4'];
    $ans =  $row['ans'];
    $wheel1 =  $row['wheel1'];
    $wheel2 =  $row['wheel2'];

    $_SESSION['question'] = $question;
    $_SESSION['answer1'] = $answer1;
    $_SESSION['answer2'] = $answer2;
    $_SESSION['answer3'] = $answer3;
    $_SESSION['answer4'] = $answer4;
    $_SESSION['ans'] = $ans;
    $_SESSION['wheel1'] = $wheel1;
    $_SESSION['wheel2'] = $wheel2;

    $_SESSION['iter'] = $_SESSION['iter'] + 1;
    //$sql = "UPDATE users SET score=$p WHERE id=$id";

    mysqli_close($link);

    header( "Location: quest.php" ); // go to finish trivia page

?>