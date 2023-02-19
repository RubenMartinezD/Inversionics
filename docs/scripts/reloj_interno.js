var text_reloj = document.getElementById("text_reloj");
var cuerpo = document.getElementById('fondo_coin');
cuerpo.addEventListener("mouseover", crearIntervaloReloj);
function activarReloj() {
    var fecha = new Date();
    var segundos = fecha.getSeconds();
    if (segundos % 2) {
        text_reloj.style.color = "green";
        console.log(segundos)
    } else {
        text_reloj.style.color = "orange";
        console.log(segundos)
    }
}

function crearIntervaloReloj() {
    intervalo_reloj = setInterval(activarReloj, 1000);
}