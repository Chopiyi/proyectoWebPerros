<?php
 require_once "../bd.php";
 $correo = $_POST["correo"];
 $nombre = $_POST["nombre"];
 $apellido = $_POST["apellido"];
 $telefono = $_POST["telefono"];
 $clave = $_POST["clave"];
 $clave = sha1($clave);
 $sql = "INSERT INTO usuario(correo, nombre, apellido, telefono, clave)"."VALUES(?,?,?,?,?)";
 $con = conectar();
 $respuesta = new stdClass();
 if($con){
   $statement = $con->prepare($sql);
   $statement->bind_param("sssis", $correo, $nombre, $apellido, $telefono, $clave);
   $statement->execute();
   $statement->close();
   $respuesta->resultado = true;
   $respuesta->comentario = "Se agregó al usuario exitosamente";
 } else {
   $respuesta->resultado = false;
 }
 echo json_encode($respuesta);
