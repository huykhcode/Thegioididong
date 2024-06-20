<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    rel="stylesheet"
    type="text/css"
    href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
  />
<link rel="stylesheet" href="./fontawesome-free-6.5.1-web/css/all.min.css">
<link rel="stylesheet" href="./fontawesome-free-6.5.1-web/js/all.min.js">
<link rel="stylesheet" href="style.css">
    <title>tìm kiếm</title>
</head>
<body>
  
    <div>
        <div class="img-head">
            <div class="img-1">
                <img src="img/img1.png"  alt="">
            </div>
            <div class="img-2">
                <img src="img/img2.png"  alt="">
            </div>
            <div class="img-3">
                <img src="img/img3.png"  alt="">
            </div>
        </div>
    </div>
    <nav>
      <ul>
        <li><a href=""><img src="img/hinhthegioi.png" style="width: 200px;" alt=""></a></li>
        <li><a href="">xem giá, tồn kho tại: Hà Nội<i class="fa-solid fa-caret-down"></i></ion-icon></a></li>

        <!-- <li><input type="text" placeholder="Bạn tìm gì..."><i class="fa-solid fa-magnifying-glass"></i></li> -->
        <li><button>Tài khoản và Đơn hàng</button></li>
        <li><button>Giỏ hàng <i class="fa-solid fa-cart-shopping"></i> </button></li>
        <li><a href="">24h Công Nghệ</a></li>
        <li><a href="">Hỏi Đáp</a></li>
        <li><a href="">Game App</a></li>
      </ul>
    </nav>
    <div class="menu-2">
      <div class="menu-in">
        <ul>
          <li><i class="fa-solid fa-mobile-screen-button"></i> Điện thoại</li>
          <li> <i class="fa-solid fa-laptop"></i>Laptop</li>
          <li> <i class="fa-solid fa-tablet-screen-button"></i>Table</li>
          <li> <i class="fa-solid fa-headphones"></i>Phụ kiện <i class="fa-solid fa-caret-down"></i></li>
          <li>Smatwatch</li>
          <li><i class="fa-solid fa-mobile-retro"></i>Máy cũ,thu cũ<i class="fa-solid fa-caret-down"></i></li>
          <li><i class="fa-solid fa-desktop"></i>PC, máy in<i class="fa-solid fa-caret-down"></i></li>
          <li>Sim, Thẻ cào</li>
          <li>Dịch vụ tiện ích<i class="fa-solid fa-caret-down"></i></li>
        </ul>
      </div>
    </div>
    <?php
    include "connect.php";
      if(isset($_POST['btn'])){
        $timkiem = $_POST['search'];
        $sql = "SELECT * FROM tbl_danhsach WHERE name LIKE '%$timkiem%'";
        $result = mysqli_query($mysqli, $sql);
      }
      else{
       $timkkiem = '';
       $sql = "SELECT * FROM `tbl_danhsach` limit 10";
       $result = mysqli_query($mysqli, $sql);
      }
      
    ?>
    <div>
        <li style="list-style: none;"><form action="timkiem.php" method="post"><input type="text" name="search"><button type="submit" name="btn"><i class="fa-solid fa-magnifying-glass"></i> </button></form></li>
    </div>
    <div class="search">
      <?php
      while($rowtimkiem = mysqli_fetch_array($result)){
      ?>
        <form action="timkiem.php" method="GET">
          <li style="list-style: none;">
            <a href="">
              <img src=" <?php echo $rowtimkiem['img'] ?>">
              <p><?php echo $rowtimkiem['name']?></p>
              <span><?php echo $rowtimkiem['gia']?></span>
            </a>
          </li>
        </form>
      <?php
      }
      ?>
      </div>
  <script
  type="text/javascript"
  src="https://code.jquery.com/jquery-1.11.0.min.js"
></script>
<script
  type="text/javascript"
  src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
></script>
<script
  type="text/javascript"
  src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
></script>
<script src="./style.css"></script>
<script src="./app.js"></script>
</body>