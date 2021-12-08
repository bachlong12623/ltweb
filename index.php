<?php
require 'connect/conn.php';
require 'block/index_func.php';
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
    <div class=containerr>
        <div class=left>
            <h1>Tin Thế Giới >></h1>
            <?php
            $sql = "select * from tin_tuc where Loai_Tin = 'TheGioi' order by MST desc limit 5";
            $result = mysqli_query($conn, $sql);
            while ($tin = mysqli_fetch_array($result)) {
            ?>
                <div class=fixed>
                    <img src="<?php echo $tin['Hinh_Anh'] ?>" alt="">
                    <div>
                        <a href="#"><b><?php echo $tin['Tieu_De']; ?></b></a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <div class=center>
            <h1>Tin Tổng Hợp Trong Ngày >></h1>
            <?php
            require 'Body/Tin.php';
            ?>
        </div>
        <div class=right>
            <h1>Tin Thể Thao >></h1>
            <?php
            $sql = "select * from tin_tuc where Loai_Tin = 'TheThao' order by MST desc limit 5";
            $result = mysqli_query($conn, $sql);
            while ($tin = mysqli_fetch_array($result)) {
            ?>
                <div class=fixed>
                    <img src="<?php echo $tin['Hinh_Anh'] ?>" alt="">
                    <div>
                        <a href="#"><b><?php echo $tin['Tieu_De']; ?></b></a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

</body>

</html>