<?php

include "UsuarioDAO.php";

$acao = $_GET["acao"];

switch ($acao){
    case 'inserir':
		$usuarios = new UsuarioDAO();
		$usuarios->nome = $_POST["nome"];
		$usuarios->email = $_POST["email"];
		$usuarios->senha = $_POST["senha"];
		$usuarios->inserir();
		break;

	case 'apagar':
		$usuarios = new UsuarioDAO();
		$id = $_GET["id"];
		$usuarios->apagar($id);
		break;

	case 'trocarsenha':
		$usuarios = new UsuarioDAO();
		$id = $_POST["id"];
		$senha = $_POST["senha"];
		$usuarios->trocarsenha($id, $senha);
		break;

	default:
		break;
}

$acao = $_GET["acaoq"];

switch ($acaoq){
    case 'inserirq':
		$questoes = new UsuarioDAO();
		$questoes->titulo = $_POST["titulo"];
		$questoes->enunciado = $_POST["enunciado"];
		$questoes->inserir();
		break;

	case 'apagarq':
		$questoes = new UsuarioDAO();
		$id = $_GET["id"];
		$questoes->apagar($id);
		break;

	case 'trocarq':
		$questoes = new UsuarioDAO();
		$id = $_POST["id"];
		$titulo = $_POST["titulo"];
		$questoes->trocar($id, $senha);
		break;

	default:
		break;
}


?>