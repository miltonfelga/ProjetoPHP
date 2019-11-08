<?php 

if (!isset($_SERVER["PATH_INFO"])) {
	require("login.php");
	exit();
}

switch ($_SERVER["PATH_INFO"]) {

	 case '/usuarios':
		case '/usuario':
 		require("usuarios.php");
 		break;
 	
	 case '/questoes':
		case '/questao':
 		require("questoes.php");
 		break;

	 case '/alternativas':
		case '/alternativa':
 		require("alternativas.php");
 		break;

 	default:
 		echo "Erro 404 - página não encontrada";
 		break;
 } 
?>
