<?php
if(isset($_SESSION["usuario_id"])){ Core::$user = Usuario::getById($_SESSION["usuario_id"]); }

/// en caso de que el parametro action este definido evitamos que se muestre
/// el layout por defecto y ejecutamos el action sin mostrar nada de vista
// print_r($_GET);
if(!isset($_GET["accion"])){
//	Bootload::load("default");
	Module::loadLayout("index");
}else{
	Accion::load($_GET["accion"]);
}

?>