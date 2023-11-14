<?php
    include ('conexion/conexion.php');

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/Exception.php';
    require 'phpmailer/PHPMailer.php';
    require 'phpmailer/SMTP.php';
    
    session_start();

    if(isset($_POST['cambiar']))
    {
        $Usuario = $_POST['usuario'];
        $Correo = $_POST['correo'];

        $VerificarUsuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$Usuario' and correo = '$Correo'");
        $Resultado = mysqli_num_rows($VerificarUsuario);

        if($Resultado > 0)
        {
            $InfoUsuario = mysqli_fetch_array($VerificarUsuario);
            $ClaveRecuperada = $InfoUsuario['clave'];
            $Enlace = "http://localhost/pagina/cambiar_clave.php";
            
            $mail = new PHPMailer(true);

            try {
                //Server settings
                //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'AndresFelipeOlayaSuache@gmail.com';                     //SMTP username
                $mail->Password   = 'vwwt fkph gczv lthv';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('AndresFelipeOlayaSuache@gmail.com', 'Producciones Rico');
                $mail->addAddress("$Correo", "$Usuario");     //Add a recipient

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Recuperar clave';
                $mail->Body    = '  <b>Se ha recibido tu solicitud de cambio de contraseña</b>
                                    <br>
                                    <b>Por favor, ingrese al siguiente enlace: </b>' . $Enlace;
                $mail->AltBody = 'Por favor, ingrese al siguiente enlace: ' . $Enlace;

                $mail->send();
                echo '<div class="alerta_creado">Se ha enviado un correo con un enlace para cambiar la contraseña</div>';
                } catch (Exception $e) {
                echo "<div class='alerta_error'>Error al enviar un mensaje: {$mail->ErrorInfo}</div>";
                }
        }
        else
        {
            echo'<div class="alerta_error">Datos incorrectos</div>';
        }
    }

?>