<?php
    session_start();
    session_unset();
    session_destroy();

    // Chuyển hướng người dùng về trang chính sau khi đăng xuất
    header("Location: main.php");
    exit();
?>