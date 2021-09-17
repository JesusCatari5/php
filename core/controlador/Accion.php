<?php



class Accion {
	/**
	* @function load
	* @brief la funcion load carga una vista correspondiente a un modulo
	**/	
	public static function load($accion){
		// Module::$module;
		
		if(!isset($_GET['accion'])){
			include "core/app/accion/".$accion.".php";
		}else{


			if(Accion::isValid()){
				include "core/app/accion/".$_GET['accion'].".php";				
			}else{
				Accion::Error("<b>404 NOT FOUND</b> Accion <b>".$_GET['accion']."</b> folder  >Help</a>");
			}



		}
	}

	/**
	* @function isValid
	* @brief valida la existencia de una vista
	**/	
	public static function isValid(){
		$valid=false;
		if(file_exists($file = "core/app/accion/".$_GET['accion'].".php")){
			$valid = true;
		}
		return $valid;
	}

	public static function Error($message){
		print $message;
	}

	public function execute($accion,$params){
		$fullpath =  "core/app/accion/".$accion.".php";
		if(file_exists($fullpath)){
			include $fullpath;
		}else{
			assert("wtf");
		}
	}

}



?>