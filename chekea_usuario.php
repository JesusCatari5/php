<?php 
require('config.php');
sleep(1);
if (isset($_POST)) {
    $usuario = (string)$_POST['usuario'];
    
    $result = $connexion->query(
        'SELECT * FROM usuario WHERE usuario = "'.strtolower($usuario).'"'
    );
    
    if ($result->num_rows > 0) {
        echo '<div class="alert alert-success"><strong>Felicidades !</strong> El Usuario Si !!.. esta Registrado en la Base de datos :)</div>';
    } else {
        echo '<div class="alert alert-danger"><strong>Oh no!</strong> El Nombre de usuario No !!.. se encuentra registrado en la Base de Datos :(</div>';
    }
}