<?php 

class AlternativasDAO{
	public $id;
	public $texto;
	public $idQuestao;
	public $correta;

	private $con;

	function __construct(){
		$this->con = mysqli_connect("localhost:3307", "root", "", "projetopw");
	}

	public function apagar($id, $idQuestao){
		$sql = "DELETE FROM alternativas WHERE idAlternativa=$id";
		$rs = $this->con->query($sql);
		if ($rs) header("Location: \alternativas?questao=$idQuestao");
		else echo $this->con->error;
	}

	public function inserir(){
		$sql = "INSERT INTO alternativas VALUES (0, $this->idQuestao, '$this->texto', '$this->correta')";
		$rs = $this->con->query($sql);

		if ($rs) 
			header("Location: \alternativas?questao=$this->idQuestao");
		else 
			echo $this->con->error;
	}

	public function editar(){
		$sql = "UPDATE alternativas SET texto='$this->texto', correta='$this->correta' WHERE idAlternativa=$this->id";
		$rs = $this->con->query($sql);
		if ($rs) 
			header("Location: \alternativas?questao=$id");
		else 
			echo $this->con->error;
	}


	public function buscar(){
		$sql = "SELECT * FROM alternativas WHERE idQuestao=$this->idQuestao";
		$rs = $this->con->query($sql);
		$lista = array();
		while ($linha = $rs->fetch_object()){
			$lista[] = $linha;
		}
		return $lista;
	}
}


?>