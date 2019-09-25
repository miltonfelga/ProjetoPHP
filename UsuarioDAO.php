<?php

class UsuarioDAO{
	public $nome;
	public $email;
	public $senha;

	private $con;

	function __construct(){
		$rs = $this->con = mysqli_connect("localhost", "root", "", "projetopw");
	}
	public function apagar ($id){
		$sql = "DELETE FROM usuarios WHERE id_usuarios=$id";
		$rs = $this->con->query($sql);
		if ($rs) header("Location:usuarios.php");
		else echo $this->con->error; 
	}

	public function inserir(){
		$con = mysqli_connect("localhost","root","","projetopw");
		$sql = "INSERT INTO usuarios VALUES (0,'$this->nome','$this->email','$this->senha')";
		$rs = $this->con->query($sql);
		if($rs)
			header ("Location:usuarios.php");
		else 
			echo $this->con->error;
	}

	public function buscar(){
		$con = mysqli_connect("localhost", "root", "", "projetopw");
		$sql = "SELECT * FROM usuarios";
		$rs = $this->con->query($sql);
		$listaDeUsuarios = array();
		while ($linha = $rs->fetch_object()){
			$listaDeUsuarios[] = $linha;
		}
		return $listaDeUsuarios;
	}

}


?>