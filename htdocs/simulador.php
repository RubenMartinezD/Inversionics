<!DOCTYPE html>
<html lang="es">
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <title>INVERSIONICS - Los mejores métodos para ganar PA$TA</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" />
</head>


<body>
    <header>
        <h1 id="main_p"> <a href="index.html">INVERSIONICS <span style="font-size:25px">&#x1f911;</span></a></h1>
    </header>
    <div class="wrapper">
        <div id="indice_lateral_contenidos">
            <h1>Disfruta de nuestras exclusivas:</h1>
            <ul>
                <li><a href="simulador.php">Simulador de inversiones</a></li>
                <li><a href="gurus.html">Gurús recomendados con recetas para el éxito </a></li>

                <li><a href="sitios.html"> Mejores $itios para viajar</a></li>
                <li>
                    <a href="elon_musk.html">Elon Musk nos cuenta cómo se hizo multimillonario</a>
                </li>
                <li>Cómo apostar y ganar SIEMPRE 100% REAL NO FAKE [PRÓXIMAMENTE]</li>
                <li>Gana un Iphone 14 o una Google Play Card! GRATIS!!!!!11!!1 [PRÓXIMAMENTE]</li>
                <li>Sistemas piramidales 100% probados [PRÓXIMAMENTE]</li>
                <li>NFTs que te quitan el aliento pero te llenan la billetera [PRÓXIMAMENTE]</li>
                <li>Mejores casas de apuestas (y mejores psicólogos para combatir la adicción a la ludopatía)
                    [PRÓXIMAMENTE]
                </li>
            </ul>
        </div>

        <div id="indice_inicio">
            <h1 id="titulo_noticia">Nuestro exclusivo simulador de inversiones</h1>
            <p id="linea_autor">~Escrito por <span id=nom_autor>Adminversionic</span></p>
            <p id="parrafadita">¿Siempre has querido simular cuanto dinero ganarías si inviertes con nosotros? ¡Utiliza
                nuestro simulador! Tan solo di una cifra y la criptomoneda en la que quieres invertir. La calculadora
                usará complejos algoritmos y estadística para calcular
                uno de los posibles resultados que podrían ocurrirte en la vida real después de haber invertido durante
                un mes.
                <br>
            </p>
            <form action="#" method="post">
                <p id="parrafadita">Inserta la cantidad de € a <del>perder</del> apo$tar y la criptomoneda: <input
                        type="integer" name="dinerico"></input>
                    <select name="monedicas">
                        <option value="BTC">Bitcoin</option>
                        <option value="DOGE">Dogecoin</option>
                        <option value="ETH">Ethereum</option>
                    </select>
                    <input type="submit" name="submit" />
                </p>
            </form>

            <?php
                    if (isset($_POST['submit'])) {
                       $dinerico = $_POST['dinerico'];
                       $crypto = $_POST['monedicas'];
                       if (is_numeric($dinerico)){
                                       if ($crypto == "BTC"){
                                         $moneda = ($dinerico * 0.000062);
                                        } else if ($crypto == "DOGE"){
                                           $moneda = ($dinerico * 11.81);
                                        } else if ($crypto == "ETH"){
                                         $moneda = ($dinerico * 0.00084);
                                         }
                        $valorporcentaje=(rand(65, 99)/100);
                        echo "<p id='parrafadita'>El beneficio de tu inversión ha sido del <span id='peligro'> " . (($valorporcentaje * 100) -100) . "% </span>¡Enhorabuena! </p>";
                        $resultadoinversion=($dinerico * $valorporcentaje);
                        echo "<p id='parrafadita'>El dinero que queda tras la inversión es " . ($resultadoinversion) . "€ o " . $moneda . " " . $crypto . "</p>"; 
                       }
                       else{
                        echo "<p id='parrafadita'>Inserta un número, por favor. En esta página solo hablamos el lenguaje del dinero.</p>";
                        }
                }
            
            ?>
        </div>
    </div>
    <div id="letra pequeña">
    </div>

    <footer>
        © 2022 INVERSIONICS S.A. Financed by Rubén Martínez.

    </footer>
</body>

</html>