<?php
    session_start();

    $link = mysqli_connect("localhost", "root", "", "cybertriv");  
    //$link = mysqli_connect("sql211.epizy.com", "epiz_21296255", "dkgpXAxtN4FC", "epiz_21296255_cybertriv");
    if (mysqli_connect_error()){
        die ("There was an error connecting to the database");
    }

    $id = $_POST['id_num'];
    $psw = $_POST['psw'];
    $flag = false;

    $sql = "SELECT * FROM users";

    /*checks is the user exists in the database*/
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){

            while($row = mysqli_fetch_array($result)){

                if ($row['id'] == $id and $row['password'] == $psw){ 
                    $_SESSION['user'] = $id;
                    $_SESSION['score'] = $row['score'];
                    $_SESSION['first_name'] = $row['first_name'];
                    header('Location: instructions.php');
                }
                else{
                    $flag = true;
                }
            }
            echo "</table>";
            // Free result set
            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    if ($flag == true){
        echo "<script type='text/javascript'>alert('Wrong Username or Password');
        window.location='sign-in.php';
        </script>";
    }

?>