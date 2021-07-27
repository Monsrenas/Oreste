<!doctype html>
<html lang="es">
<?php
  session_start();
  $_SESSION['pagina']="contacto.php";
  include('logo.php');
?>  
   
  <body>
    <?php include('menu.php');?>        
        <div class="container-fluid" >
          <div class="row "> 
            <div class="col-md-6">
              <div class="parrafo" style="color:black;">
                <form id="form-login" action="sendmail.php" method="post" autocomplete="off">
                    <p><label >Full name:</label></p>
                        <input name="nombre" type="text" id="usuario" placeholder="Type Full Name" autofocus="" required="">
                    <p><label >eMail:</label></p>
                        <input name="correo" type="email" id="usuario" placeholder="Type eMail Addres" autofocus="" required="">
 
                    <p><label>Brief Message:</label></p>
                        <textarea rows="4" cols="35" name="mensaje"></textarea>
                    <p id="bot" ><input type="submit" id="submit" name="submit" value="Send" class="boton" style="font-size: 1.5vw; float: none;"></p>
                </form>
              </div>           
            </div>

            <div class="col-md-6">
              <div class="parrafo">
                    <p class="text-justify"><?php echo $_SESSION[contactanos_derecha];?></p>
              </div>
            </div>


          </div>
        </div>
        </body>
        <?php include('codigo.php'); ?>
  
</html>
