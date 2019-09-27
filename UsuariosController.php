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
?>