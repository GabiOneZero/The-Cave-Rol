
document.getElementById("btn-enviar").addEventListener("click", enviarMensaje, false);

function enviarMensaje() {

    //window.open('mailto:info@thecaverol.com?subject=subject&body=body');

    let nombre = document.getElementsByName('nombre')[0].value;
    let mensaje = document.getElementsByName('mensaje')[0].value;
    alert("Gracias " + nombre + ". El siguiente mensaje ha sido enviado: " + mensaje + ".");

}