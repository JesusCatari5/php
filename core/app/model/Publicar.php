<?php
class Publicar
{
	public static $tablename = "publicar";

	public function agregar()
	{
		$sql = "insert into Publicar (fecha,lugar,titulo,comentario,imagen,youtube,estado,destacado,categoria_id) ";
		$sql .= "value (NOW(),
        \"$this->lugar\",
        \"$this->titulo\",
        \"$this->comentario\",
        \"$this->imagen\",
		\"$this->youtube\",
		1,

		\"$this->destacado\",
        \"$this->categoria_id\")";
		//echo $sql;
		return Executor::doit($sql);
	}

	// partiendo de que ya tenemos creado un objecto Publicar previamente utilizamos el contexto
	public function actualizar()
	{
		$sql = "update " . self::$tablename . " set 
		lugar=\"$this->lugar\",
        titulo=\"$this->titulo\",
		comentario=\"$this->comentario\",
		youtube=\"$this->youtube\",
		imagen=\"$this->imagen\",

		estado=\"$this->estado\",
		destacado=\"$this->destacado\",
		categoria_id=\"$this->categoria_id\"
		 where id=$this->id";
	//	echo $sql;
		Executor::doit($sql);
	}


	public function actualizar_imagen()
	{
		$sql = "update " . self::$tablename . " set imagen=\"$this->imagen\" where id=$this->id";
		echo $sql;
		Executor::doit($sql);
	}
	////////////////////// CLAVE TIO FINELY le damos Permisos al tikear en admin PARA ser Visible o No para que el Usuario pueda ver la INFORMACION ///////////////////////////////

	public static function getPublicado_Categoria_id($id)
	{
		$sql = "select * from " . self::$tablename . " where categoria_id=$id and estado=1 order by fecha desc";
		$query = Executor::doit($sql);
		return Model::many($query[0], new Publicar());
	}

	public static function getDestacados()
	{
		$sql = "select * from " . self::$tablename . " where destacado=1 order by fecha desc";
		$query = Executor::doit($sql);
		return Model::many($query[0], new Publicar());
	}

	public static function getBanner()
	{
		$sql = "select * from " . self::$tablename . " where banner=1 order by fecha desc";
		$query = Executor::doit($sql);
		return Model::many($query[0], new Publicar());
	}

	//////////////////////////////////////////////////////////////7


	public static function getById($id)
	{
		$sql = "select * from " . self::$tablename . " where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0], new Publicar());
	}

	public static function getAll()
	{
		$sql = "select * from " . self::$tablename . " order by id desc";
		$query = Executor::doit($sql);
		return Model::many($query[0], new Publicar());
	}

	public static function getAllActivo()
	{
		$sql = "select * from " . self::$tablename . " where estado=1";
		$query = Executor::doit($sql);
		return Model::many($query[0], new Publicar());
	}
}
