<?php 
abstract class mySqlConn{
	
	private $servidor, $usuario, $senha, $banco, $conn, $sql, $qr, $data, $status, $totalCampos, $error;
	

 public function __construct(){
$this->servidor = 'localhost';
$this->usuario = 'root';
$this->senha = '@def1988';
$this->banco = 'db_estagio2';
self::connect();
}
	
	protected function connect(){
		$this->conn =  new mysqli($this->servidor, $this->usuario, $this->senha, $this->banco) or die("<b><center>Erro ao selecionar o banco</br><center" .mysqli_connect_error()) ;
		
	}
	
	protected function execSQL($sql) {
            $this->qr = $this->conn->query ( $sql )  or die ( "<b><center>Erro ao executar</br><center" . mysql_error () );
				return $this->qr;
	}
}




?>