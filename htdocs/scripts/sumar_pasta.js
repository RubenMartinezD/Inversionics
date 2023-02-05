var valor_money = 0
var texto_cifra = document.getElementById("gratis")
var but_10 = document.getElementById("sum10");
var but_20 = document.getElementById("sum20");
var but_30 = document.getElementById("sum30");
var but_40 = document.getElementById("sum40");
var but_50 = document.getElementById("sum50");
var comentario = document.getElementById("comentario")
var abandonar = document.getElementById("abandonar")
console.log(valor_money)



function sumar10() {
    valor_money = valor_money + 10;
    texto_cifra.textContent = parseInt(valor_money)
    console.log(valor_money)
}

function sumar20() {
    sumar10(sumar10())
}

function sumar30() {
    sumar10(sumar10(sumar10()))
}

function sumar40() {
    sumar10(sumar10(sumar10(sumar10())))
}

function sumar50() {
    sumar10(sumar10(sumar10(sumar10(sumar10(sumar10())))))
}


but_10.addEventListener("click", sumar10)
but_20.addEventListener("click", sumar20)
but_30.addEventListener("click", sumar30)
but_40.addEventListener("click", sumar40)
but_50.addEventListener("click", sumar50)

but_20.addEventListener("click", () => {
    comentario.textContent = "Se ve que quieres más, eh? Empiezas a captar la dinámica"
})

but_30.addEventListener("click", () => {
    comentario.textContent = "Eso es, siente el placer de acumular dinerito$"
})

but_40.addEventListener("click", () => {
    comentario.textContent = "Tenemos aquí a un futuro inversor con un gran futuro"
})

but_50.addEventListener("mouseover", () => {
    comentario.textContent = "Eso te pasa por planteártelo siquiera. La avaricia rompe el saco. Si hubieras invertido bien esto no hubiera pasado"
    valor_money = 0
    texto_cifra.textContent = parseInt(valor_money)
})

but_50.addEventListener("click", () => {
    comentario.textContent = "Ah, que planeas recuperar tus pérdidas, eh? Así es como no se pierde la mentalidad de tiburón.  Serás una gran adición a nuestro equipo."
})

abandonar.addEventListener("click", () => {
    comentario.textContent = "Todas las apuestas no jugadas son apuestas perdidas"
})
