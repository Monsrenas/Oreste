<?php
 session_start();   
  
?>
<nav class="navbar navbar-inverse" role="navigation" style="margin-top: -5px !important; ">
      <div class="navbar-header logo">
        <img src="imagenes/nuevologo3.png">
        <div class="navbar-header nlogmbre">
          <strong>A/C ORESTES’S</strong>
        </div>
      </div>
  
  <div style="background-color: white; width: 99%; min-height: 7vw; padding: 2px;">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 65%; overflow: hidden; margin-top: 5px;">
      <!-- Indicators -->
      <ol class="carousel-indicators" >
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner"  >

      <div class="item active">
        <img src="imagenes/banner1.jpg" alt="Los Angeles">
      </div>

      <div class="item">
        <img src="imagenes/banner2.jpg" alt="Chicago">
      </div>

      <div class="item">
        <img src="imagenes/banner3.jpg" alt="New York">
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
      <img class="imagen" style="width: 5vw; float: right; margin-top: -90px; padding: 0px;"  src="imagenes\servicio 001.png">
  </div>
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php"><?php echo $_SESSION[inicio]?></a></li>
        <li><a href="servicios.php"><?php echo $_SESSION[servicios]?></a></li>
        <li><a href="nosotros.php"><?php echo $_SESSION[nosotros]?></a></li>
        <li><a href="evaluaciones.php"><?php echo $_SESSION[evaluaciones]?></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="cambiai.php"> <img style="width: 20px;" src="imagenes/<?php echo $_SESSION['icono']?>" alt="Idioma"></a></li>
      </ul>
      <div class="nav navbar-nav " style="color: yellow; text-align: center; width: 30%; margin-top: 6px; font-size: 2em;">
        +1(512)412-8242
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="contacto.php"><span class="glyphicon glyphicon-earphone"></span><?php echo $_SESSION[contactanos]?></a></li>
      </ul>
    </div>
  </div>
</nav>

