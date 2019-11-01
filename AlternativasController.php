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

	default:
		break;
}

?>