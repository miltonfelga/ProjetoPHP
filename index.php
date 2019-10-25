<?php
switch ($_SERVER["PATH_INFO"]) {
	case "/usuarios":
	case "/usuario":
		require "usuarios.php";
		break;

	case "/questoes":
	case "/questao":
		require "questoes.php";
		break;
	
	default:
		echo "Erro 404 - Pagina não encontrada";
		break;
}

?>