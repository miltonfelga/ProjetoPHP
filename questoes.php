<?php
include "QuestoesDAO.php";

$questoesDAO = new QuestoesDAO();
$lista = $questoesDAO->buscar();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> </title>
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<!-- menu superior -->
	<nav class="navbar navbar-expand-lg navbar-navbar navbar-light" style="background-color: #2EFE2E;">
		<a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(página atual)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Dropdown
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Ação</a>
						<a class="dropdown-item" href="#">Outra ação</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Algo mais aqui</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">Desativado</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
			</form>
		</div>
	</nav>
<!-- fim menu superior -->
<!-- menu lateral -->
<div class="container_fluid">
		<div class="row">
			<div class="col-2">

				<ul class="nav flex-column nav-pills vertical">
					<li class="nav-item">
						<a class="nav-link active" href="usuarios.php">Usuarios</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="questoes.php">Questões</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#">Desativado</a>
					</li>
				</ul>
			</div>
<!-- fim menu lateral -->
<!-- tabela de questões -->

			<div class="col-10">
				<h3> Questões </h3>
				<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modalnovaquestao"><i class="far fa-question-circle"></i> Nova Questão</button>

				<table class="table table-dark">
				<tr>
					<th>#</th>
					<th>Titulo</th>
					<th>Enunciado</th>
					<th>Ações</th>
				</tr>
				<?php foreach($lista as $questoes): ?>
				<tr>
					<td><?= $questoes->id_questao ?></td>
					<td><?= $questoes->titulo ?></td>
					<td><?= $questoes->enunciado ?></td>
					<td>
					<td>
						<a type="button" class="btn btn-danger" href="QuestoesController.php?acao1=apagar&id=<?=$questoes->id_questao ?>"><i class="fas fa-trash-alt"></i></a>
						<a type="button" class="btn btn-warning alterar-dado" data-toggle="modal" data-target="#modaleditarquestao"  data-id="<?=$questoes->id_questao?>"><i class="fas fa-edit"></i></a>
						<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#"  data-id="#">
						<i class="fas fa-key"></i></a>
					</td>
				</tr>
				<?php endforeach ?>
			</table>
				
			</div>
<!-- fim tabela de questões -->
<!-- modal nova questão -->
<div class="modal fade" id="modalnovaquestao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
<form action = "QuestoesController.php?acao1=inserir" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Titulo</label>
    <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Titulo">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Enunciado</label>
    <input type="text" name="enunciado" class="form-control" id="enunciado" placeholder="Enunciado">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Clique em mim</label>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
			</div>
		</div>
	</div>
</form>
<!-- fim modal nova questão -->

<!-- ModalEditar -->
<div class="modal fade" id="modaleditarquestao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
<form action = "QuestoesController.php?acao1=editar" method="POST">
	<input type="hidden" name="id" id="campo-id">
  <div class="form-group">
    <label for="exampleInputEmail1">Titulo</label>
    <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Titulo">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Enunciado</label>
    <input type="text" name="enunciado" class="form-control" id="enunciado" placeholder="Enunciado">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Clique em mim</label>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
			</div>
		</div>
	</div>
</form>
<!-- ModalEditar -->




</body>
<!-- javascript -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript">
					var botao = document.querySelector(".alterar-dado");
			botao.addEventListener("click", function(){
				var campo = document.querySelector("#campo-id");
				campo.value = botao.getAttribute("data-id");
			});
	 </script>
<!-- fim do javascript -->
</html>