<?php  
 $connect = mysqli_connect('localhost', 'id2026509_fvaldez', '1234567', 'id2026509_registration');  
 $sql = "DELETE FROM tbl_sample WHERE id = '".$_POST["id"]."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Deleted';  
 }  
 ?>