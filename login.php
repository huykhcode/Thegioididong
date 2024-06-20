<?php
    include "connect.php";
    if (isset($_POST['dangnhap'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $sql = "SELECT * FROM tbl_user WHERE username= '$username' AND password= '$password'";
      $result = mysqli_query($mysqli, $sql);
      if (mysqli_num_rows($result) == 1) {
        header("location: main1.php");
    }
    else {
        echo "Tài khoản hoặc mật khẩu sai";
    }
    }
?>

<form action="login.php" method="post">
    <label>username</label>
    <input type="text"name ="username">
    <label >password</label>
    <input type="password" name="password">
    <button type="submit" name="dangnhap">đăng nhập</button>
    <button type="submit" name="dangnhap"><a href="dangki.php">đăng kí</a></button>

</form>