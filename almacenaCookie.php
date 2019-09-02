<?php 
  



  if (!$_COOKIE["idioma_seleccionado"]) {
  	header("location: index.html");
  }else if ($_COOKIE["idioma_seleccionado"]=="es") {
  	header("location: pagEspañol.html"); 
    
  }else if ($_COOKIE["idioma_seleccionado"]=="en") {
  	header("location: pagEnglish.html");
  	# code...
  }

 ?>