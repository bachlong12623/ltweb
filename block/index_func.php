<?php
 function laytin($n,$conn)
 {
       $sql="select * from tin_tuc order by MST desc limit $n";
       $result=mysqli_query($conn,$sql);
       return $result;
 }
 
 
?>