<?php

session_start();
header('Content-Type: text/html; charset=UTF-8');
if (isset($_POST['dangnhap'])) {
  include('conn.php');
  $username = addslashes($_POST['txtUsername']);
  $password = addslashes($_POST['txtPassword']);
  if (!$username || !$password) {
    echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
  }
  $password = md5($password);
  $sql = "SELECT user, pass from taiKhoan where user = '$username'";
  $query = mysqli_query($conn, $sql);
  if (mysqli_num_rows($query) == 0) {
    echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
  }
  $row = mysqli_fetch_array($query);
  
  if ($password != $row['pass']) {
    echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}
 
//Lưu tên đăng nhập
$_SESSION['username'] = $username;
echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công. <a href='index.html'>Về trang chủ</a>";
die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	

<?php
    require 'diana/conn.php';
    ?>
    <div style="
          margin: auto;
          width: 50%;
          border: 3px solid orangered;
          padding: 10px;
          max-width: 500px;
        ">
      <form action='login.php?do=login' method='POST'>
        <table cellpadding='0' cellspacing='0' border='1'>
          <tr>
            <td>
              Tên đăng nhập :
            </td>
            <td>
              <input type='text' name='txtUsername' />
            </td>
          </tr>
          <tr>
            <td>
              Mật khẩu :
            </td>
            <td>
              <input type='password' name='txtPassword' />
            </td>
          </tr>
        </table>
        <input type='submit' name="dangnhap" value='Đăng nhập' />
        <a href='dangky.php' title='Đăng ký'>Đăng ký</a>
        <a href='destroy.php' title='Đăng ký'>Đăng xuẩt</a>

      </form>
    </div>

</body>
</html>