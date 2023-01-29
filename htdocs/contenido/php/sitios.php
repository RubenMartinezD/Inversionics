<?php
date_default_timezone_set('UTC');
session_start();                                    //iniciar sesión
        $nuser = $_SESSION['nombrepresa'] ?? NULL;  //recoger nombre de usuario. De no existir, evitar errores asignando el valor de sesión como null
if($nuser == null || $nuser == '')
 {$bool_sesion = false;}
else { $bool_sesion = true; }
?>

<!DOCTYPE html>
<html lang="es">
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
<script src="/scripts/insertar_indice.js"></script>

<head>
    <title>INVERSIONICS - Los mejores métodos para ganar PA$TA</title>
    <link rel="stylesheet" type="text/css" href="/contenido/estilo.css" />
</head>

<h1 hidden id="var_sesion"><?php if ($bool_sesion){echo $nuser;}; ?></h1>

<body onload="reemplazar()" src="/scripts/insertar_indice.js" id="fondo_coin">
    <header>
        <h1 id="main_p"> <a href="/index.html">INVERSIONICS <span style="font-size:25px">&#x1f911;</span></a></h1>
    </header>
    <div class="wrapper">
        <div id="indice_lateral_contenidos" onload="reemplazar">
            Cargando...
        </div>
        <div id="indice_inicio">
            <h1 id="titulo_noticia">Los cinco mejores $itios para aculumar PA$TA</h1>
            <p id="linea_autor">~Escrito por <span id=nom_autor>Donmundos Trotadinero</span></p>
            <p id="parrafadita">El mundo es muy grande, lo cual significa que saber encontrar los mejores lugares para
                acumular pasta de forma fácil y sencilla no es algo baladí (por algo se llaman paraísos fiscales) Por
                eso, en este TOP te enseñaremos los mejores paraísos
                fiscales para que viajes, hagas tus transacciones económicas <span id="cursivo">completamente legales
                </span>y vuelvas a casa con los bolsillos llenos.<br></p>
            <div class="top_lugares">
                <div style="max-width: 500px" id="foto_bezos">
                    <img src="/contenido/img/suiza.jpeg" style="max-width:100%;">
                </div>
                <p id="parrafadita3">5. Suiza, un lugar donde el nivel económico es equivalente al nivel de calidad de su chocolate.</p>
                <div style="max-width: 500px" id="foto_bezos">
                    <img src="/contenido/img/islas_caiman.jpg" style="max-width:100%;">
                </div>
                <p id="parrafadita3"> 4. Las Islas Caimán, unas islas hechas de dinero donde los $ueño$ se hacen
                    realidad.
                </p>

                <div style="max-width: 500px" id="foto_bezos">
                    <img src="/contenido/img/grafico_de_gibraltar.jpg" style="max-width:100%;">
                </div>
                <p id="parrafadita3"> 3. Gibraltar, cuyo peñón es representativo de las gráficas de ingresos de nuestro
                    lector promedio.
                </p>

                <div style="max-width: 500px" id="foto_bezos">
                    <img src="/contenido/img/avion_arrastrado.jpg" style="max-width:100%;">
                </div>
                <p id="parrafadita3"> 2. Las Bermudas. Se dice que quienes consigan atravesar el triángulo tendrán
                    riquezas inconmensurables.
                </p>

                <div style="max-width: 500px" id="foto_bezos">
                    <img src="/contenido/img/mucho_barco_y_casa.png" style="max-width:100%;">
                </div>
                <p id="parrafadita3"> 1. Las islas vírgenes británicas. Una imagen vale más que mil palabras. Ojalá ser
                    el dueño de toda esa riqueza y no tener que estafar a nadie nunca más.
                </p>

            </div>
        </div>
    </div>
    <div id="letra pequeña">
    </div>

    <footer>
        © 2022-23 INVERSIONICS S.A. Financed by Rubén Martínez.
    </footer>
</body>

</html>