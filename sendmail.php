
<?php
$name = $_POST["nombre"];
$email = $_POST["correo"];
$message="Name: ".$name."\r\n eMail: ".$email."\r\n \r\n".$_POST["mensaje"];

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
if (strlen($email)>0) { 
mail('realmontecarlo720903@gmail.com', 'AC Car OrestesS Notificacion de Clientes', $message);
mail('alcadytoo@yahoo.com.ar', 'AC Car OrestesS Notificacion de Clientes', $message);
mail('alcadytoo@gmail.com', 'AC Car OrestesS Notificacion de Clientes', $message);
}

header("location:contacto.php"); 
?>
