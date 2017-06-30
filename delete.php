<?php  
 $connect = mysqli_connect('localhost', 'usuario_base_datos', 'contraseña', 'nombre_de_base_datos');  
 $sql = "DELETE FROM tbl_sample WHERE id = '".$_POST["id"]."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Deleted';  
 }  
 ?>
