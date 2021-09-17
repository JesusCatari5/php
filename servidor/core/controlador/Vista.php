<?php



class Vista {
	/**
	* @function load
	* @brief la funcion load carga una vista correspondiente a un modulo
	**/	
	public static function load($vista){
		// Module::$module;
		if(!isset($_GET['vista'])){
			if(Core::$root==""){
				include "core/app/vista/".$vista.".php";
			}else if(Core::$root=="admin/"){
				include "core/app/".Core::$theme."/vista/".$vista.".php";				
			}
		}else{


			if(Vista::isValid()){
				$url ="";
			if(Core::$root==""){
			$url = "core/app/vista/".$_GET['vista'].".php";
			}else if(Core::$root=="admin/"){
			$url = "core/app/".Core::$theme."/vista/".$_GET['vista'].".php";				
			}
				include $url;				
			}else{
				Vista::Error("<b>404 NOT FOUND</b> Vista <b>".$_GET['vista']."</b> folder !! - <a href='#0' target='_blank'>Help</a>");
			}



		}
	}

	/**
	* @function isValid
	* @brief valida la existencia de una vista
	**/	
	public static function isValid(){
		$valid=false;
		if(isset($_GET["vista"])){
			$url ="";
			if(Core::$root==""){
			$url = "core/app/vista/".$_GET['vista'].".php";
			}else if(Core::$root=="admin/"){
			$url = "core/app/".Core::$theme."/vista/".$_GET['vista'].".php";				
			}
			if(file_exists($file = $url)){
				$valid = true;
			}
		}
		return $valid;
	}

	public static function Error($message){
		print $message;
	}

}



?>