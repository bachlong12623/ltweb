<?php
    $severname="localhost";
    $username = "root";
    $password = "";
    $database = "bc_10/12";
     
    $conn = mysqli_connect($severname,$username,$password,$database);
    if(!$conn){
        echo ("Kết nối không thành công");
    }else{
        echo ("kết nối thành công! ");
    }
?>