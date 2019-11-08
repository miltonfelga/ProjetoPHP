<?php 

include "AlternativasDAO.php";

$acao = $_GET["acao"];

switch ($acao) {
	case 'inserir':
		$alternativa = new AlternativasDAO();
		$alternativa->texto = $_POST["texto"];
		$alternativa->idQuestao = $_POST["idQuestao"];
		if (isset($_POST["correta"])) $alternativa->correta = 1;
		else $alternativa->correta = 0;
		$alternativa->inserir();
		break;

	case 'apagar':
		$alternativa = new AlternativasDAO();
		$id = $_GET["id"];
		$idQuestao = $_GET["idQuestao"];
		$alternativa->apagar($id, $idQuestao);
		break;

	case 'editar':
		$alternativa = new AlternativasDAO();
		$alternativa->id = $_POST["id"];
		$alternativa->texto = $_POST["texto"];
		$alternativa->tipo = $_POST["tipo"];
		$alternativa->editar();
		break;

	default:
		echo "acao não reconhecida";
		break;
}




?>