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
            <a href="index.html">
                <img src="img/logo.png" alt="Logo de la marca">
            </a>
        </div>
        <ul class="nav-links">
            <li><a href="index.html">Inicio</a></li>
            <li><a href="Productos.html">Productos</a></li>
            <li><a href="Nosotros.html">Sobre la empresa</a></li>
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
                <a href="registro.php">Registrarse</a>
                <a href="login.php">Iniciar sesion</a>
            </div>
        </div>

    </header>

    <script type="text/javascript" src="nav.js"></script>

    <!--Article-->
    <div class="contenedor">
        <div class="contenedor-form">
            <h2>Cambiar contraseña</h2>
            <form action="" method="post" id="form">
                <?php
                include("login/nueva_clave.php");
                ?>
                <div class="caja">
                    <h1>Usuario</h1>
                    <input type="text" placeholder="Nombre de usuario" name="usuario" required>
                </div>
                <div class="caja">
                    <h1>Última contraseña</h1>
                    <input type="password" placeholder="Última contraseña" name="clave" required>
                </div>
                <div class="caja">
                    <h1>Nueva contraseña</h1>
                    <input type="password" placeholder="Nueva contraseña" name="clave2" required>
                </div>
                <div class="caja">
                    <p>¿No tienes cuenta?</p>
                    <a href="registro.php">Crear cuenta</a>
                </div>
                <div class="caja">
                    <p>¿Ya tienes cuenta?</p>
                    <a href="login.php">Iniciar sesión</a>
                </div>
                <div class="botones">
                    <button type="submit" class="btn2" name="cambiar">Cambiar contraseña</button>
                    <button type="reset" class="btn2" name="borrar">Borrar</button>
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
                <h2>Contactos</h2>
                <div class="contenedor-tel">
                    <img src="img/iconowp.png" alt="Icono del telefono" class="icono">
                    <p class="tel">3115483725</p>
                </div>
                <div class="contenedor-tel">
                    <img src="img/iconocorreo.png" alt="Icono de correo" class="icono">
                    <p class="tel">jeismenolaya@hotmail.com</p>
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