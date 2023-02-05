 <?php
date_default_timezone_set('UTC');
session_start();                                    //iniciar sesión
        $nuser = $_SESSION['nombrepresa'] ?? NULL;  //recoger nombre de usuario. De no existir, evitar errores asignando el valor de sesión como null
if($nuser == null || $nuser == '')
 {$bool_sesion = false; echo '<b> 403 FORBIDDEN </b> <br>LARGO DE AQUÍ'; die();}
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

 <body onload="reemplazar()" src="/scripts/insertar_indice.js" id="nioc_odnof">
     <header>
         <h1 id="dark_main_p"> <a href="/index.php">INVERSIONICS EXCLUSIVE <span style="font-size:25px">&#x1f911;</span></a></h1>
     </header>
     <div class="wrapper">
         <div id="indice_lateral_contenidos">
             Cargando...
         </div>
         <div id="dark_indice_inicio">
             <h1 id="dark_titulo_noticia">Andrés Tete te enseñará AHORA cómo apostar y ganar SIEMPRE 100%</h1>
             <div class="cuerpo_noticia">

                 <ul id="dark_parrafadita">
                     Los pasos son muy muy sencillos (en ningún orden en específico):
                     <br> <br>
                     <li>Ser un macho alfa con mentalidad de tiburón.</li>
                     <li>Ser calvo y si no se es, fingir serlo con una rapadita.</li>
                     <li>Tener una cantidad casi incontable de Bugatti y traficar en Rumanía.</li>
                     <li>Vender a pringaos consejos para alcanzar el éxito (esta funciona de verdad, creedme) </li>
                     <li>Invertir lo antes posible a todo lo que esté en tendencia.</li>
                     <li>Apostar siempre al equipo ganador. 😉</li>
                 </ul>
                 <div>
                     <img src="/contenido/img/andrew_tate_pizza.jpg" style="max-width:100%;">
                     <p id="dark_pie_foto"> Andrés Tete sorprendido por la pizza que fue enviada "por error" a su domicilio. Unas horas después, fue confiscada por las autoridades locales.</p>
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