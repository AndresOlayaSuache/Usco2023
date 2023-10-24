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
    <link rel="icon" href="img/iconoprovisional.png">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Producciones rico</title>
</head>
<body>
    <!--Menú-->
    <header class="header">
        <div class="logo">
            <img src="img/logoprovisional.png" alt="Logo de la marca">
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="Productos.php">Productos</a></li>
            <li><a href="Nosotros.php">Sobre la empresa</a></li>
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
                <a href="index.php">Inicio</a>
                <a href="Productos.php">Productos</a>
                <a href="Nosotros.php">Sobre la empresa</a>
                <a href="login/cerrar_sesion.php">Cerrar Sesión</a>
            </div>
        </div>

    </header>

    <script type="text/javascript" src="nav.js"></script>

    <!--Productos-->
    <div class="contenedor">
        <div class="tarjeta">
            <img src="img/cerealeprovisional.jpg" alt="">
            <h2>Cereal de maiz</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid necessitatibus, cum non nulla, hic inventore laborum officiis ab debitis fugiat nemo reprehenderit pariatur voluptate! Animi, nulla? Fugiat consequatur eum ipsum.</p>
            <a href="#" class="boton1">Comprar ahora</a>
        </div>
        <div class="tarjeta">
            <img src="img/cerealeprovisional.jpg" alt="">
            <h2>Cereal de arroz</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid necessitatibus, cum non nulla, hic inventore laborum officiis ab debitis fugiat nemo reprehenderit pariatur voluptate! Animi, nulla? Fugiat consequatur eum ipsum.</p>
            <a href="#" class="boton1">Comprar ahora</a>
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
                <h2>Teléfono</h2>
                <div class="contenedor-tel">
                    <img src="img/iconotelefono.png" alt="Icono del telefono" class="icono">
                    <p class="tel">608-8730456</p>
                </div>
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