<?php

if(isset($_GET["opt"]) && $_GET["opt"]=="agregar"){

	$ca = new Categoria();
	$ca->nombre = $_POST["nombre"];
	$ca->nombre_corto = $_POST["nombre_corto"];
	


	$ca->agregar();
	Core::redir("index.php?vista=categoria/inicio");
}
/*------------------------------------------------------------------------------*/
else if(isset($_GET["opt"]) && $_GET["opt"]=="actualizar"){
	$ca = Categoria::getById($_POST["id"]);
	
	$ca->nombre = $_POST["nombre"];
	$ca->nombre_corto = $_POST["nombre_corto"];
	$ca->estado = isset($_POST["estado"])?1:0;

	$ca->actualizar();
	Core::redir("index.php?vista=categoria/inicio");
}
/*------------------------------------------------------------------------------*/

else if(isset($_GET["opt"]) && $_GET["opt"]=="eliminar"){
	$c = Categoria::getById($_GET["id"]);
	

	$c->eliminar();
	Core::redir("index.php?vista=categoria/inicio");
} 
?>
