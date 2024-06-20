<?php
    $mysqli = new mysqli("localhost","root","","lab2");

 
    if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    }
    // else {
    //     // echo"thanh cong";
    // }
?>