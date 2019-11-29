<?php 
require_once "config.php";

class AlternativasDAO{
	public $id;
	public $texto;
	public $idQuestao;
	public $correta;

	private $con;


	function __construct(){
		$this->con = mysqli_connect(DB_SERVER ,DB_USER ,DB_PASS ,DB_NAME);
	}

	public function apagar($id, $idQuestao){
		$sql = "DELETE FROM alternativas WHERE idAlternativa=$id";
		$rs = $this->con->query($sql);
		session_start();
		if ($rs){ 
			$_SESSION["success"] = "alternativa excluida com sucesso";
		}
		else {
			$_SESSION["danger"]= "erro ao excluir alternativa";
		}
		header("Location: \alternativas?questao=$idQuestao");
	}

	public function inserir(){
		$sql = "INSERT INTO alternativas VALUES (0, $this->idQuestao, '$this->texto', '$this->correta')";
		$rs = $this->con->query($sql);
		session_start();
		if ($rs){ 
			$_SESSION["success"] = "alternativa inserida com sucesso";
		}
		else {
			$_SESSION["danger"]= "erro ao inserir alternativa";
		}
		header("Location: \alternativas?questao=$this->idQuestao");
	}

	public function editar(){
		$sql = "UPDATE alternativas SET texto='$this->texto', correta='$this->correta' WHERE idAlternativa=$this->id";
		$rs = $this->con->query($sql);
		session_start();
		if ($rs){ 
			$_SESSION["success"] = "alternativa editada com sucesso";
		}
		else {
			$_SESSION["danger"]= "erro ao editar alternativa";
		}
		header("Location: \alternativas?questao=$this->idQuestao");
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