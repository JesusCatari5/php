<?php

if(isset($_GET["opt"]) && $_GET["opt"]=="agregar"){

	$ca = new Brotcast();
	$ca->titulo = $_POST["titulo"];

	$mp3 = new Upload($_FILES["audio"]);
	if($mp3->uploaded){
		$mp3->Process("style/brotcast"); 
		if($mp3->processed){
			$audio = $mp3->file_dst_name;
		}
	}
	$ca->audio = $audio;







	$ca->agregar();
	Core::redir("index.php?vista=brotcast/inicio");
}
/*------------------------------------------------------------------------------*/
else if(isset($_GET["opt"]) && $_GET["opt"]=="actualizar"){
	$ca = Publicar::getById($_POST["id"]);
	

	$ca->titulo = $_POST["titulo"];
	
	if(isset($_FILES["audio"])){
		$mp3 = new Upload($_FILES["audio"]);
		if($mp3->uploaded){
		  $mp3->Process("style/brotcast");
		  if($mp3->processed){
			$ca->mp3 = $mp3->file_dst_name;
		  }
		}
	  }


	$ca->actualizar();
	Core::redir("index.php?vista=brotcast/inicio");
}

else if(isset($_GET["opt"]) && $_GET["opt"]=="eliminar"){
	$c = Publicar::getById($_GET["id"]);
	

	$c->eliminar();
	Core::redir("index.php?vista=brotcast/inicio");
} 
/*------------------------------------------------------------------------------*/


?>
