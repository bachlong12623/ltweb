<?php
session_start();
if(!isset($_SESSION['username']))
header("Location: login.php");
?>
<?php
$url = $_GET['id'];
include '../connect/conn.php';
if(mysqli_query($conn,"DELETE FROM `tin_tuc` WHERE `tin_tuc`.`MST` = $url"))
{
	echo "Xóa tin có mã ".$url." thành công";
	echo "<br>";
	echo "<a href='admin.php'>Quay về trang admin</a>";
}
?>