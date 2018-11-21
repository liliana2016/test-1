<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contacto</title>

<!-- Diseño de página utilizando bootstrap - internet-->
<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
-->
<!-- Diseño de página utilizando bootstrap - local-->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/registroDatos.css" rel="stylesheet">
</head>

<body>
<h3>CONTACTO </h3>
<br>


<div align="center" class="container">
<div class="row">
<div class="col-md-1">
</div>
<div class="col-md-7">
<iframe src="https://www.google.com/maps/place/Blvd.+Pedro+Figueroa+524,+Los+Doctores+1ra+Amp,+25250+Saltillo,+Coah./@25.4690812,-100.9753452,17z/data=!3m1!4b1!4m5!3m4!1s0x868812ced2c272c3:0xce0a5568f917fe91!8m2!3d25.4690764!4d-100.9731565" width="100%" height="500" frameborder="0" style="border:0" allowtransparency=""></iframe>
</div>


  
  <div  align="left"  class="col-md-3">
  <br>
  <form class="form-group" action="enviar.php" method="post">
  <label for="nombre">Nombre(s):</label>
  <input type="text" id="nombre" name="nombre"class="form-control mx-sm-3" placeholder="Nombre:" required autofocus>
  <br>
  <label for="email">Correo electrónico:</label>
  <input type="email" class="form-control mx-sm-3" id="email" name="email" placeholder="Correo electrónico:" required autofocus>
  <br>
  <label for="mensaje">Mensaje:</label>
  <!--<input type="text"  required autofocus>-->
  <textarea id="mensaje" name="mensaje" class="form-control mx-sm-3" style="height:150px" placeholder="Mensaje:" required>  </textarea>
  <br>
  
  
   <div align="center" class="form-inline">
  <button type="submit" class="btn btn-primary"> Enviar</button> 
  <button type="reset" class="btn btn-primary">Cancelar</button>
  </div>
  </div>
   </form>
   
  <div  align="left"  class="col-md-1"> 
  </div> 
  
  </div> <!--Row-->   
</div><!--Container --> 

<a href="index.php" data-toggle="tooltip" title="Inicio"> <img id="image1" src="Image/inicio1.png"> </a>










<script src="js/jquery-1.11.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>