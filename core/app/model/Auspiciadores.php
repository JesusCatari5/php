<?php
class Auspiciadores {
	public static $tablename = "auspiciadores";

	public function agregar(){
		$sql = "insert into auspiciadores (nombre,nombre_corto) ";
	//	echo $sql;
		$sql .= "value (\"$this->nombre\",\"$this->nombre_corto\")";
		return Executor::doit($sql);

		
	}
	
// partiendo de que ya tenemos creado un objecto Auspiciadores previamente utilizamos el contexto
	public function actualizar(){
        $sql = "update ".self::$tablename." set nombre=\"$this->nombre\",
		nombre_corto=\"$this->nombre_corto\"

		 where id=$this->id";
		Executor::doit($sql);
	}


	/////////////////// esto es CLAVE TIO FINLEY... para que de click el cliente en Radio - Tv Demo se direccione a publicar con un URL nombre corto Ej:http://localhost/plataforma_virtual/vista/sistemas_web/demo/radio_tv/index.php?vista=publicar&cat=salud/////////////////////////////
	public static function getNombre_corto($id){
		$sql = "select * from ".self::$tablename." where nombre_corto=\"$id\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new Auspiciadores());
	}

	//////////////////////////////////////////////7
	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new Auspiciadores());
	}

	public static function getAll(){
		$sql = "select * from ".self::$tablename." where estado=1 order by id desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new Auspiciadores());
	}
	
	public static function getAllActivo()
	{
		$sql = "select * from " . self::$tablename . " where estado=1 and sector=1 order by id desc";
		$query = Executor::doit($sql);
		return Model::many($query[0], new Auspiciadores());
	}
	
	public static function getAllActivo_abajo()
	{
		$sql = "select * from " . self::$tablename . " where estado=1 and sector=2 order by id desc";
		$query = Executor::doit($sql);
		return Model::many($query[0], new Auspiciadores());
	}
	


}

?>

