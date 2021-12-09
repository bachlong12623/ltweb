<?php
require 'connect/conn.php';
$id = $_GET['id'];
$sql = "SELECT * FROM tin_tuc where MST = $id";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/css_tin.css">
</head>

<body>

    <?php
    include "block/header.php";
    ?>
    <div class=container>
      <div>
          <h1><?php echo $row['Tieu_De'] ?></h1>
      </div>
      <?php echo $row['Thoi_Gian'] ?>
      <img src="<?php echo $row['Hinh_Anh'] ?>" alt="">
      <div>
      <?php echo $row['Noi_Dung'] ?>
      </div>

    </div>
</body>

</html>