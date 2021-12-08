   <?php
    $dstin = laytin(5, $conn);
    while ($tin = mysqli_fetch_array($dstin)) {
    ?>
     <div class=fix>
       <img src="<?php echo $tin['Hinh_Anh'] ?>" alt="">
       <div>
         <a href="#"><?php echo $tin['Tieu_De']; ?></a>
       </div>
     </div>
   <?php
    }
    ?>