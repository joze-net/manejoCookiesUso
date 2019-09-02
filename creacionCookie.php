<?php 
  setcookie("idioma_seleccionado",$_GET["idioma"],time()+86400);//creamos  la cookie le damos un nombre y luego con get obtenemos el dato que se envio por la URL
  header("location: almacenaCookie.php");//REDIRIGIMOS a la pagina donde se trabajara las opciones de pagina segun la opcion elejida
 ?>
