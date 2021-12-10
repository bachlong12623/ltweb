<?php
require 'connect/conn.php';
$loaitin = $_GET['loaitin'];
$sql = "SELECT * FROM tin_tuc WHERE `Loai_Tin` = '$loaitin'";
$result = mysqli_query($conn, $sql);
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
    <div class="Big">
        <?php
        while ($tin = mysqli_fetch_array($result)) {

        ?>
            <div class=fixed>
                <img src="<?php echo $tin['Hinh_Anh'] ?>" alt="">
                <div>
                    <a href="Chi_Tiet_Tin.php?id=<?php echo $tin['MST'] ?>"><b><?php echo $tin['Tieu_De']; ?></b></a>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</body>

</html>