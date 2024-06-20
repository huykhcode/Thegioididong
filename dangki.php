<?php
    include "connect.php";
    if(isset($_POST['btn'])) {
        $id="";
        $username=$_POST['username'];
        $password=$_POST['password'];
        $level=2;

        $sql = "INSERT INTO tbl_user (id,username,password,level) 
        VALUES('$id','$username','$password','$level');
        ";
        mysqli_query($mysqli, $sql);
        header("location: login.php");
    }

?>


<form action="dangki.php" method="post">
    <label for="">username</label>
    <input type="text" name="username">
    <label for="">password</label>
    <input type="password" name="password">
    <button type="submit" name="btn">Đăng kí</button>
</form>