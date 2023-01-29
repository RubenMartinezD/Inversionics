/**
 * Función para reemplazar el índice lateral del sitio según si el usuario es estándar o admin
 */
function reemplazar() {
    var reemplazo = document.getElementById("indice_lateral_contenidos") // lugar de los html donde se reemplaza el índice
    const xhr = new XMLHttpRequest();
    var_sesion = document.getElementById("var_sesion")                   // enlaza a una etiqueta oculta del html. Único modo que encontré de recibir datos de sesión en javascript
    console.log(var_sesion);
    if (!!var_sesion.innerHTML) {                                        // si la sesión existe, comprobando si se escribió en la etiqueta oculta
        xhr.open("GET", "/datos/texto_indice_presas.php");               // Índice para usuarios VIP (ya engañados)
    } else {
        xhr.open("GET", "/datos/texto_indice_plebe.html");               // Índice para usuarios normales
    }
    xhr.onload = () => {
        var texto_nuevo = xhr.responseXML;
        cuerpo = texto_nuevo.body
        reemplazo.innerHTML = cuerpo.innerHTML                           // sustituir el contenido del cuerpo por el que hay en los archivos índice
    }
    xhr.responseType = "document";
    xhr.send();
}