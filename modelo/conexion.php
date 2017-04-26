<?php
class conex {
	public $conexion;
	private $server = "localhost";
	private $usuario = "root";
	private $pass = "";
	private $db = "Rest";
	// public $pdo_conn;
	public function __construct() {
		$this->conexion = new mysqli ( $this->server, $this->usuario, $this->pass, $this->db );
		
		if ($this->conexion->connect_errno) {
			
			die ( "Fallo al tratar de conectar con MySQL: (" . $this->conexion->connect_errno . ")" );
		}
		// $this->conexion->query ( "SET NAMES 'utf8'" );
		// $this->pdo_conn = new PDO ( "mysql:host=$this->server;dbname=$this->db", $this->usuario, $this->pass );
		$this->conexion->set_charset("utf8");
	}
	function ingreso($nombre) {
		$query = "insert into cliente values ('$nombre')";
		$consulta = $this->conexion->query ( $query );
	}
	function cerrar($nombre) {
		$query = "delete from cliente where mesa='$nombre'";
		$consulta = $this->conexion->query ( $query );
	}
}

?>