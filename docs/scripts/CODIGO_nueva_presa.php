<?php

//VALORES RECOGIDOS DEL FORMULARIO
$nuser = $_REQUEST['nombrepresa'];
$pass = $_REQUEST['contraseña'];
$cpass = $_REQUEST['contraseña2'];

//DECLARACIÓN DE LA RUTA DE LOS DATOS DE USUARIOS Y REDIRECCIONES
$path = "\datos\datos_cautivos.json";   //ruta relativa de los datos de usuario
$rutafail="\html\malapass";
$upTwo = dirname(__DIR__, 1);  //subir dos niveles la ruta relativa
$stringruta= $upTwo.$path;   //concatenar ambas rutas para tener la ruta correcta
include_once $stringruta;

//
if ($pass !== $cpass){
    echo "contraseña incorrecta";
 header("Location: \contenido\html\malapass.html");  exit();
} 
else{

//RECOGIDA DE DATOS DESDE EL ARCHIVO JSON
$contents = file_get_contents($stringruta);
$data = json_decode($contents, true);  //array descodificado de los datos de usuario existentes

//ID DEL NUEVO USUARIO
$bool_policia = false;   // enviar a la página de ilegalidades si es true
$bool_insercion = true;  // solo se puede insertar si es true
$contadorusuario=1;
$keys = array_keys($data);
for($i = 0; $i < count($data); $i++) {
    echo $keys[$i] . "{<br>";
    foreach($data[$keys[$i]] as $key => $value) {
        echo $key . " : " . $value . "<br>";
        if ($key == "id"){              //cuando recorra el id de usuario, sumar 1 para poder pasar después al ID del siguiente
        $contadorusuario++;
        };
        if ($value == $nuser){
            echo "detectada coincidencia de usuario";
            $bool_insercion = false;
            break;
            };
        if (str_contains($nuser, "<script")||(str_contains($nuser, "<img")))
        {
            echo "muy muy mal";
            $bool_insercion = false;
            $bool_policia = true;
            break;
            };     
    };
    echo "}<br> El usuario que toca ahora en el array es el ". $contadorusuario;
};
if ($bool_insercion == false && $bool_policia == true){
    header("Location: \contenido\html\ilegalidad.html");  exit();
   }
else if ($bool_insercion == false){
 header("Location: \contenido\html\maluser.html");  exit();
}
else{
//INSERCIÓN DE DATOS
$datosnuevoincauto=array("id" => $contadorusuario, "nick" => $nuser, "password" => $pass, "rol" => "presa");   // se fijan los datos del nuevo usuario
array_push($data, $datosnuevoincauto); //se insertan en el array descodificado. Ahora $data tiene añadidos los datos del nuevo usuario
$datosguardados= json_encode($data); // se codifican los datos para insertarlos en el JSON
file_put_contents($stringruta, $datosguardados);  //se inserta todo el en archivo JSON
header("Location: \contenido\html\conseguido.html");  exit();

};
};
?>