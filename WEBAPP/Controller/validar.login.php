<?php
require_once("../Model/conexion.php");
require_once("../Model/validar.class.php");
include 'hola.php';


    if (isset($_POST["sesion_vigilante"])) {
    #  $name=htmlentities(addslashes($_POST["nombre"]));
    #  $pass=htmlentities(addslashes($_POST["contrasena"]));
        $usuario= htmlentities(addslashes($_POST["nombre"]));
        $contrasena= htmlentities(addslashes($_POST["contrasena"]));
        $pass = str_replace("cont", "123456789", $contrasena);
        $name = str_replace("usu", "123456789", $usuario);

        try {
          if (login::valida($name,$pass)==false) {
            

          }

        }
#https://www.visualstudio.com/es-es/features/xamarin-vs
        catch (Exception $e) {
            echo $e->getMessage();
              if ($e->getCode()== "42S02") {
                echo "Error al nombrar tabla de la consulta";
            }
          }
        }
?>
