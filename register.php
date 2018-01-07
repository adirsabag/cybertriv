<?php
    $link = mysqli_connect("localhost", "root", "", "cybertriv");
    //$link = mysqli_connect("sql211.epizy.com", "epiz_21296255", "dkgpXAxtN4FC", "epiz_21296255_cybertriv");
    if (mysqli_connect_error()){
        die ("There was an error connecting to the database");
    }

    $id = $_POST['id_num'];
    $f_name = ucfirst(strtolower($_POST['first_name']));
    $l_name = ucfirst(strtolower($_POST['last_name']));
    $psw = $_POST['psw'];
    $psw_rpt = $_POST['psw_repeat'];

    $query = "INSERT INTO users (id, first_name, last_name, password, score)
                VALUES ('$id', '$f_name', '$l_name', '$psw', 'NULL')";


    /*if (strlen($psw) < 6 or !preg_match("#[0-9]+#", $psw) or !preg_match("#[a-zA-Z]+#", $psw)) {
        echo "Password must have 6 or more characters, including at least one number and one letter";
    }*/
   if ($psw != $psw_rpt){
        header('Location: index.php');
        exit();
    }
    else{
        mysqli_query($link, $query);
        header('Location: sign-in.php');
    }

?>