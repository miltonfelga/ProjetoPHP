<?php

include "UsuarioDAO.php";

$acao = $_GET["acao"];

switch ($acao){
    case 'inserir':
		$usuarios = new UsuarioDAO();
		$usuarios->tipo = $_POST["alternativa"]; 
		$usuarios->inserir();
		break;

		?>