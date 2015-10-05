<!DOCTYPE html>
<html lang="en">
  <head>
 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>  <?php
    include 'validation.php';
    echo  $_SESSION["currently"]; ?></title> 

         <link rel="stylesheet" href="vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/css/style.css">
  </head>

  <body>

   <div class="container-fluid">


    <div class="row">

  <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
    <div class="jumbotron">
      <div class="container">
       <h1 >Hola bienvenido a tu sesión</h1>
        <p class="glyphicon glyphicon-user">
   <?php
    include 'validation.php';
    echo  $_SESSION["actual"];
     ?> </p>

      <p>
         <a class="btn btn-danger" href="destroy.php">Salir</a>

      </p>
    </div>
      </div>

  </div>



    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
        <script src="vendor/js/jquery.min.js"></script>  
    <script src="vendor/js/bootstrap.min.js"></script> 
   
  </body>
</html>

