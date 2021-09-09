<?php 
session_start();
?>
<?php require_once 'includes/conexion.php'; ?> <!--incluimos la coneccion a cabecera ya anteriormente establecida en la clase anterior-->



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de comidas</title>
   
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body style="background-color: antiquewhite  ;">
    <!--CABECERA-->
    <header id="cabecera">
        <!--LOGO-->
        <div id="logo">
            <a href="index.php">
                <a style="background-color:whitesmoke;">Blog Gastronomico</a>
                <!--creé una cabecera que dijera blog gastronomico ya que se tratará de eso
                hablaré de gastronomía -->
            </a>
        </div>

        <!--MENU-->
        
        <nav id="menu">
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>

               
                <li>
                    <a href="videos/videos.php">videos</a>
                </li>
                <li>
                    <a href="recetas/recetas.php">recetas </a>
                </li>
                <li>
                    <a href="comidac/comidac.php">recetas comida criolla</a>
                </li>
                <li>
                    <a href="aderezo/aderezo.php">aderezos</a>
                </li>
                <li>
                    <a href="salsas/salsas.php">salsas</a>
                </li>
                <li>
                    <a href="contactanos/contactanos.php">contactanos</a>
                </li>
                    
                 <!--aquí incluimos las carpetas y los archivos php o scripts ya antes separados 
                 ya que con tiempo, estuve investigando y creando formas para darle un buen diseño y contenido en 
                 el blog
                 --> 
            </ul>
        </nav>

        <div class="clearfix"></div>

    </header>

    <div id="contenedor">
