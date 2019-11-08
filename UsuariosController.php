<?php 

include "UsuarioDAO.php";

$acao = $_GET["acao"];

switch ($acao) {
	case 'inserir':
		$usuario = new UsuarioDAO();
		$usuario->nome = $_POST["nome"];
		$usuario->email = $_POST["email"];
		$usuario->senha = $_POST["senha"];
		$usuario->inserir();
		break;

	case 'apagar':
		$usuario = new UsuarioDAO();
		$id = $_GET["id"];
		$usuario->apagar($id);
		break;
	
	case 'senha':
		$usuario = new UsuarioDAO();
		$id = $_POST["id"];
		$senha = $_POST["senha"];
		$usuario->trocarSenha($id, $senha);
		break;

	case 'editar':
		$usuario = new UsuarioDAO();
		$usuario->id = $_POST["id"];
		$usuario->nome = $_POST["nome"];
		$usuario->email = $_POST["email"];
		$usuario->editar();
		break;

	case 'logar':
		$usuario = new UsuarioDAO();
		$usuario->email = $_POST["email"];
		$usuario->senha = $_POST["senha"];
		$usuario->logar();
		break;

	default:
		echo "acao não reconhecida";
		break;
}




?>