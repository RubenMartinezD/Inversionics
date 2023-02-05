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
            <h1 id="titulo_noticia">Elon Musk nos cuenta en primicia su trayectoria hasta el más rico del mundo</h1>
            <p id="linea_autor">~Escrito por <span id=nom_autor>los hermanos Federico y Fede Pobre</span></p>
            <p id="parrafadita">¿Hay algún alma de cántaro que no conozca a Elon Musk? ¡Si hasta salió en Los Simpson!
                <br>¿Como? ¿Que nadie ve ya Los Simpson? Bueno... este señor es conocido por sus ingentes 208,30 MIL
                MILLONES de pavos y por ser el dueño del lugar happy flower llamado Twitter y de los cochecitos esos que
                tienen un diseño muy loco pero
                se venden regular. Hoy lo tenemos aquí con nosotros. Traducciones de la mano de nuestro becario
                empleando la tecnología Google Translate.
            </p>
            <div class="cuerpo_noticia">
                <p id="parrafadita">
                    <br>
                    <b>Inversionics:</b> Buenos crepúsculos, Elon.<br>
                    <b>Elon Musk:</b> Buenas noches inversor. <br>
                    <b>Inversionics:</b> Tenemos muchos lectores que buscan dinero fácil y rápido, de hecho muchos de
                    ellos le admiran. Qué le recomienda hacer a un alevín de las inversiones?<br>
                    <b>Elon Musk:</b> Que siga soñando mientras mi billetera crece. Además, que tome un café para hacer
                    frente... no, que obtenga una marca de verificación de Twitter en su lugar. <br>
                    <b>Inversionics:</b> ¿Entonces quiere comunicarles que nunca podrán llegar a su nivel de capital?
                    <br>
                    <b>Elon Musk:</b> Ni en un millón de StarLinks. <br>
                    <b>Inversionics:</b> Oh. Pues... ehm... Por esto existimos nosotros, INVERSIONICS. Permitiremos al
                    ciudadano medio obtener una minimísima fracción de dinero que le permitirá pasar a un nivel superior
                    de ingresos ;)
                    <br>
                    <b>Elon Musk:</b> ¿Haceis qué? <br>
                    <b>Inversionics:</b> Ofrecer ofertas y otras cosas jugosas, como tarjetas de Google Play Card. Los
                    incau... digoo, los usuarios disfrutan y confían en nuestras publicaciones. Espera. Elon, perdone,
                    pero es de muy mala educación hablar
                    por teléfono en medio de otra conversación.<br>
                    <b>Elon Musk:</b> Okey. Resuelto. *cuelga* Ahora trabajas para mí.<br>
                    <b>Inversionics:</b> ¿Cómo? ¿Acaba de comprar INVERSIONICS?<br>
                    <b>Elon Musk:</b> Demasiadas preguntas impertinentes. Despedido.<br>
                    <b>LA ENTREVISTA FUE CANCELADA A PETICIÓN DE ELON MUSK</b>
                    <br>
                </p>
                <div id="foto" style="max-width: 400px">
                    <img src="/contenido/img/elon_wario.webp" style="max-width:100%;">
                    <p id="pie_foto"> Elon Musk en su faceta más autobiográfica interpretando, cómo no, a un personaje
                        obsesionado con el dinero.</p>
                </div>
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