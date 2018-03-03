$(document).ready(function(){
  $('#datos').load('components/tabla.php');
});
$(document).ready(function(){
  $('#sendBtn').click(function(){
    var fecha =$('#date').val();       //$('#year').val() +'-' +  $('#month').val()+'-' + $('#day').val();
    var categoria=$('#catego').val();
    var descripcion=$('#commento').val();
    var monto=$('#currency').val();
    sendData(fecha,categoria,descripcion,monto);
  });
});
$(document).ready(function(){
  $('#upBtn').click(function(){
    upToData();
  $('#modalUp').fadeOut("slow");  });
});
