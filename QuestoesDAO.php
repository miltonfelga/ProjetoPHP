<?php 

class QuestoesDAO{
	public $id;
	public $enunciado;
	public $tipo;

	private $con;

	function __construct(){
		$this->con = mysqli_connect("localhost:3307", "root", "", "projetopw");
	}

	public function apagar($id){
		$sql = "DELETE FROM questoes WHERE idQuestao=$id";
		$rs = $this->con->query($sql);
		if ($rs) header("Location: \questoes");
		else echo $this->con->error;
	}

	public function inserir(){
		$sql = "INSERT INTO questoes VALUES (0, '$this->enunciado', '$this->tipo')";
		$rs = $this->con->query($sql);

		if ($rs) 
			header("Location: \questoes");
		else 
			echo $this->con->error;
	}

	public function editar(){
		$sql = "UPDATE questoes SET enunciado='$this->enunciado', tipo='$this->tipo' WHERE idQuestao=$this->id";
		$rs = $this->con->query($sql);
		if ($rs) 
			header("Location: \questoes");
		else 
			echo $this->con->error;
	}


	public function buscar(){
		$sql = "SELECT * FROM questoes";
		$rs = $this->con->query($sql);
		$lista = array();
		while ($linha = $rs->fetch_object()){
			$lista[] = $linha;
		}
		return $lista;
	}

	public function buscarPorId(){
		$sql = "SELECT * FROM questoes WHERE idQuestao=$this->id";
		$rs = $this->con->query($sql);
		if ($linha = $rs->fetch_object()){
			$this->enunciado = $linha->enunciado;
			$this->tipo = $linha->tipo;
		}

	}
}


?>