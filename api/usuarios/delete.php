<?php
require_once '../bd.php';
session_start();
$usuario = $_SESSION["usuario"];
$correo = $usuario->correo;
$con = conectar();
$st = $con->prepare("DELETE FROM usuario "."WHERE correo=?");
$st->bind_param("s", $correo);
$st->execute();
$st->close();
session_destroy();
header("Location:../../index.php");
exit();
 ?>
