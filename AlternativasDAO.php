<?php

class AlternativasDAO{

	public $texto;
	public $correta;

	private $con;

	function __construct(){
		$rs = $this->con = mysqli_connect("localhost:3307", "root", "", "projetopw");
	}

	public function inserir(){
		$con = mysqli_connect("localhost:3307","root","","projetopw");
		$sql = "INSERT INTO alternativas VALUES (0,'$this->texto','$this->correta')";
		$rs = $this->con->query($sql);
		if($rs)
			header ("Location:/alternativas");
		else 
			echo $this->con->error;
	}
	public function buscar(){
		$con = mysqli_connect("localhost:3307", "root", "", "projetopw");
		$sql = "SELECT * FROM alternativas";
		$rs = $this->con->query($sql);

		$listaDeAlternativas = array();
		while ($linha = $rs->fetch_object()){
			$listaDeAlternativas[] = $linha;
		}
		return $listaDeAlternativas;
	}
}
?>