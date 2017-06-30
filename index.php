<?php include('server.php'); 

    // if user is not logged in, they cannot access this page
    if (empty($_SESSION['username'])) {
        header('location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">Laboratorio J005</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="../tabla.php">Inventario</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['username']; ?> en sesión</a></li>
      <li><a href="index.php?logout='1'"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesión</a></li>
    </ul>
  </div>
</nav>

<div class="header">
         <h2>Bienvenido a la página del Laboratorio J005!</h2>
     </div>

     <div class="content">
        

        <?php if (isset($_SESSION["username"])): ?>
            <p>Hola <strong><?php echo $_SESSION['username']; ?>,</strong> has iniciado sesión</p>
        <?php endif ?>
     </div>
<div>

</body>
</html>
 <script> 
 $(document).ready(function(){  
      function fetch_data()  
      {  
           $.ajax({  
                url:"select.php",  
                method:"POST",  
                success:function(data){  
                     $('#live_data').html(data);  
                }  
           });  
      }  
      fetch_data();  
      $(document).on('click', '#btn_add', function(){  
           var categoria = $('#categoria').text();  
           var nombre = $('#nombre').text();
           var descripcion = $('#descripcion').text();
           var cantidad = $('#cantidad').text();
           var estado = $('#estado').text();  
           if(categoria == '')  
           {  
                return false;  
           }  
           if(nombre == '')  
           {  
                return false;  
           }
           if(descripcion == '')  
           {  
                return false;  
           }

           if(cantidad == '')  
           {  
                return false;  
           }
           if(estado == '')  
           {  
                return false;  
           }

           $.ajax({  
                url:"insert.php",  
                method:"POST",  
                data:{categoria:categoria, nombre:nombre, descripcion:descripcion, cantidad:cantidad, estado:estado},  
                dataType:"text",
       
                success:function(data)  
                {  
                     fetch_data();  
                }  
           })  
      });  
      function edit_data(id, text, column_name)  
      {  
           $.ajax({  
                url:"edit.php",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                }  
           });  
      }  
      $(document).on('blur', '.categoria', function(){  
           var id = $(this).data("id1");  
           var categoria = $(this).text();  
           edit_data(id, categoria, "categoria");  
      });  
      $(document).on('blur', '.nombre', function(){  
           var id = $(this).data("id2");  
           var nombre = $(this).text();  
           edit_data(id,nombre, "nombre");  
      });  
      $(document).on('blur', '.descripcion', function(){  
           var id = $(this).data("id3");  
           var descripcion = $(this).text();  
           edit_data(id,descripcion, "descripcion");  
      });  

      $(document).on('blur', '.cantidad', function(){  
           var id = $(this).data("id4");  
           var cantidad = $(this).text();  
           edit_data(id,cantidad, "cantidad");  
      });  
      $(document).on('blur', '.estado', function(){  
           var id = $(this).data("id5");  
           var estado = $(this).text();  
           edit_data(id,estado, "estado");  
      });  

      $(document).on('click', '.btn_delete', function(){  
           var id=$(this).data("id6");  
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"delete.php",  
                     method:"POST",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function(data){  
                          fetch_data();  
                     }  
                });  
           }  
      });  
 });  
 </script>