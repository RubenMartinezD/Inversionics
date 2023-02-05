<?php
$nuser = $_REQUEST['nombrepresa'];
$pass = $_REQUEST['contraseña'];
if (str_contains($nuser, "<script")||(str_contains($nuser, "<img")))
{
    echo "muy muy mal";
    header("Location: \contenido\html\ilegalidad.html");  exit();

    };     

//DECLARACIÓN DE LA RUTA DE LOS DATOS DE USUARIOS Y REDIRECCIONES
$path = "\datos\datos_cautivos.json";   //ruta relativa de los datos de usuario
$rutafail="\html\malapass";
$upTwo = dirname(__DIR__, 1);  //subir dun nivel la ruta relativa
$stringruta= $upTwo.$path;   //concatenar ambas rutas para tener la ruta correcta
include_once $stringruta;

//RECOGIDA DE DATOS DESDE EL ARCHIVO JSON
$contents = file_get_contents($stringruta);
$data = json_decode($contents);  //array descodificado de los datos de usuario existentes

//BÚSQUEDA DE NOMBRE DE USUARIO Y CONTRASEÑA
$keys = array_keys($data);
for($i = 0; $i < count($data); $i++) {
        if (($data[$keys[$i]]->nick == $nuser) &&($data[$keys[$i]]->password == $pass)) {
            echo "SUCCESS";
            session_start();
            $_SESSION['nombrepresa'] = $nuser;
            header("Location: /contenido/php/premium_index.php"); exit();
        }
if ($_SESSION['nombrepresa'] == NULL)
 {header("Location: \contenido\html\inexistencia.html");};
};
?>