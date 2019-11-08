<?php 

include "QuestoesDAO.php";

$acao = $_GET["acao"];

switch ($acao) {
	case 'inserir':
		$questao = new QuestoesDAO();
		$questao->enunciado = $_POST["enunciado"];
		$questao->tipo = $_POST["tipo"];
		$questao->inserir();
		break;

	case 'apagar':
		$questao = new QuestoesDAO();
		$id = $_GET["id"];
		$questao->apagar($id);
		break;

	case 'editar':
		$questao = new QuestoesDAO();
		$questao->id = $_POST["id"];
		$questao->enunciado = $_POST["enunciado"];
		$questao->tipo = $_POST["tipo"];
		$questao->editar();
		break;

	default:
		echo "acao não reconhecida";
		break;
}




?>