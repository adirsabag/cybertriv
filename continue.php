<?php
    session_start();
    if(isset($_SESSION['iter'])){
        header( "Location: quest.php" );
    }
    else{
        header( "Location: index.php" );
    }
?>