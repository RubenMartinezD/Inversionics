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
    <title>Página principal de INVERSIONICS - Los mejores métodos para ganar PA$TA</title>

    <link rel="stylesheet" type="text/css" href="/contenido/estilo.css" />
</head>

<body id="fondo_coin">
    <header>
        <h1 id="main_p"><span style="font-size:25px">&#x1f911;</span> INVERSIONICS MAIN PAGE FOR THE AVERAGE INVESTOR <span style="font-size:25px">&#x1f911;</span></a>
        </h1>
        <p id="parrafadita_inicial"> <span id="peligro">Anda, arreando que la pasta no se genera sola.</span>
        </p>
    </header>
    <br>
    <div id="indice_contenidos">
        <h1 id="presentando">Adelante, invierte tu valioso tiempo como miembro de nuestra comunidad con el siguiente contenido exclusivo:</h1>
        <ul id="articulos">
            <ul>
                <li><a href="/contenido/php/simulador.php">Simulador de inversiones</a></li>
                <li><a href="/contenido/php/gurus.php">Gurús recomendados con recetas para el éxito </a></li>

                <li><a href="/contenido/php/sitios.php"> Mejores $itios para viajar</a></li>
                <li>
                    <a href="/contenido/php/elon_musk.php">Elon Musk nos cuenta cómo se hizo multimillonario</a>
                </li>
                <li><a href="/contenido/php/metodos_apuesta.php"><b>[CONTENIDO DESBLOQUEADO] </b>Cómo apostar y ganar
                        SIEMPRE 100% REAL NO FAKE con Andrés Tete</a>
                </li>
                <li>[PRÓXIMAMENTE] Sistemas piramidales 100% probados</li>
                <li>[PRÓXIMAMENTE] NFTs que te quitan el aliento pero te llenan la billetera </li>
                <li>[PRÓXIMAMENTE] Mejores casas de apuestas (y mejores psicólogos para combatir la adicción a la ludopatía)

                </li>
            </ul>

            <h2><a href="/contenido/html/inicio_sesion.html"> Estás logueado como <?php echo $_SESSION['nombrepresa'];?> </a></h2>
            <h3><a href="/scripts/CODIGO_salida_sesion.php"> Cerrar sesión y dejar de crear capital</a></h3>
    </div>


    <br>
    <footer>
        © 2022-23 INVERSIONICS S.A. Financed by Rubén Martínez.
        <script src="scripts/enganiados.js"></script>
    </footer>
</body>

</html>