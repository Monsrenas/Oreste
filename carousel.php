
<!DOCTYPE html>
<html lang="en">
 <?php
  session_start();    
  include('logo.php');
  ?>  
<body>

<div class="container">
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" >

       <div class="item active">
      <img src="imagenes/banner1.jpg" alt="Los Angeles">
      Prueba
    </div>

    <div class="item">
      <img src="produccion/pruepuesta de trama.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="produccion/circuitoimpreso.jpeg" alt="New York">
    </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>
