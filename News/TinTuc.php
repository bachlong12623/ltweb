<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Thêm Tin Tức</title>
</head>

<body>
	<?php require_once '../connect/conn.php' ?>
	<?php
    if (isset($_POST['add'])) {
        $hinhanh = $_POST['Hinhanh'];
        $tieude = $_POST['TieuDe'];
        $noidung = $_POST['NoiDung'];

        if ($conn->query("INSERT INTO `tin_tuc` (`MST`, `Hinh_Anh`, `Tieu_De`, `Noi_Dung`) VALUES (NULL, '$hinhanh', '$tieude', '$noidung')
             ")) {
            echo "<script>alert('Thêm Thành Công!');</script>";
        } else {
            echo "<script>alert('Thêm Thất Bại!');</script>";
        }
    }
    $conn->close();
    ?>



	<div class="container">
		<form method="POST" action="">
			<div class="TT">
				<label for="Hinhanh">Hinh_Anh</label>
				<input name="Hinhanh" class="form-control" placeholder="Hình Ảnh">
			</div>
			<div class="TT">
				<label for="TieuDe">Tieu_De</label>
				<input name="TieuDe" class="form-control" placeholder="Tiêu Đề">
			</div>
			<div class="TT">
				<label for="NoiDung">Noi_Dung</label>
				<input name="NoiDung" class="form-control" placeholder="Nội Dung">
			</div>
			<button type="submit" class="btn btn-primary" name="add">Thêm</button>
		</form>
	</div>
</body>

</html>