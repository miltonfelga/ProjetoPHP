<?php

class UsuarioDAO{
	public $nome;
	public $email;
	public $senha;

	public $titulo;
	public $enunciado;

	private $con;

	function __construct(){
		$rs = $this->con = mysqli_connect("localhost:3307", "root", "", "projetopw");
	}
	public function apagar ($id){
		$sql = "DELETE FROM usuarios WHERE id_usuarios=$id";
		$rs = $this->con->query($sql);
		if ($rs) header("Location:usuarios.php");
		else echo $this->con->error; 
	}

	public function inserir(){
		$con = mysqli_connect("localhost:3307","root","","projetopw");
		$sql = "INSERT INTO usuarios VALUES (0,'$this->nome','$this->email',
					md5('$this->senha') )";
		$rs = $this->con->query($sql);
		if($rs)
			header ("Location:usuarios.php");
		else 
			echo $this->con->error;
	}

	public function buscar(){
		$con = mysqli_connect("localhost:3307", "root", "", "projetopw");
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
		if ($rs) header("Location:usuarios.php");
		else echo $this->con->error; 

	}



	public function inserirq(){
		$con = mysqli_connect("localhost:3307","root","","projetopw");
		$sql = "INSERT INTO questoes VALUES (0,'$this->titulo','$this->enunciado')";
		$rs = $this->con->query($sql);
		if($rs)
			header ("Location:usuarios.php");
		else 
			echo $this->con->error;
	}

	public function buscarq(){
		$con = mysqli_connect("localhost:3307", "root", "", "projetopw");
		$sql = "SELECT * FROM questoes";
		$rs = $this->con->query($sql);
		$listaDeQuestoes = array();
		while ($linha = $rs->fetch_object()){
			$listaDeQuestoes[] = $linha;
		}
		return $listaDeQuestoes;
	}

}
?>