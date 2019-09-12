<?php

include "UsuarioDAO.php";

$usuario = new UsuarioDAO();

$usuario ->nome = $_POST["nome"];
$usuario ->email = $_POST["email"];
$usuario ->senha = $_POST["senha"];

$usuario->inserir();


?>