<?php
    session_start();

    if( !isset($_SESSION['email'])){
        header('location:login.php');
    }
?>
<h1>dây là trang admin</h1>