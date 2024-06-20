<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>ADD DT</title>
</head>
<body>
    <div class="container">
    <table class="table">
    <thead>
      <tr>
        <th>Tên Điện Thoại</th>
        <th>Giá</th>
        <th>Thao tác</th>
      </tr>
    </thead>
    <tbody>
        <?php
        require_once("config.php");

        $lietke_sql = "SELECT * FROM tbl_dt order by Tendt, Gia";

        $result = mysqli_query($mysqli, $lietke_sql);

        while ($r = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?php echo $r['Tendt']; ?></td>
                <td><?php echo $r['Gia']; ?></td>
                <td><a href="sua.php?sid=<?php echo $r['id']; ?>" class="btn btn-info">Sửa</a> 
                <a  href=" xoa.php?sid=<?php echo $r['id']; ?>" class="btn btn-danger" >Xóa</a></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
  </table>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
  Thêm
</button>
    </div>
    <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Thêm</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="add.php" method="post">
            <div class="form-group"><label for="TenDT">Tên Điện Thoại</label><input type="text" id="TenDT" class="form-control" name="TenDT"></div>
            <div class="form-group"><label for="Gia">Giá</label><input type="text" id="Gia" name="Gia" class="form-control"></div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
</body>
</html>
