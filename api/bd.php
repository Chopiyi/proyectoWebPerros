<?php

 function conectar(){
   $mysqli = new mysqli("localhost","root","hola","perritosweb");
   if($mysqli->connect_error){
     return false;
   } else {
     $mysqli->set_charset("utf8");
     return $mysqli;
   }
 }
