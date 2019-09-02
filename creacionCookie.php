<?php 
  setcookie("idioma_seleccionado",$_GET["idioma"]);//creamos  la cookie le damos un nombre y luego con get obtenemos el dato que se envio por la URL
  header("location: almacenaCookie.php");
 ?>
