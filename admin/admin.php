<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
	<link rel="stylesheet" href="../css/admin.css">
</head>

<body>
	<div class="container">
		<ul>
			<li><a href="admin.php">Xem tin</a></li>
			<li><a href="">Them tin</a></li>
			
		</ul>
		<table>
			<tr>
				<th>MST</th>
				<th>Hinh anh</th>
				<th>Tieu de</th>
				<th>Noi dung</th>
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
				<td> <img src="<?php echo $row['Hinh_Anh'] ?>" alt="Sai sai cmnr"></td>
				<td><?php echo $row['Tieu_De'] ?></td>
				<td><?php echo $row['Noi_Dung'] ?></td>
			</tr>
		<?php } ?>
		</tr>
		</table>
	</div>
</body>

</html>