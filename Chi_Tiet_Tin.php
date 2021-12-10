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
    <div style="border: 1px;width: 50%;margin-left: auto;margin-right: auto;">
        <h1><?php echo $row['Tieu_De'] ?></h1><br>
        <img src="<?php echo $row['Hinh_Anh'] ?>" alt=""><br><br>
        <?php echo $row['Noi_Dung'] ?><br><br>     
        <?php echo $row['Thoi_Gian']?>
    </div>
    <div class="footer-background">
        <div class="title">
            <h1>LIÊN HỆ</h1>
        </div>
        <div class="nav-footer">
            <div>
                <h3>TIN TỨC 24h</h3> <br><br>
                <P>
                    Văn phòng đại diện TP.CT <br>
                    Địa chỉ: <a href="">phường An Hòa, quận Ninh Kiều, thành phố Cần Thơ</a> <br>
                    Phone: 0334348565
                </P>
            </div>
            <div>
                <p>
                    Liên hệ đăng tin tức<br><br>
                    hung@gmail.com <br>
                    0233434856
                </p>
            </div>  
            <div>
                <p>
                    Liên hệ nhờ hỗ trợ<br><br>
                    bao@gmail.com <br>
                    0336548565
                </p>
            </div>
        </div>
    </div>
</body>

</html>