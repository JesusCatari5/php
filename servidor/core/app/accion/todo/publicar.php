<?php

if(isset($_GET["opt"]) && $_GET["opt"]=="agregar"){

	$ca = new Publicar();
	$ca->lugar = $_POST["lugar"];
	$ca->titulo = $_POST["titulo"];
	$ca->comentario = $_POST["comentario"];
	$ca->youtube = $_POST["youtube"];
	$ca->categoria_id = $_POST["categoria_id"];

	$imagen = "";
	$img = new Upload($_FILES["imagen"]);
	if($img->uploaded){
		$img->Process("style/portada"); 
		if($img->processed){
			$imagen = $img->file_dst_name;
		}
	}
	$ca->imagen = $imagen;




	$ca->destacado = isset($_POST["destacado"])?1:0;

	$ca->agregar();
	Core::redir("index.php?vista=publicar/inicio");
}
/*------------------------------------------------------------------------------*/
else if(isset($_GET["opt"]) && $_GET["opt"]=="actualizar"){
	$ca = Publicar::getById($_POST["id"]);
	

	$ca->lugar = $_POST["lugar"];
	$ca->titulo = $_POST["titulo"];
		$ca->comentario = $_POST["comentario"];
	$ca->youtube = $_POST["youtube"];
	$ca->categoria_id = $_POST["categoria_id"];


	if(isset($_FILES["imagen"])){
		$image = new Upload($_FILES["imagen"]);
		if($image->uploaded){
		  $image->Process("style/portada");
		  if($image->processed){
			$ca->image = $image->file_dst_name;
		  }
		}
	  }


/*	$imagen = $ca->imagen;
	$img = new Upload($_FILES["imagen"]);
	if($img->uploaded){
		$img->Process("style/portada");
		if($img->processed){
			$imagen = $img->file_dst_name;
		}
	}
	$ca->imagen = $imagen;
*/
	$ca->estado = isset($_POST["estado"])?1:0;
	$ca->destacado = isset($_POST["destacado"])?1:0;




	//$ca->estado = isset($_POST["estado"])?1:0;

	$ca->actualizar();
	Core::redir("index.php?vista=publicar/inicio");
}

else if(isset($_GET["opt"]) && $_GET["opt"]=="eliminar"){
	$c = Publicar::getById($_GET["id"]);
	

	$c->eliminar();
	Core::redir("index.php?vista=publicar/inicio");
} 
/*------------------------------------------------------------------------------*/


?>
