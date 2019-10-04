<?php

include "QuestoesDAO.php";

$acao1 = $_GET["acao1"];

switch ($acao1){

    case 'inserir':
		$questoes = new QuestoesDAO();
		$questoes->titulo = $_POST["titulo"];
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
		$titulo = $_POST["titulo"];
		$enunciado = $_POST["enunciado"];
		$questoes->editar($id, $titulo, $enunciado);
		break;

	default:
		break;
}

?>