<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
</head>

<body>
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
			$query = mysqli_query($conn,$sql);
			print_r($query);
			while($row = mysqli_fetch_array($query)){

			?>
			<td><?php $row['MST'] ?></td>
			<td><?php $row['Hinh_Anh'] ?></td>
			<td><?php $row['Tieu_De'] ?></td>
			<td><?php $row['Noi_Dung'] ?></td>
			<?php } ?>
		</tr>
	</table>
</body>

</html>