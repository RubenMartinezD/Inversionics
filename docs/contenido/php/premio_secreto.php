<?php
date_default_timezone_set('UTC');
session_start();                                    //iniciar sesión
        $nuser = $_SESSION['nombrepresa'] ?? NULL;  //recoger nombre de usuario. De no existir, evitar errores asignando el valor de sesión como null
if($nuser == null || $nuser == '')
 {$bool_sesion = false; }
else { $bool_sesion = true; echo '<b> 403 FORBIDDEN </b> <br> AQUÍ SOLO QUEREMOS GENTE NUEVA PARA ENGANCHARLA CON OFERTITAS, NO TE QUEREMOS A TI '.$nuser.'<b>, LARGO</b>'; die(); }
?>
<!DOCTYPE html>
<html lang="es">
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <title>INVERSIONICS - Los mejores métodos para ganar PA$TA</title>
    <link rel="stylesheet" type="text/css" href="/contenido/estilo.css" />
</head>

<h1 hidden id="var_sesion"><?php if ($bool_sesion){echo $nuser;}; ?></h1>

<body onload="reemplazar()" src="/scripts/insertar_indice.js" id="fondo_coin">
    <header>
        <h1 id="main_p"> <a href="/index.php">INVERSIONICS <span style="font-size:25px">&#x1f911;</span></a></h1>
    </header>
    <div class="wrapper">
        <div id="indice_lateral_contenidos">
            Cargando...
        </div>

        <div id="indice_inicio">
            <h1 id="titulo_noticia">¡Un premio especial solo para ti!</h1>
            <p id="linea_autor">~Presentado por <span id=nom_autor>Don Multimillón (Webmaster)</span></p>
            <p id="parrafadita">El ilustre webmaster de esta página te da la oportunidad de ganar una cantidad indeterminada de dinero. Decidirás cuanta pasta sumar al bote. Pero ten cuidado: si te puede la avaricia, ganará la casa. Puedes intentar abandonar con el dinero si te abruma tu cobardía.</p>

            <div class="cuerpo_noticia">
                <p id="parrafadita"> <button id="sum10" value="Sumar 10"> Sumar 10 € </button>
                    <button id="sum20" value="Sumar 20"> Sumar 20 € </button>
                    <button id="sum30" value="Sumar 30"> Sumar 30 € </button>
                    <button id="sum40" value="Sumar 40"> Sumar 40 € </button>
                    <button id="sum50" value="Sumar 50"> Sumar 50 € </button>
                <p><b>Tu dinero gratis: <a id="gratis">0</a> €</b></p>
                <p></p><button id="abandonar">Abandonar</button>
                <p id="comentario"></p>
                </p>
            </div>
        </div>
    </div>
    <footer>
        © 2022-23 INVERSIONICS S.A. Financed by Rubén Martínez.
        <script src="/scripts/insertar_indice.js"></script>
        <script src="/scripts/sumar_pasta.js"></script>
    </footer>
</body>

</html>