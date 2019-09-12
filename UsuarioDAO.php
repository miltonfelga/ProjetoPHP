<?php

class UsuarioDAO{
	public $nome;
	public $email;
	public $senha;

	public function inserir(){
		$con = mysqli_connect("localhost","root","etecia","projetopw");
		$sql = "INSERT INTO usuarios VALUES (0,'$this->nome','$this->email','$this->senha')";
		$rs = $con ->query($sql);
		if($rs)
			header ("Location:usuarios.php");
		else 
			echo $con->error;
	}
}


?>