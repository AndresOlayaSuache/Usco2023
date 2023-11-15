<?php
    session_start();
    if(empty($_SESSION['usuario']))
    {
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Producciones rico</title>
</head>
<body>
    <!--Menú-->
    <header class="header">
        <div class="logo">
            <a href="index2.php">
                <img src="img/logo.png" alt="Logo de la marca">
            </a>
        </div>
        <ul class="nav-links">
            <li><a href="index2.php">Inicio</a></li>
            <li><a href="Productos2.php">Productos</a></li>
            <li><a href="Nosotros2.php">Sobre la empresa</a></li>
            <li class="cuenta">
                <?php
                    echo $_SESSION['usuario'];
                ?>
            </li>
        </ul>
        <a href="login/cerrar_sesion.php" class="btn"><button>Cerrar Sesión</button></a>

        <a onclick="openNav()" href="#" class="menu"><button>Menu</button></a>
    
        <div class="overlay" id="mobile-menu">
            <a onclick="closeNav()" class="close">&times;</a>
            <div class="overlay-content">
                <a href="index2.php">Inicio</a>
                <a href="Productos2.php">Productos</a>
                <a href="Nosotros2.php">Sobre la empresa</a>
                <a href="login/cerrar_sesion.php">Cerrar Sesión</a>
            </div>
        </div>

    </header>

    <script type="text/javascript" src="nav.js"></script>

    <!--Productos-->
    <div class="contenedor">
        <div class="tarjeta">
            <img src="img/cerealmaiz.jpg" alt="">
            <h2>Cereal de maiz</h2>
            <p>El cereal de maiz contiene un 10% arroz y 90% maiz molido. El maíz, es uno de los cereales más importantes del mundo, suministra elementos nutritivos a los seres humanos.</p>
            <a href="https://api.whatsapp.com/send/?phone=3115483725" target="_blank" class="boton1">Comprar ahora</a>
        </div>
        <div class="tarjeta">
            <img src="img/cerealarroz.jpg" alt="">
            <h2>Cereal de arroz</h2>
            <p>El cereal de arroz contiene un 10% de maiz y 90% de arroz. El arroz es un cereal abundante en carbohidratos y proteínas, lo que lo convierte en un alimento que aporta gran cantidad de energía.</p>
            <a href="https://api.whatsapp.com/send/?phone=3115483725" target="_blank" class="boton1">Comprar ahora</a>
        </div>
    </div>

    <!--Footer o pie de página-->
    <footer class="footer">
        <div class="contenedor-tarjeta">
            <div class="tarjeta-footer">
                <h2>Ubicación</h2>
                <div class="contenedor-tel1">
                    <p>Neiva-Huila</p>
                    <p>Calle 6 Sur No. 21 - 64 Barrio Sta Isabel</p>
                </div>
            </div>
            <div class="tarjeta-footer">
                <h2>Contactos</h2>
                <div class="contenedor-tel">
                    <a href="https://api.whatsapp.com/send/?phone=3115483725" target="_blank" class="enlace">
                        <img src="img/iconowp.png" alt="Icono del telefono" class="icono">
                        <p class="tel">3115483725</p>
                    </a>
                </div>
                <div class="contenedor-tel">
                    <a href="mailto:jeismenolaya@hotmail.com" target="_blank" class="enlace">
                    <img src="img/iconocorreo.png" alt="Icono de correo" class="icono">
                    <p class="tel">jeismenolaya@hotmail.com</p>
                    </a>
                </div>
            </div>
            <div class="tarjeta-footer">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.647235245831!2d-75.27806622544215!3d2.917419154534292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3b738a6a76c65f%3A0x7b1a87264820ee45!2sCl.%206%20Sur%20%2321-64%2C%20Neiva%2C%20Huila!5e0!3m2!1ses-419!2sco!4v1699209278063!5m2!1ses-419!2sco" width="250" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="contenedor-copy">
            <div class="tarjeta-footer">
                <p>Copyright© 2016 Producciones Rico</p>
            </div>
        </div>
    </footer>

</body>
</html>