<?php

class QuestoesDAO{

	public $titulo;
	public $enunciado;

	private $con;

	function __construct(){
		$rs = $this->con = mysqli_connect("localhost:3307", "root", "", "projetopw");
	}

	public function inserir(){
		$con = mysqli_connect("localhost:3307","root","","projetopw");
		$sql = "INSERT INTO questoes VALUES (0,'$this->titulo','$this->enunciado')";
		$rs = $this->con->query($sql);
		if($rs)
			header ("Location:/questoes");
		else 
			echo $this->con->error;
	}
	public function buscar(){
		$con = mysqli_connect("localhost:3307", "root", "", "projetopw");
		$sql = "SELECT * FROM questoes";
		$rs = $this->con->query($sql);

		$listaDeQuestoes = array();
		while ($linha = $rs->fetch_object()){
			$listaDeQuestoes[] = $linha;
		}
		return $listaDeQuestoes;
	}
	public function apagar ($id){
		$sql = "DELETE FROM questoes WHERE id_questao=$id";
		$rs = $this->con->query($sql);
		if ($rs) header("Location:/questoes");
		else echo $this->con->error; 
	}

	public function editar($id, $titulo, $enunciado){
		$sql="UPDATE questoes SET titulo='$titulo', enunciado='$enunciado' WHERE id_questao=$id";
		$rs = $this->con->query($sql);
		if ($rs) header("Location:/questoes");
		else echo $this->con->error; 

	}
}
?>