function enviarFormulario(event) {

event.preventDefault();

let form = event.originalTarget;
let data = $(form).serialize();


$.post("php/sendData.php",data,function(res){
jRes = JSON.parse(res);
if (jRes.queryStatus) location.reload();
else alert("Oh, oh! Un error...");
});

}
document.getElementById("formulario").addEventListener("submit", enviarFormulario);
