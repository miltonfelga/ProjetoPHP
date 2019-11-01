<?php

class UsuarioDAO{
	public $tipo;
	

	private $con;

	function __construct(){
		$rs = $this->con = mysqli_connect("localhost:3307", "root", "", "projetopw");
	}
	public function apagar ($id){
		$sql = "DELETE FROM usuarios WHERE id_usuarios=$id";
		$rs = $this->con->query($sql);
		if ($rs) header("Location:/usuarios");
		else echo $this->con->error; 
	}

	public function inserir(){
		$sql = "INSERT INTO usuarios VALUES (0,'$this->nome','$this->email',
					md5('$this->senha') )";
		$rs = $this->con->query($sql);
		if($rs)
			header ("Location:/usuarios");
		else 
			echo $this->con->error;
	}

	public function buscar(){
		$sql = "SELECT * FROM usuarios";
		$rs = $this->con->query($sql);
		$listaDeUsuarios = array();
		while ($linha = $rs->fetch_object()){
			$listaDeUsuarios[] = $linha;
		}
		return $listaDeUsuarios;
	}

	public function trocarsenha($id, $senha){
		$sql = "UPDATE usuarios SET senha=md5($senha) WHERE id_usuarios=$id";
		$rs = $this->con->query($sql);
		if ($rs) header("Location:/usuarios");
		else echo $this->con->error; 
	}


}
?>