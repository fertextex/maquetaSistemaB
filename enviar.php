<?php
$destino="fernando.santander.f@gmail.com"
$nombre= $_POST["nombre"];
$email= $_POST["email"];
$empresa= $_POST["empresa"];
$dejar_mensaje= $_POST["dejar_mensaje"];
$_contenido= "Nombre". $nombre . "\nEmail". $email "\nEmpresa".  $dejar_mensaje "\nDejar_Mensaje";
mail($destino,"Contacto"$_contenido);

?>