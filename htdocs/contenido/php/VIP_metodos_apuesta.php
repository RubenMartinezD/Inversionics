<?php
date_default_timezone_set('UTC');
session_start();
        $nuser = $_SESSION['nombrepresa'];
$bool_sesion = false;
if($nuser == null || $nuser == '')
 {echo 'LARGO DE AQUÍ'; die();}
else {$bool_sesion = true; }
?>
<!DOCTYPE html>
<html lang="es">
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <title>INVERSIONICS - Los mejores métodos para ganar PA$TA</title>
    <link rel="stylesheet" type="text/css" href="/contenido/estilo.css" />
</head>

<h1 hidden id="var_sesion"><?php if ($bool_sesion){echo $nuser;}; ?></h1>

<body onload="reemplazar()" src="/scripts/insertar_indice.js" id="nioc_odnof">
    <header>
        <h1 id="main_p"> <a href="/index.html">INVERSIONICS <span style="font-size:25px">&#x1f911;</span></a></h1>
    </header>
    <div class="wrapper">
        <div id="indice_lateral_contenidos">
            Cargando...
        </div>
        <div id="indice_inicio">
            <h1 id="titulo_noticia">Andrés Tete te enseñará cómo apostar y ganar SIEMPRE 100%</h1>
            <div class="cuerpo_noticia">
                <p id="parrafadita">
                    Los mejores métodos de apuestas de la mano de nuestro colaborador Andrés Tete ya están
                    disponibles suspuestamente para miembros de nuestro exclusivo club de socios. Son un work in progress bastante chungo.
                <div id="foto">
                    <img src="/contenido/img/andrew_tate_detenido.jpg">
                    <p id="pie_foto"> Andrés Tete, dirigiéndose a su recinto penitenciario de confianza para recibir el
                        premio Nobel de
                        la paz.</p>
                </div>
            </div>
            </p>
        </div>
    </div>
    </div>
    <div id="letra pequeña">
    </div>

    <footer>
        © 2022-23 INVERSIONICS S.A. Financed by Rubén Martínez.
        <script src="/scripts/insertar_indice.js"></script>
    </footer>
</body>

</html>