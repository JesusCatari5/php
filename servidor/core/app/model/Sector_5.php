<?php
class Sector_5 {
	public static $tablename = "sector_5";


	public static function actualizar($name,$val){
		$sql = "update ".self::$tablename." set valor=\"$val\" where prefijo=\"$name\"";		
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new Sector_5());
	}
/*-------------------- CLAVE -----------------------------*/
public static function get_Prefijo($id){
	$sql = "select * from ".self::$tablename." where prefijo=\"$id\"";
	$query = Executor::doit($sql);
	return Model::one($query[0],new Sector_5());
}


/*-------------------------------------------------*/
	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new Sector_5());
	}


}

?>
