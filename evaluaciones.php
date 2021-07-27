  <!doctype html>
  <html lang="es">
 <?php
  session_start();    
  $_SESSION['pagina']="evaluaciones.php";
  include('logo.php');
  ?>  
  <body>
    <?php
    include('menu.php');?>  
        <div class="container">
          <div class="row ">
            <div class="col-md-8 col-xs-7">
              <div class="parrafo">
              <p class="text-justify"><?php echo $_SESSION[evaluaciones_izquierda];?></p>
              <p class="text-justify"><?php include_once("testimonios.php");?></p>
              </div>           
            </div>

            <div class="col-md-4 col-xs-5 parrafo">
              <div style="float: none;">
              <p class="text-justify" style="color: #GF6F6F;"><?php echo $_SESSION[evaluaciones_derecha];?></p> 
              </div>
              <form  style="color:black;" action="guardatestimonio.php" method="post" autocomplete="off">
                <p class="clasificacion" style=" font-size: 2vw;">
                    <input id="radio1" name="estrellas" value="5" type="radio"><!--
                --><label for="radio1">★</label><!--
                --><input id="radio2" name="estrellas" value="4" type="radio"><!--
                --><label for="radio2">★</label><!--
                --><input id="radio3" name="estrellas" value="3" type="radio"><!--
                --><label for="radio3">★</label><!--
                --><input id="radio4" name="estrellas" value="2" type="radio" autofocus="" required=""><!--
                --><label for="radio4">★</label><!--
                --><input id="radio5" name="estrellas" value="1" type="radio" autofocus="" required=""><!--
                --><label for="radio5">★</label>
                </p>
                <p><label ><?php echo $_SESSION[evaluaciones_nombre];?></label></p>
                <input name="nombre" type="text" id="usuario" placeholder="<?php echo $_SESSION[evaluaciones_ponnombre];?>" autofocus="" required="">
                <br><br>
                <p><label ><?php echo $_SESSION[evaluaciones_localidad];?></label></p>
                <input name="localidad" type="text" id="lugar" placeholder="<?php echo $_SESSION[evaluaciones_ponlocal];?>" autofocus="" required="">
                <br><br>
                <p><label><?php echo $_SESSION[evaluaciones_testimonio];?></label></p>
                <textarea style="overflow: hidden;" rows="4" cols="30" name="mensaje"></textarea>
                <p id="bot" ><input type="submit" id="submit" name="submit" value="<?php echo $_SESSION[evaluaciones_enviar];?>" class="boton" style="font-size: 1.5vw; float: none;"></p>
              </form>
          
          </div>
        </div>
        <?php include('codigo.php'); ?>
  </body>
</html>