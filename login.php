<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" 
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

     <!-- Latest compiled and minified JavaScript -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
     </script>
     <Link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <div class="header">
         <h2>Laboratorio J005</h2>
     </div>

     <form method="post" action="login.php">
          <!-- display validation errors here -->
          <?php include('errors.php'); ?>
          
          <div class="input-group">
             <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
             <input id="username" type="text" class="form-control" name="username" placeholder="Usuario">
         </div>

          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input id="password" type="password" class="form-control" name="password_1" placeholder="Contraseña">
          </div>

          
          <div class="input-group">
               <button type="submit" name="login" class="btn">Iniciar Sesión</button>
          </div>
      
     </form>
</body>
</html>