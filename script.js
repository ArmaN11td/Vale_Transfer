var tipoSolicitud = document.getElementById("Tipo");
var campoTicket = document.getElementById("TK");
var campoPedido = document.getElementById("#PD");
var campoCliente = document.getElementById("Clte");
// Event listener para el cambio en el tipo de solicitud
/*tipoSolicitud.addEventListener("change", function () {
// Si el tipo de solicitud es "V" o "VP", habilita el campo de entrada de Ticket
if (tipoSolicitud.value === "V" || tipoSolicitud.value === "VP") {
    campoTicket.disabled = false;
} else {
    campoTicket.disabled = true; 
}
if (tipoSolicitud.value === "VP") {
    campoPedido.disabled = false; campoCliente.disabled = false; 
} else {
    campoPedido.disabled = true; campoCliente.disabled = true; 
}
});*/
function validarCampos() {
var tipoSolicitud = document.getElementById("Tipo").value;
var solicitante = document.getElementById("Solicitante").value;
var ticket = document.getElementById("TK").value;
var pedido = document.getElementById("#PD").value;
var cliente = document.getElementById("Clte").value;

if (tipoSolicitud === "V") {
if (solicitante !== "" && ticket !== "") {
    Alertas('success','Tuvo bien');
} else {
    Alertas('success',"Por favor, completa los campos obligatorios para Venta.");
}
} else if (tipoSolicitud === "VP") {
if (solicitante !== "" && ticket !== "" && pedido !== "" && cliente !== "") {
    alert("¡Campos validados correctamente!");
} else {
    alert("Por favor, completa los campos obligatorios para Venta - Pedido.");
}
} else if (tipoSolicitud === "VS" || tipoSolicitud === "R" || tipoSolicitud === "PD" || tipoSolicitud === "D") {
if (solicitante !== "") {
    alert("¡Campos validados correctamente!");
} else {
    alert("Por favor, completa el campo obligatorio para esta solicitud.");
}
} else {
alert("Por favor, selecciona un tipo de solicitud válido.");
}

function Alertas(icono, mensaje){
Swal.fire({
    position: 'top-end',
    icon: icono,
    title: mensaje,
    showConfirmButton: false,
    timer: 1500
})
}
}
