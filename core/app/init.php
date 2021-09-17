<?php



/// en caso de que el parametro accion este definido evitamos que se muestre
/// el layout por defecto y ejecutamos el accion sin mostrar nada de vista
/// print_r($_GET);

if(!isset($_GET["accion"])){
//	Bootload::load("default");
	Module::loadLayout();
}else{
///	echo "d:";
	// $params = $_REQUEST;
	Accion::load($_GET["accion"],new Request());
}

?>