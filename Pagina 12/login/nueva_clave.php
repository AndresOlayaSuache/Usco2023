<?php

    include('conexion/conexion.php');

    session_start();

    if(isset($_POST['cambiar']))
    {
        $Usuario = $_POST['usuario'];
        $Clave = $_POST['clave'];
        $Clave2 = $_POST['clave2'];

        $VerificarUsuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$Usuario'");
        $Resultado = mysqli_num_rows($VerificarUsuario);
        $VerificarClave = mysqli_fetch_array($VerificarUsuario);

        if($Resultado > 0)
        {
            if(password_verify($Clave, $VerificarClave['clave']))
            {
                $_SESSION['usuario'] = $Usuario;

                $EncriptarClave2 = password_hash($Clave2, PASSWORD_DEFAULT);
                
                $ActualizarClave = mysqli_query($conexion, "UPDATE usuarios SET clave = '$EncriptarClave2' WHERE usuario = '$Usuario'");

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
                echo'<div class="alerta_error">Contraseña actual incorrecta</div>';
            }
        }
        else
        {
            echo'<div class="alerta_error">Datos incorrectos</div>';
        }
    }
?>
