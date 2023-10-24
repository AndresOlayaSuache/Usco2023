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
                <a href="login/cerrar_sesion.php" class="btn"><button>Cerrar Sesión</button></a>
            </div>
        </div>

    </header>

    <script type="text/javascript" src="nav.js"></script>

    <!--Article-->
    <div class="contenedor-nosotros">
        <div class="info-empresa">
            <div class="imagen">
                <img src="img/empresaprovisional.png" alt=""> 
            </div>
            <div class="contenido">
                <h2>Visión</h2>
                <p>La visión de nuestra compañía es que en diez años será reconocida en la región Surcolombiana por producir alimentos de alta calidad, que sean competitivos y alcanzar el liderazgo en el mercado.  Teniendo como base la comunicación efectiva con nuestros clientes, proveedores y mejorando la publicidad.</p>
            </div>
        </div>
        <div class="info-empresa">
            <div class="contenido">
                <h2>Misión</h2>
                <p>La misión de nuestra compañía es producir, comercializar y distribuir productos alimenticios de buena calidad, que llene las expectativas de clientes y consumidores, ganando un valor para su propietario, beneficios a nuestros trabajadores y tratando equitativa y profesionalmente a nuestros socios comerciales. </p>
            </div> 
            <div class="imagen">
                <img src="img/empresaprovisional.png" alt=""> 
            </div>      
        </div>
        <div class="info-empresa">
            <div class="imagen">
                <img src="img/empresaprovisional.png" alt=""> 
            </div>
            <div class="contenido">
                <h2>Objetivos de calidad</h2>
            <p> 
                1. Asegurar los alimentos que Producciones Rico procesa, mediante la aplicación del sistema de inocuidad alimentario APPCC (Análisis de peligros y puntos de control críticos)
            </p>
            <p>
                2. Cumplir con la legislación sanitaria, verificando su aplicación en todas las etapas de los procesos: Compras de materias primas, elaboración, manipulación, empaque, almacenamiento, transporte y distribución.
            </p>
            <p>
                3. Cumplir con los compromisos pactados.
            </p>
            <p>
                4. Desarrollar y ejecutar programas de capacitación a todo el personal, para una actualización sobre procedimientos y normas, con la finalidad de obtener un proceso de calidad con mejoramiento continuo.
            </p>
            <p>
                5. Para cada entrada de materias primas e insumos, se aplicará un correcto control de calidad implementando un método de trabajo coherente y equitativo, para asegurar la inocuidad e idoneidad de estos y el cumplimiento de las especificaciones técnicas requeridas.
            </p>
            </div>
        </div>
        <div class="info-empresa">
            <div class="contenido">
                <h2>Historia</h2>
                <p>Los cereales son plantas de la familia de las poáceas cultivadas por su grano. Incluyen cereales mayores como el trigo, el arroz, el maíz, la cebada, la avena y el centeno, y cereales menores como el sorgo, el mijo, el teff, el triticale, el alpiste o la lágrima de Job.</p>
            </div>
            <div class="imagen">
                <img src="img/empresaprovisional.png" alt=""> 
            </div>
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