<?php
session_start();
if (!empty($_POST["btningresar"])) {
    if (!empty($_POST["usuario"]) and !empty($_POST["password"])) {
        $usuario=$_POST["usuario"];
        $password=$_POST["password"];
        $sql=$conexion->query(" select * from empleados where usuario='$usuario' and contraseña='$password' ");
        if ($datos=$sql->fetch_object()) {
            $_SESSION["id"]=$datos->id;
            $_SESSION["nombre"]=$datos->Nombre;
            $_SESSION["apellidos"]=$datos->Apellidos;
            header("location: inicio.php");
        } else {
            echo "<div class='alert alert-danger'>Acceso denegado</div>";
        }
        
    } else {
        echo "Por favor ingresar los datos correctamente";
    }
    
}

?>