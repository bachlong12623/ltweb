<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
	<link rel="stylesheet" href="../css/admin.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<div class="container">
		<div class="menu">
			<ul>
				<li> <a href="admin.php">Xem tin</a>
				</li>
				<li> <a href="TinTuc.php">Thêm tin</a></li>
			</ul>
		</div>
		<table border="1">
			<tr>
				<th>MST</th>
				<th>Hinh anh</th>
				<th>Tieu de</th>
				<th>Noi dung</th>
				<th>Xóa</th>
			</tr>
			<tr>
				<?php
				include "../connect/conn.php";
				$sql = "SELECT * FROM `tin_tuc`";
				$query = mysqli_query($conn, $sql);
				while ($row = mysqli_fetch_array($query)) {
				?>
			<tr>
				<td><?php echo $row['MST'] ?></td>
				<td><img src="<?php echo $row['Hinh_Anh'] ?>" alt="Sai sai cmnr"></td>
				<td><?php echo $row['Tieu_De'] ?></td>
				<td style="    width: 500px ;"><?php echo substr($row['Noi_Dung'], 0, 100) ?></td>
				<td><a href="delete_news.php?id=<?php echo $row['MST'] ?>"><i class="fa fa-trash-o"></i></a></td>
			</tr>
			<?php } ?>
			</tr>
		</table>
	</div>
</body>

</html>