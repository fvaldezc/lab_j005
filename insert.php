<?php  
 $connect = mysqli_connect('localhost', 'usuario_base_datos', 'contraseña', 'nombre_de_base_datos');  
 $sql = "INSERT INTO tbl_sample(categoria, nombre, descripcion, cantidad, estado) VALUES('".$_POST["categoria"]."', '".$_POST["nombre"]."', '".$_POST["descripcion"]."', '".$_POST["cantidad"]."', '".$_POST["estado"]."')";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Inserted';  
 }  
 ?>
