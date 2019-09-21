function switch_on(){
    document.getElementById('img').src='/focoON.png';
    const Http = new XMLHttpRequest();
const url='http://35.188.90.189/EscribirDatos.php?foco=1';
Http.open("GET", url);
Http.send();
}
function switch_off(){
    document.getElementById('img').src='/focoOFF.png';
    const Http = new XMLHttpRequest();
const url='http://35.188.90.189/EscribirDatos.php?foco=0';
Http.open("GET", url);
Http.send();
}