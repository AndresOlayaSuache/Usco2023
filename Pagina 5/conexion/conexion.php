<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "login";

    $conexion = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos) or die("Conexion fallida " . mysql_error());

    /*
    if(!$conexion)
    {
        die("Conexion fallida " . mysql_error());
    }*/
?>