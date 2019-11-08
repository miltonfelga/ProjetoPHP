<?php

include "AlternativasDAO.php";

$acao1 = $_GET["acao1"];

switch ($acao1){

    case 'inserir':
		$alternativas = new AlternativasDAO();
		$alternativas->texto = $_POST["texto"];
		$alternativas->correta = $_POST["correta"];
		$alternativas->inserir();
		break;

	case 'apagar':
		$alternativas = new QuestoesDAO();
		$id = $_GET["id"];
		$alternativas->apagar($id);
		break;

	default:
		break;
}

?>