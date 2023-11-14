<?php

    include('conexion/conexion.php');

    session_start();

    if(isset($_POST['cambiar']))
    {
        $Correo = $_POST['correo'];
        $NuevaClave = $_POST['nueva_clave'];
        $ConfirmarClave = $_POST['confirmar_clave'];

        $ClaveEncriptada = password_hash($NuevaClave, PASSWORD_DEFAULT);

        $VerificarUsuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$Correo'");
        $Resultado = mysqli_num_rows($VerificarUsuario);
        $VerificarClave = mysqli_fetch_array($VerificarUsuario);

        if($Resultado > 0)
        {
            $_SESSION['correo'] = $Correo;

            if($ConfirmarClave == $NuevaClave)
            {
                $ActualizarClave = mysqli_query($conexion, "UPDATE usuarios SET clave = '$ClaveEncriptada' WHERE correo = '$Correo'");

                if($ActualizarClave)
                {
                    echo'<div class="alerta_creado">Contraseña actualizada correctamente, ahora inicia sesión</div>';
                }
                else
                {
                    echo'<div class="alerta_error">Error al actualizar la contraseña. Por favor, inténtalo de nuevo</div>';
                }
            }
            else
            {
                echo'<div class="alerta_error">Las contraseñas no coinciden</div>';
            }
        }
        else
        {
            echo'<div class="alerta_error">No existe ese correo</div>';
        }
    }
?>
