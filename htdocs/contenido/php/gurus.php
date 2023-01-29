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
        <h1 id="main_p"> <a href="/index.html">INVERSIONICS <span style="font-size:25px">&#x1f911;</span></a></h1>
    </header>
    <div class="wrapper">
        <div id="indice_lateral_contenidos">
            Cargando...
        </div>

        <div id="indice_inicio">
            <h1 id="titulo_noticia">Las mejores mentes privilegiadas a las que seguir ciegamente para ganar PA$TA</h1>
            <p id="linea_autor">~Escrito por <span id=nom_autor>los CEO de The Influenciator</span></p>
            <p id="parrafadita">El sueño de toda persona... ser rico.<br> El dinero lo gobierna todo, otorga poder a la
                gente... Es por ello que aquellos privilegiados con gran capital se tienen en tal alta estima entre los
                miembros comunes de nuestra sociedad. Claro, porque
                no es como si influyera la suerte o la corrupción en ciertos casos. Qué va. <br> Hoy vamos a honrar a
                aquellos ostentosos empresarios cuyo genoma superior les ha permitido llegar a su estatus actual.
                Irónicamente, en el momento de escritura
                de este artículo no disponemos de suficientes fondos como para contar con más de dos personalidades para
                este artículo. Pero bueno, valdrá.</p>

            <h2>Jordi Calm</h2>
            <div class="cuerpo_noticia">
                <p id="parrafadita">
                    <br> Jordi Calm es un Youtuber, Influencer, etc..., etc... que cuenta con su propio podcast, "The
                    Calm Project" el cual ha alcanzado la repercursión mundial de 300 millones de suscritores en
                    Youtube, superando a Joe Rogador por muchísimo
                    en visitas e ingresos.
                    <br> En una entrevista en primicia que hemos tenido con él en un hilo de Twitter, nos ha revelado
                    que su secreto para el éxito es hacer cada día "100 flexiones, 100 abdominales, 100 sentadillas al
                    aire y 10km de carrera" hasta quedarse
                    calvo.
                    <br> Como aún tiene algo de pelo, deducimos que aún le queda camino antes de llegar al pico de
                    ingresos donde inevitablemente se desplomará en picado cual montaña rusa.<br> También ha comentado
                    de pasada "Por lo menos no vendo NFTs",
                    palabras que han levantado polémica y que sinceramente, no compartimos. <br>
                </p>
                <div style="max-width: 400px">
                    <img src="/contenido/img/jordi_wild_de_los_chinos.jpg" style="max-width:100%;">
                    <p id="pie_foto">Jordi Calm sacando una foto pal Insta</p>
                </div>
            </div>
            <h2>Jeff Besos</h2>
            <div class="cuerpo_noticia2">

                <div style="max-width: 400px" id="foto_bezos">
                    <img src="/contenido/img/bezos.jpg" style="max-width:100%;">
                    <p id="pie_foto">Jeff Besos posando con su esposa, Grichka Bogdanoff</p>
                </div>
                <p id="parrafadita2">
                    Jeff Besos "el Kisses" para los amigos, es un magnate magnánimo como pocos, ya que es dueño de
                    Amazon, una de las empresas con mejor servicio técnico del mundo <del>(sobre todo cuando no es
                        estafa)</del>
                    <br> Puede apreciarse con facilidad su diferencia de nivel respecto al de Jordi Calm porque ya está
                    calvo. A pesar de ello, según la reputada fuente El Mundo Today, <a href="https://www.elmundotoday.com/2022/09/jeff-bezos-a-cinco-envios-de-amazon-mas-de-poder-dejar-de-vivir-con-sus-padres/">todavía
                        tiene dificultades para encontrar un hogar donde emanciparse</a>. Desde aquí le deseamos suerte
                    con la esperanza de que comparta un poco de su riqueza con nosotros antes de anteponer tales
                    intereses egoístas.
                </p>
            </div>
        </div>
    </div>
    <footer>
        © 2022-23 INVERSIONICS S.A. Financed by Rubén Martínez.
        <script src="/scripts/insertar_indice.js"></script>
    </footer>
</body>

</html>