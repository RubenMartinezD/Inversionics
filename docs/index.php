<?php
date_default_timezone_set('UTC');
session_start();                                    //iniciar sesión
        $nuser = $_SESSION['nombrepresa'] ?? NULL;  //recoger nombre de usuario. De no existir, evitar errores asignando el valor de sesión como null
if($nuser == null || $nuser == '')
 {$bool_sesion = false;}
else { $bool_sesion = true; }
if ($bool_sesion == true) {header("Location: /contenido/php/premium_index.php"); exit();}  // redirigir al portal VIP de existir la sesión

?>


<!DOCTYPE html>
<html lang="es">

<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <title>Página principal de INVERSIONICS - Los mejores métodos para ganar PA$TA</title>

    <link rel="stylesheet" type="text/css" href="/contenido/estilo.css" />
</head>


<body id="fondo_coin">
    <header>
        <h1 id="main_p"><span style="font-size:25px">&#x1f911;</span> INVERSIONICS MAIN PAGE <span style="font-size:25px">&#x1f911;</span></a>
        </h1>
        <p id="parrafadita_inicial"> ¿Ansioso por conseguir los billetes de tus sueños? ¿Deseoso de poner a prueba tu
            mentalidad de tiburón? No busques más: Aquí, en <b>INVERSIONICS</b> te contaremos los mejores trucos para
            conseguir dinericos con un <b>esfuerzo mínimo</b> por tu
            parte, de la mano de <b>profesionales cualificados</b><sup id="asterisco_peque">*1</sup> para que le puedas
            sacar el máximo provecho a tu vida. ¿Quién dijo que ganar dinero no era fácil? Yo desde luego, no.<sup id="asterisco_peque">*2</sup> Con nuestros métodos infalibles, como <b>los NFTs o los sistemas
                piramidales</b> (que al contrario de lo que dicta el sentido común <b>NO son una estafa</b>), te
            ayudaremos a alcanzar la cima
            <del>a costa de otros</del> de forma <b>segura, confiable y beneficiosa para todo el mundo.</b> No solo eso,
            también contamos en nuestras filas con los siempre entrañables <b>servicios técnicos de Microsoft® y de
                Amazon®</b>, para salvarte de esos peligrosos virus que acechan en tu computadora.<sup id="asterisco_peque">*3</sup>
        </p>

        <p id="parrafadita_inicial">Aprende a invertir en lo que de verdad importa. Invierte ya en cosas <b>100%
                fiables</b> con INVERSIONICS. Más de
            <span id="numero_incautos">0</span> personas ya confían en nosotros, y dicho número aumenta en cada momento.
        </p>

    </header>
    <div id="estafita">
        <h1 id="linea_cifra"><span style="font-size:25px">&#x1f911;</span><span style="font-size:25px">&#x1f911;</span><span style="font-size:25px">&#x1f911;</span><span style="font-size:25px">&#x1f911;</span><span style="font-size:25px">&#x1f911;</span><span id="text_reloj">
                ERES EL VISITANTE NUMERO 100.000 DE HOY </span><span style="font-size:25px">&#x1f911;</span><span style="font-size:25px">&#x1f911;</span><span style="font-size:25px">&#x1f911;</span><span style="font-size:25px">&#x1f911;</span><span style="font-size:25px">&#x1f911;</span></h1>
        <p id="parrafadita">Como hoy nos sentimos generosos, ¡ha ganado un cheque increíble de 100.000 €! Pero antes de
            procesar su premio,<br> necesita su dirección e información personal para procesar el pedido. Además, debe
            ingresar 0.031 Bitcoin (BTC) en la siguiente
            dirección para escribir su cheque: <br><br> <span id="bitcoinero">UuiYoU8uiiudUMbsUCkER879oibYVhhyuvjH8XT</span>
            <br><br>Envíe esta información a trustedindividual@joke.com y recibirá un correo electrónico en un plazo de
            7 días.

            <span id="naranjito">— Powered by Google Translate</span>
        </p>
    </div>
    <br>
    <div id="indice_contenidos">
        <h1 id="presentando">Contamos con el siguiente contenido exclusivo:</h1>
        <ul id="articulos">
            <ul>
                <li><a href="/contenido/php/simulador.php">Simulador de inversiones</a></li>
                <li><a href="/contenido/php/gurus.php">Gurús recomendados con recetas para el éxito </a></li>

                <li><a href="/contenido/php/sitios.php"> Mejores $itios para viajar</a></li>
                <li>
                    <a href="/contenido/php/elon_musk.php">Elon Musk nos cuenta cómo se hizo multimillonario</a>
                </li>
                <li><a href="/contenido/php/metodos_apuesta.php"><b>[EXCLUSIVO MIEMBROS] </b>Cómo apostar y ganar
                        SIEMPRE 100% REAL NO FAKE con Andrés Tete</a>
                </li>
                <li>[PRÓXIMAMENTE] Sistemas piramidales 100% probados</li>
                <li>[PRÓXIMAMENTE] NFTs que te quitan el aliento pero te llenan la billetera </li>
                <li>[PRÓXIMAMENTE] Mejores casas de apuestas (y mejores psicólogos para combatir la adicción a la ludopatía)

                </li>
                <h2 id="sorpreson">Y además... ¡tenemos una &#127873; <a href="/contenido/php/premio_secreto.php"><span id="sorpreverde">sorpresa</span></a>
                    &#127873;
                    para no-miembros como tú!</h2>
            </ul>

            <h2><a href="/contenido/html/inicio_sesion.html">Inicia tu sesión aquí. </a>¿Todavía sin cuenta? <a href="/contenido/html/nueva_presa.html">
                    Únete ya y gana dinero gratis AHORA</a></h2>
    </div>

    <br>

    <div id="letra_pequeña">
        <p><span id="azulete">*1</span> La identidad de los profesionales se mantendrá anónima, ya que creemos en la
            metodología basada en la confianza empresarial: Al aceptar nuestros consejos, demuestras que confías en
            nosostros debido al contenido que
            ofrecemos, sin que nuestra identidad sea relevante. Si decimos esto tenemos que ser buena gente, ¿verdad?
            ¿VERDAD?
        </p>
        <p> <span id="azulete">*2</span> El webmaster no se hace responsable de las pérdidas económicas causadas por
            este sitio web, y de las ganacias que éste consiga debido a ellas. Haber estudiao.</p>
        <p> <span id="azulete">*3</span> Es posible que por el cargo de los servicios, tengas que apoquinar una tarjeta
            prepago de Google Play. No nos hacemos responsables de lo que esto conlleva.
        </p>
    </div>
    <br>
    <footer>
        © 2022-23 INVERSIONICS S.A. Financed by Rubén Martínez.
        <script src="scripts/enganiados.js"></script>
        <script src="scripts/reloj_interno.js"></script>
    </footer>
</body>

</html>