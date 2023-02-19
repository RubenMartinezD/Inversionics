<?php
$nuser = $_REQUEST['nombrepresa'];
$pass = $_REQUEST['contraseña'];

//DECLARACIÓN DE LA RUTA DE LOS DATOS DE USUARIOS Y REDIRECCIONES
$path = "\datos\datos_cautivos.json";   //ruta relativa de los datos de usuario
$rutafail="\html\malapass";
$rutagood="\index.html";
$upTwo = dirname(__DIR__, 2);  //subir dos niveles la ruta relativa
$stringruta= $upTwo.$path;   //concatenar ambas rutas para tener la ruta correcta
$stringfail= strval($upTwo.$rutafail);  
$locationfail = "Location: ".$stringfail;
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
            header("Location: gurus.php"); exit();
        }
};

/*

if (((($filapass) AND ($filamail)) AND ($filamega)) AND (!$filadmin))
{session_start();
$_SESSION['email'] = $email;
$_SESSION['usuario'] = $damenick;
header("Location: /main/menu.php"); exit();}

else if (((($filapass) AND ($filamail)) AND ($filamega)) AND ($filadmin))
{session_start();
$_SESSION['email'] = $email;
$_SESSION['usuario'] = $damenick;
header("Location: /admin/admin.php"); exit();}

else if ((($filapass) AND ($filamail)) AND (!$filamega)) {header("Location: errorusr.html"); exit();}

else if (!$filamail) {header("Location: inexistant.html"); exit();} //este email no se encuentra asignado a ningún usuario 

else if (!$filapass) {header("Location: errorusr.html"); exit();} //Contraseña incorrecta

*/
?>