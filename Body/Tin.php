   <?php
    $sql = "select * from tin_tuc order by MST desc limit 10";
    $result = mysqli_query($conn, $sql);
    while ($tin = mysqli_fetch_array($result)) {
    ?>
     <div class=fix>
       <img src="<?php echo $tin['Hinh_Anh'] ?>" alt="">
       <div>
         <a href="Body/Chi_Tiet_Tin.php?id=<?php echo $tin['MST'] ?>"><b><?php echo $tin['Tieu_De']; ?></b></a>
         <div class="old">
         <?php echo $rew= substr($tin['Noi_Dung'],0, 298) ?>
         <a href="Body/Chi_Tiet_Tin.php?id=<?php echo $tin['MST'] ?>">click để xem thêm...</a>
       </div>
       </div>
     </div>
   <?php
    }
    ?>