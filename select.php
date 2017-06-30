<?php  
 $connect = mysqli_connect('localhost', 'usuario_base_datos', 'contraseña', 'nombre_de_base_datos');  
 $output = '';  
 $sql = "SELECT * FROM tbl_sample ORDER BY id DESC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="5%">Id</th>  
                     <th width="20%">Categoria</th>  
                     <th width="20%">Nombre</th>
                     <th width="35%">Descripción</th>  
                     <th width="5%">Cantidad</th>
                     <th width="10%">Estado</th>  
                     <th width="5%">Delete</th>  
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
                     <td class="categoria" data-id1="'.$row["id"].'" contenteditable>'.$row["categoria"].'</td>  
                     <td class="nombre" data-id2="'.$row["id"].'" contenteditable>'.$row["nombre"].'</td>
                     <td class="descripcion" data-id3="'.$row["id"].'" contenteditable>'.$row["descripcion"].'</td>
                     <td class="cantidad" data-id4="'.$row["id"].'" contenteditable>'.$row["cantidad"].'</td>
                     <td class="estado" data-id5="'.$row["id"].'" contenteditable>'.$row["estado"].'</td>
                     <td><button type="button" name="delete_btn" data-id6="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="categoria" contenteditable></td>  
                <td id="nombre" contenteditable></td>
                <td id="descripcion" contenteditable></td>
                <td id="cantidad" contenteditable></td>
                <td id="estado" contenteditable></td>
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '<tr>  
                          <td colspan="4">Data not Found</td>  
                     </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>
