<?php

    $link = mysqli_connect("localhost", "root", "", "cybertriv");
    if (mysqli_connect_error()){
        die ("There was an error connecting to the database");
    }

    $query = "SELECT * FROM 'users'";
    $query = "INSERT INTO users (id, first_name, last_name, password, score) VALUES ('999888', 'mike', 'svid', 'gfhtr', 'NULL')";

    $res = mysqli_query($link, $query);

    if (!$res) {
        printf("Error message: %s\n", mysqli_error($link));
    }
    echo "ADIR****";

    if ($result = mysqli_query($link, $query)){
        $row = mysqli_fetch_array($result);
        print_r($row);
        echo "your name is"." ".$row['first_name'];
    }

    $name = "adir";
    $string = "adir sabag";
    $score = 0;
    $answer = false;

   /* if ($answer == true){

    }*/

?>


<form method="post">
</form>
