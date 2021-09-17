<?php

if(isset($_GET["opt"]) && $_GET["opt"]=="aceptar"){
		$c = Comentario::getById($_GET["id"]);
	$c->aceptar();
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="rechazar"){
	$c = Comentario::getById($_GET["id"]);
	$c->rechazar();
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="eliminar"){
	$c = Comentario::getById($_GET["id"]);
	$c->eliminar();
}
Core::redir("index.php?vista=comentario/inicio");

?>