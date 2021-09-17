<?php

if(isset($_GET["opt"]) && $_GET["opt"]=="agregar"){

	$ca = new Auspiciadores();
	$ca->nombre = $_POST["nombre"];
	$ca->celular_1 = $_POST["celular_1"];
	$ca->celular_2 = $_POST["celular_2"];

	$foto = "";
	$img = new Upload($_FILES["foto"]);
	if($img->uploaded){
		$img->Process("style/auspiciadores"); 
		if($img->processed){
			$foto = $img->file_dst_name;
		}
	}
	$ca->foto = $foto;




	$ca->estado = isset($_POST["estado"])?0:1;

	$ca->agregar();
	Core::redir("index.php?vista=auspiciadores/inicio");
}
/*------------------------------------------------------------------------------*/
else if(isset($_GET["opt"]) && $_GET["opt"]=="actualizar"){
	$ca = Auspiciadores::getById($_POST["id"]);
	

	$ca->nombre = $_POST["nombre"];
	$ca->celular_1 = $_POST["celular_1"];
	$ca->celular_2 = $_POST["celular_2"];

	

	if(isset($_FILES["foto"])){
		$foto = new Upload($_FILES["foto"]);
		if($foto->uploaded){
		  $foto->Process("style/auspiciadores");
		  if($foto->processed){
			$ca->foto = $foto->file_dst_name;
		  }
		}
	  }



	$ca->estado = isset($_POST["estado"])?1:0;


	$ca->actualizar();
	Core::redir("index.php?vista=auspiciadores/inicio");
}
/*------------------------------------------------------------------------------*/


?>
