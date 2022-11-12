var fecha = new Date();
var año = fecha.getFullYear();
var mes = (parseInt(fecha.getMonth())) + 1;
var dia = fecha.getDate();
var hora = fecha.getHours();
var minutos = fecha.getMinutes();
var segundos = fecha.getSeconds();
var milisegundos = fecha.getMilliseconds();
console.log(año, mes, dia, hora, minutos, segundos, milisegundos)
var calculote = (milisegundos + segundos * 2 + minutos * 3 + hora * 4 + dia * 13 + mes * 29 + año * 1346)
return calculote