<?php
    session_start();
    session_destroy();
    header( "Location: daily-winner.php" );
?>