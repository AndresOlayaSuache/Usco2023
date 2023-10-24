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
            <li><a href="index.html">Inicio</a></li>
            <li><a href="Productos.html">Productos</a></li>
            <li><a href="Nosotros.html">Sobre la empresa</a></li>
            <li><a href="Contactanos.html">Contactanos</a></li>
        </ul>
        <a href="registro.php" class="btn"><button>Registrarse</button></a>
        <a href="login.php" class="btn"><button>Iniciar Sesión</button></a>

        <a onclick="openNav()" href="#" class="menu"><button>Menu</button></a>
    
        <div class="overlay" id="mobile-menu">
            <a onclick="closeNav()" class="close">&times;</a>
            <div class="overlay-content">
                <a href="index.html">Inicio</a>
                <a href="Productos.html">Productos</a>
                <a href="Nosotros.html">Sobre la empresa</a>
                <a href="Contactanos.html">Contactanos</a>
                <a href="registro.php">Registrarse</a>
                <a href="login.php">Iniciar sesion</a>
            </div>
        </div>

    </header>

    <script type="text/javascript" src="nav.js"></script>

    <!--Article-->
    <div class="contenedor">
        <div class="contenedor-form">
            <h2>Iniciar sesión</h2>
            <form action="" method="post" id="form">
                <?php
                include("login/loguear.php");
                ?>
                <div class="caja">
                    <h1>Usuario</h1>
                    <input type="text" placeholder="Usuario" name="usuario" required>
                </div>
                <div class="caja">
                    <h1>Contraseña</h1>
                    <input type="password" placeholder="Contraseña" name="clave" required>
                </div>
                <div class="caja">
                    <p>¿No tienes cuenta?</p>
                    <a href="registro.php">Crear cuenta</a>
                </div>
                <div class="caja">
                    <p>¿Olvidaste tu contraseña?</p>
                    <a href="cambiar_clave.php">Cambiar contraseña</a>
                </div>
                <div class="botones">
                    <button type="submit" class="btn" name="loguear">Iniciar Sesión</button>
                    <button type="reset" class="btn" name="borrar">Borrar</button>
                </div>
            </form>
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