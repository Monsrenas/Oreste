  <!doctype html>
  <html lang="es">
 <?php
  session_start();    
  $_SESSION['pagina']="inicio.php";
  include('logo.php');
  ?>  
  <body>
    <?php
    include('menu.php');?>  
        <div class="container">
          <div class="row ">
            <div class="col-md-3 col-xs-3">
                <img class="imagen" style="width: 20.6vw; float: left; margin-top: -35px; " src="imagenes\orestesfoto2.png">
            </div> 
            <div class="col-md-6 col-xs-9">
              <div class="parrafo">
              <p class="text-justify"><?php echo $_SESSION[inicio_centro];?></p>
              </div>           
            </div>

            <div class="col-md-3 col-xs-12 notas">
              <p class="text-justify" style="color: #6F6F6F;"><?php echo $_SESSION[inicio_derecha];?></p> 
            </div>
          </div>
        </div>
        <?php include('codigo.php'); ?>
  </body>
</html>