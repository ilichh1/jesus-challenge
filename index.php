<?php
  require_once"./php/conexion.php";
  $conexion = conexion();
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta name="viewport" content="">
  <meta charset="utf-8">
  <title>Challenge</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
</head>

<body class="container">
  <div class="sticky">
    <h2>Challenge</h2>
  </div>
  <section class="inputData">
  <form id="formulario">
  <div class="putInfo">
  <aside>
    <h3 class="card-header">Agregar nuevo registro</h3>
    <input type="text" hidden="" id="idRegistro" name="" value="">
      <h3>Fecha</h3>
      <div class="date">
        <input id="date" type="date" name="fecha" value="" placeholder="DD/MM/AAAA">
        <!--select id="day" type="text" name="" value="Día">
          <option value="01">01</option>
          <option value="02">02</option>
          <option value="03">03</option>
          <option value="04">04</option>
          <option value="05">05</option>
          <option value="06">06</option>
          <option value="07">07</option>
          <option value="08">08</option>
          <option value="09">09</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
        </select>
        <select id="month" name="">
          <option value="01">Enero</option>
          <option value="02">Febrero</option>
          <option value="03">Marzo</option>
          <option value="04">Abril</option>
          <option value="05">Mayo</option>
          <option value="06">Junio</option>
          <option value="07">Julio</option>
          <option value="08">Agosto</option>
          <option value="09">Septiembre</option>
          <option value="10">Octubre</option>
          <option value="11">Noviembre</option>
          <option value="12">Diciembre</option>
        </select>
        <input id="year" type="number" name="" value="2019" min="1900" max="2100"-->
      </div>
      <div class="Category">
        <h3>Tipo</h3>
        <select id="catego" class="catSelect" name="tip">
            <option value="Ingreso">Ingreso</option>
            <option value="Egreso">Egreso</option>
            <option value="Factura pendiente">Factura pendiente</option>
        </select>
      </div>
      <div class="comment">
        <h3>Descripción</h3>
        <textarea id="commento" name="descripcion" rows="8" cols="40" value=""></textarea>
      </div>
      <div class="currency">
          <h3>Monto</h3>
      <i class="fas fa-dollar-sign"></i>  <input id="currency" name="monto" class="currence" type="number" value="" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100"/>
      </div>
    <div class="button">
      <button id="sendBtn" class="button-send" name="" value="" type="submit">Agregar</button>
    </div>
  </aside>
  </div>
</form>
  </section>
<section class="dataShow">
<div id="datos" class="datble">
<?php require_once 'components/tabla.php'; ?>
</div>
</section>
<div class="modal" id="modalUp">
  <div class="card">
    <h3 class="card-header2">Modificaciones</h3>
      <h3>Fecha</h3>
      <div class="date2" >
        <input  id="dateUp" type="text" name="" value="">
        <!--select id="dayUp" type="text" name="" value="Día">
          <option value="01">01</option>
          <option value="02">02</option>
          <option value="03">03</option>
          <option value="04">04</option>
          <option value="05">05</option>
          <option value="06">06</option>
          <option value="07">07</option>
          <option value="08">08</option>
          <option value="09">09</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
        </select>
        <select id="monthUp" name="">
          <option value="01">Enero</option>
          <option value="02">Febrero</option>
          <option value="03">Marzo</option>
          <option value="04">Abril</option>
          <option value="05">Mayo</option>
          <option value="06">Junio</option>
          <option value="07">Julio</option>
          <option value="08">Agosto</option>
          <option value="09">Septiembre</option>
          <option value="10">Octubre</option>
          <option value="11">Noviembre</option>
          <option value="12">Diciembre</option>
        </select>
        <input id="yearUp" type="number" name="" value="2019" min="1900" max="2100"-->
      </div>
      <div class="Category2">
        <h3>Tipo</h3>
        <select id="categoUp" class="catSelect2" name="">
            <option value="Ingreso">Ingreso</option>
            <option value="Egreso">Egreso</option>
            <option value="Factura pendiente">Factura pendiente</option>
        </select>
      </div>
      <div class="comment2">
        <h3>Descripción</h3>
        <textarea id="commentoUp" name="message" rows="8" cols="40" value=""></textarea>
      </div>
      <div class="currency">
          <h3>Monto</h3>
      <i class="fas fa-dollar-sign sign"></i>  <input id="currencyUp" class="currence2" type="number" value="" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100"/>
      </div>
    <div class="button">
      <button id="upBtn" class="button-send2" name="" value="">confirmar</button>
    </div>
  </div>
</div>
  <script src="js/fontawesome-all.js"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="//code.jquery.com/jquery-1.12.4.js"></script>
  <script src="js/test-form.js"></script>
</body>

</html>
