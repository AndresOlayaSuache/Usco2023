<?php

include ('conexion/conexion.php');

    if(isset($_POST['loguear']))
    {
        $Usuario = $_POST['usuario'];
        $Clave = md5($_POST['clave']);

        $VerificarUsuario = "SELECT * FROM usuarios WHERE usuario = '$Usuario' and clave = '$Clave'";
        $Resultado = mysqli_query($conexion, $VerificarUsuario);
        $ComprobarResultado = mysqli_num_rows($Resultado);

        if($ComprobarResultado > 0)
        {
            header("location:index.html");
        }
        else
        {
            echo"<div class='alerta_error'>Datos incorrectos</div>";
        }
    }

?>