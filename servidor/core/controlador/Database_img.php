<?php

$Localhost = 'localhost';
$Usuario_BD = 'u123280817_tarija';
$Password_BD = 'Francosivila2020!';
$Nombre_BD = 'u123280817_fides';

try{
  $DB_con = new PDO("mysql:host={$Localhost};dbname={$Nombre_BD};charset=UTF8",$Usuario_BD,$Password_BD);
  $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
  echo $e->getMessage();
}