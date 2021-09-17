<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
	
//	$this->user="id16855389_bermejo";$this->pass="Francosivila2020!";$this->host="localhost";$this->ddbb="id16855389_fides";
	$this->user="u123280817_tarija";$this->pass="Francosivila2020!";$this->host="localhost";$this->ddbb="u123280817_fides";


}



	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
