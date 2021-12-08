   <?php
    $sql = "select * from tin_tuc order by MST desc limit 10";
    $result = mysqli_query($conn, $sql);
    while ($tin = mysqli_fetch_array($result)) {
    ?>
     <div class=fix>
       <img src="<?php echo $tin['Hinh_Anh'] ?>" alt="">
       <div>
         <a href="#"><b><?php echo $tin['Tieu_De']; ?></b></a>
       </div>
     </div>
   <?php
    }
    ?>