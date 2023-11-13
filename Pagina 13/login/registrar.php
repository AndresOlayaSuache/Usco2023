<?php

include ('conexion/conexion.php');

    if(isset($_POST['registrar']))
    {
        $Nombres = $_POST['nombres'];
        $Apellidos = $_POST['apellidos'];
        $Usuario = $_POST['usuario'];
        $Clave = $_POST['clave'];
        $Correo = $_POST['correo'];

        $ClaveEncriptada = password_hash($Clave, PASSWORD_DEFAULT);

        $VerificarUsuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$Usuario'");
        $Resultado = mysqli_num_rows($VerificarUsuario);

        if($Resultado > 0)
        {
            echo'<div class="alerta_error">El nombre de usuario ya existe</div>';
        }
        else
        {
            $InsertarDatos = "INSERT INTO usuarios(nombres, apellidos, usuario, clave, correo) VALUES('$Nombres', '$Apellidos','$Usuario', '$ClaveEncriptada','$Correo')";

            $EjecutarInsertarDatos = mysqli_query($conexion, $InsertarDatos);

            if($EjecutarInsertarDatos)
            {
                echo'<div class="alerta_creado">Se han enviado correctamente los datos, ahora inicia sesión</div>';
            }
            else
            {
                echo'<div class="alerta_error">Error al registrar el usuario</div>';
            }
        }
    }

?>