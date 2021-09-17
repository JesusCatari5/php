<?php

// define('LBROOT',getcwd()); // LegoBox Root ... the server root
// include("core/controller/Database.php");

if(Session::getUID()=="") {

$user = $_POST['usuario'];
$pass = sha1(md5($_POST['pass']));

$base = new Database();
$con = $base->connect();
 $sql = "select * from usuario where ( (nombre!=\"\" and (nombre= \"".$user."\" and pass= \"".$pass."\")) or (usuario!=\"\" and (usuario= \"".$user."\" and pass= \"".$pass."\") )) and estado=1";
//print $sql;
$query = $con->query($sql);
$found = false;
$userid = null;
while($r = $query->fetch_array()){
	$found = true ;
	$userid = $r['id'];
}

if($found==true) {
	$_SESSION['usuario_id']=$userid ;
	print "Cargando ... $user";
	print "<script>window.location='index.php?vista=home';</script>";
}else {
	print "<script>window.location='index.php?view=login';</script>";
}

}else{
	print "<script>window.location='./';</script>";
	
}
?>