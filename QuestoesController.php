<?php

include "QuestoesDAO.php";

$acao1 = $_GET["acao1"];

switch ($acao1){

    case 'inserir':
		$questoes = new QuestoesDAO();
		$questoes->tipo = $_POST["tipo"];
		$questoes->enunciado = $_POST["enunciado"];
		$questoes->inserir();
		break;

	case 'apagar':
		$questoes = new QuestoesDAO();
		$id = $_GET["id"];
		$questoes->apagar($id);
		break;

	case 'editar':
		$questoes = new QuestoesDAO();
		$id = $_POST["id"];
		$tipo = $_POST["tipo"];
		$enunciado = $_POST["enunciado"];
		$questoes->editar($id, $tipo, $enunciado);
		break;

	default:
		break;
}

?>