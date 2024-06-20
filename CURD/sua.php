<?php
$id = $_GET['sid'];

require_once('config.php');

$sua_sql = "SELECT * FROM tbl_dt WHERE id=$id";

$result = mysqli_query($mysqli, $sua_sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Sửa DT</title>
</head>
<body>
    <div class="container">
        <h1>Sửa DT</h1>
        <form action="update.php" method="post">
            <input type="hidden" name="sid" value="<?php echo $id;?>" id="">
            <div class="form-group"><label for="TenDT">Tên Điện Thoại</label><input type="text" id="TenDT" class="form-control" name="TenDT" value="<?php echo $row['Tendt'] ?>"></div>
            <div class="form-group"><label for="Gia">Giá</label><input type="text" id="Gia" name="Gia" class="form-control" value="<?php echo $row['Gia'] ?>"></div>
            <button type="submit" class="btn btn-primary">Sửa</button>
        </form>
    </div>
</body>
</html>
