<?php  
 $connect = mysqli_connect('localhost', 'id2026509_fvaldez', '1234567', 'id2026509_registration');  
 $sql = "INSERT INTO tbl_sample(categoria, nombre, descripcion, cantidad, estado) VALUES('".$_POST["categoria"]."', '".$_POST["nombre"]."', '".$_POST["descripcion"]."', '".$_POST["cantidad"]."', '".$_POST["estado"]."')";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Inserted';  
 }  
 ?>