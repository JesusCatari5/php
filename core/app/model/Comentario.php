<?php
class Comentario {
	public static $tablename = "comentario";

	public function agregar(){
		$sql = "insert into comentario(fecha,nombre,celular,sms,estado,publicar_id)";
		echo $sql;
		$sql .= "value (\"$this->fecha\",\"$this->nombre\",\"$this->celular\",\"$this->sms\",\"$this->estado\",\"$this->publicar_id\")";
		return Executor::doit($sql);

		
	}
	
// partiendo de que ya tenemos creado un objecto Comentario previamente utilizamos el contexto
	public function actualizar(){
        $sql = "update ".self::$tablename." set fecha=\"$this->fecha\",
		nombre=\"$this->nombre\",
        celular=\"$this->celular\",
        sms=\"$this->sms\",
        estado=\"$this->estado\",
        publicar_id=\"$this->publicar_id\"

		 where id=$this->id";
		Executor::doit($sql);
	}




	//////////////////////////////////////////////
	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new Comentario());
	}

	public static function getAll(){
		$sql = "select * from ".self::$tablename." order by id desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new Comentario());
	}
	
	public static function getAllActivo()
	{
		$sql = "select * from " . self::$tablename . " where estado=1";
		$query = Executor::doit($sql);
		return Model::many($query[0], new Comentario());
	}
	//////////////// BOTONES PARA ACEPTAR , Rechazar y Eliminar los Comentarios que el usuario mande al administrador//////////////////////////////
	
	public function eliminar(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

	public function aceptar(){
		$sql = "update ".self::$tablename." set estado=2 where id=$this->id";
		Executor::doit($sql);
	}



	public function rechazar(){
		$sql = "update ".self::$tablename." set estado=1 where id=$this->id";
		Executor::doit($sql);
	}


	////////////////////////////////////////////////////
// con este Codigo Tio Finley en Layout Usuario muestra los sms que el Usuario le envia al Administrador y lo ordeno tipo desc...
	public static function getPublicado_por_Comentarios($id){
		$sql = "select * from ".self::$tablename." where publicar_id=$id and estado=2 order by id desc" ;
		$query = Executor::doit($sql);
		return Model::many($query[0],new Comentario());
	}



}
