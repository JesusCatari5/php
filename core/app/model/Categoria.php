<?php
class Categoria {
	public static $tablename = "categoria";

	public function agregar(){
		$sql = "insert into categoria (nombre,nombre_corto,estado) ";
	//	echo $sql;
		$sql .= "value (\"$this->nombre\",\"$this->nombre_corto\",1)";
		return Executor::doit($sql);

		
	}
	
// partiendo de que ya tenemos creado un objecto Categoria previamente utilizamos el contexto
	public function actualizar(){
        $sql = "update ".self::$tablename." set nombre=\"$this->nombre\",
		nombre_corto=\"$this->nombre_corto\",
		estado=\"$this->estado\"
		 where id=$this->id";
		Executor::doit($sql);
	}


	public function eliminar(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}


	

	/////////////////// esto es CLAVE TIO FINLEY... para que de click el cliente en Radio - Tv Demo se direccione a publicar con un URL nombre corto Ej:http://localhost/plataforma_virtual/vista/sistemas_web/demo/radio_tv/index.php?vista=publicar&cat=salud/////////////////////////////
	public static function getNombre_corto($id){
		$sql = "select * from ".self::$tablename." where nombre_corto=\"$id\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new Categoria());
	}

	//////////////////////////////////////////////7
	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new Categoria());
	}

	public static function getAll(){
		$sql = "select * from ".self::$tablename." where estado=1";
		$query = Executor::doit($sql);
		return Model::many($query[0],new Categoria());
	}
	
	public static function getAllActivo()
	{
		$sql = "select * from " . self::$tablename . " where estado=1 and sector=1 order by id desc";
		$query = Executor::doit($sql);
		return Model::many($query[0], new Categoria());
	}
	
	public static function getAllActivo_abajo()
	{
		$sql = "select * from " . self::$tablename . " where estado=1 and sector=2 order by id desc";
		$query = Executor::doit($sql);
		return Model::many($query[0], new Categoria());
	}
	


}

?>

