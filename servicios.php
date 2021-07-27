<!doctype html>
<html lang="es">
  <?php
  session_start();
  $_SESSION['pagina']="servicios.php";
  include('logo.php');
  ?>  
   
  <body>
    <?php
    include('menu.php');
    ?>        <div class="container ">
          <div class="row ">
            <div class="col-md-3  col-xs-3 notas">
                <p class="text-justify"><?php echo $_SESSION[servicios_izquierda];?></p>
            </div> 
            <div class="col-md-6  col-xs-9" style="margin-bottom: 10px;">
              <div class="parrafo">
              <p class="text-justify"><?php echo $_SESSION[servicios_centro];?></p>
              </div>           
            </div>

            <div class="col-md-3  col-xs-12 parrafo">
              <p class="text-justify"><?php echo $_SESSION[servicios_derecha];?></p>
              <img class="imagen" style="width: 99%; float: left; border:1px solid white; background: white;" src="imagenes\servicio 001.png">
               
            </div>
          </div>
        </div>
        <?php include('codigo.php'); ?>
  </body>
</html>


