<?php
date_default_timezone_set('UTC');
session_start();                                    //iniciar sesión
        $nuser = $_SESSION['nombrepresa'] ;  //recoger nombre de usuario.
if($nuser == null || $nuser == '')
 {$bool_sesion = false; echo '<b> 403 FORBIDDEN </b> <br>LARGO DE AQUÍ'; die();}
else { $bool_sesion = true; }
?>

<h1>Disfruta de nuestras exclusivas:</h1>
<ul>
    <li><a href="/contenido/php/simulador.php">Simulador de inversiones</a></li>
    <li><a href="/contenido/php/gurus.php">Gurús recomendados con recetas para el éxito </a></li>

    <li><a href="/contenido/php/sitios.php"> Mejores $itios para viajar</a></li>
    <li>
        <a href="/contenido/php/elon_musk.php">Elon Musk nos cuenta cómo se hizo multimillonario</a>
    </li>
    <li><a href="/contenido/php/VIP_metodos_apuesta.php"><b>[DESBLOQUEADO] </b>Cómo apostar y ganar SIEMPRE con
            Andrés Tete</a>
    </li>
    <li>Sistemas piramidales 1000% probados [PRÓXIMAMENTE]</li>
    <li>NFTs que te quitan el aliento pero te llenan la billetera [PRÓXIMAMENTE]</li>
    <li>Mejores casas de apuestas (y mejores psicólogos para combatir la adicción a la ludopatía [PRÓXIMAMENTE] </li>
</ul>
<h2> Bienvenido, <?php echo $_SESSION['nombrepresa']; ?></h2>
<h3><a href="/scripts/CODIGO_salida_sesion.php"> Cerrar sesión y dejar de crear capital</a></h3>