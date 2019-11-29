<?php

function mostrarAlerta($tipo){
	if (isset($_SESSION[$tipo])){
		echo "<div class='alert alert-success'>";
		echo $_SESSION[$tipo];
		echo"</div>";

		unset($_SESSION[$tipo]);


	}
}
?>