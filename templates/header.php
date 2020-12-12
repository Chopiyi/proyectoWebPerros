<?php
session_start();
require_once 'api/bd.php';
if(count($_POST) > 0){
  $correo = $_POST["correo_inicio"];
  $clave = sha1($_POST["contraseña_inicio"]);
  $con = conectar();
  $st = $con->prepare("SELECT correo, clave, nombre, apellido, telefono FROM usuario ". "WHERE correo=? AND clave=?");
  $st->bind_param("ss", $correo, $clave);
  $st->execute();
  $result = $st->get_result();
  if($fila = $result->fetch_row()){
    $usuario = new stdClass();
    $usuario->correo = $fila[0];
    $usuario->clave = $fila[1];
    $usuario->nombre = $fila[2];
    $usuario->apellido = $fila[3];
    $usuario->telefono = $fila[4];
    $_SESSION["usuario"] = $usuario;
    header("Location:index.php");
    $st->close();
    exit();
  } else {
    $error = "No ingresó nada";
  }
}
 ?>

 <!doctype html>
 <html lang="en">
   <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="keywords" content="perros, canes, caninos, mascotas, animales, razas"/>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Texturina">
     <title>Bienvenido a su web de perros</title>
   </head>
   <body>
     <header class="pb-5">
       <nav class="navbar navbar-expand-md navbar-light backgroundDog fixed-top shadow-lg">
         <div class="container-fluid">
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse d-md-flex justify-content-evenly" id="navbarSupportedContent">
             <ul class="navbar-nav mb-2 mb-lg-0 fs-3 ">
               <li class="nav-item">
                 <a class="nav-link active" aria-current="page" href="index.php">Home</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="verPerritos.php">Ver Perritos</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="#">Nosotros</a>
               </li>
             </ul>
             <ul class="navbar-nav">
               <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                 data-bs-toggle="dropdown" aria-expanded="false"> <img src="img/perfil.png"> </a>
                 <?php if(isset($_SESSION["usuario"])){
                    ?>
                      <ul class="dropdown-menu dropdown-menu-dark p-3 shadow" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li>
                          <?php $usuario = $_SESSION["usuario"]; ?>
                          <h5 class="dropdown-item">¡ Bienvenido <?php echo $usuario->nombre; ?> ! </h5>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="datos_usuario.php">Mis datos de cuenta</a></li>
                        <li><a class="dropdown-item" href="api/usuarios/cerrar_sesion.php">Cerrar Sesión</a></li>
                      </ul>
                  <?php } else { ?>
                 <form class="dropdown-menu dropdown-menu-dark p-3 shadow" aria-labelledby="navbarDarkDropdownMenuLink" method="post">
                   <div class="my-3">
                     <h5>Ingresa tus datos por favor</h5>
                   </div>
                   <div class="my-3">
                     <label class="col-form-label" for="correo_inicio">Correo</label>
                     <input type="text" required class="form-control" name="correo_inicio" value="">
                   </div>
                   <div class="my-3">
                     <label class="col-form-label">Contraseña</label>
                     <input type="password" required class="form-control" name="contraseña_inicio" value="">
                   </div>
                   <?php if(isset($error)){ ?>
                     <div class="row mt-2 alert alert-danger">
                       <span>El usuario o contraseña ingresado es incorrecto</span>
                     </div>
                   <?php } ?>
                   <div class="my-3 text-center">
                     <button class="btn btn-warning btn-lg" name="button_sesion" type="submit">Ingresar</button>
                   </div>
                   <div class="my-3 text-center col-12">
                     ¿No tienes una cuenta?
                   </div>
                   <div class="my-3 text-center">
                     <a href="registro.html" class="btn btn-warning btn-lg" role="button">Regístrate</a>
                   </div>
                 </form>
               <?php } ?>
               </li>
             </ul>
           </div>
         </div>
       </nav>
     </header>
