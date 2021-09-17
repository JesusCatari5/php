<?php
class Brotcast {
	public static $tablename = "brotcast";

	public function agregar(){
		$sql = "insert into brotcast (fecha,titulo,audio) ";
		$sql .= "value (NOW(),
        \"$this->titulo\",
        \"$this->audio\")";
		echo $sql;
		return Executor::doit($sql);

		
	}
	
// partiendo de que ya tenemos creado un objecto Brotcast previamente utilizamos el contexto
	public function actualizar(){
        $sql = "update ".self::$tablename." set titulo=\"$this->titulo\",
		audio=\"$this->audio\"
		 where id=$this->id";
		Executor::doit($sql);
	}


	public function eliminar(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}



	//////////////////////////////////////////////7
	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new Brotcast());
	}

	public static function getAll(){
		$sql = "select * from ".self::$tablename."";
		$query = Executor::doit($sql);
		return Model::many($query[0],new Brotcast());
	}
	
}

?>

