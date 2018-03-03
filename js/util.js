function sendData(fecha,categoria,descripcion,monto){

    var cadena={ " fecha ": fecha,
                 " categoria": categoria,
                 " descripcion": descripcion,
                 " monto": monto
               };
              console.log(cadena);
  $.ajax({
    data: cadena,
    console.log(data);
    /*type: "POST",
    url: "php/sendData.php",
    success:function(r){
      if(r==1){
        $('#datos').load('components/tabla.php');
        alert("Registro realizado");
      }else{
        alert("Algo salió mal");

      }
    }
  });*/
}
function callData(datos){

  d=datos.split('||');

  $('#idRegistro').val(d[0])
  $('#dateUp').val(d[1]);
  $('#categoUp').val(d[2]);
  $('#commentoUp').val(d[3]);
  $('#currencyUp').val(d[4]);
  $('#modalUp').fadeIn("slow");
}

function upToData(){
  var idRegistro=$('#idRegistro').val();
  var fecha=$('#dateUp').val();//$('#yearUp').val() +'-' +  $('#monthUp').val()+'-' + $('#dayUp').val();
  var categoria=$('#categoUp').val();
  var descripcion=$('#commentoUp').val();
  var monto=$('#currencyUp').val();


  var cadena={ "id":idRegistro,
               " fecha ": fecha,
               " categoria": categoria,
               " descripcion": descripcion,
               " monto": monto
             };
             console.log(cadena);
             $.ajax({
               data: cadena,
               type: "POST",
               url: "php/upToData.php",
               success:function(r){
                 if(r==1){
                   $('#datos').load('components/tabla.php');
                   alert("Actualizado");
                 }else{
                   alert("Algo salió mal");

                 }
               }
             });
}
