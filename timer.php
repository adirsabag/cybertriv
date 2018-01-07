<?php
    session_start();
    $_SESSION['time_post'] = microtime(true);

    header('Location: quest.php');
?>