<?php
include "UsuarioDAO.php";

$usuarioDAO = new UsuarioDAO();
$lista = $usuarioDAO->buscar();

include "cabeçalho.php";
include "menulateral.php";
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


<div class="col-10">
	<h3> Usúarios </h3>
	<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modalnovo"><i class="fas fa-user-plus"></i>  Novo Usúario</button>

	<table class="table table-dark">
		<tr>
			<th>#</th>
			<th>Nome</th>
			<th>E-mail</th>
			<th>Ações</th>
		</tr>
		<?php foreach($lista as $usuarios): ?>
			<tr>
				<td><?= $usuarios->id_usuarios ?></td>
				<td><?= $usuarios->nome ?></td>
				<td><?= $usuarios->email ?></td>
				<td>
					<td>
						<a type="button" class="btn btn-danger" href="UsuariosController.php?acao=apagar&id=<?=$usuarios->id_usuarios ?>">
							<i class="fas fa-trash-alt">
							</i></a>
							<a type="button" class="btn btn-warning">
								<i class="fas fa-edit"> 
								</i>
							</a>
							<a type="button" class="btn btn-primary alterar-senha" data-toggle="modal" data-target="#modalsenha"  data-id="<?=$usuarios->id_usuarios?>">
								<i class="fas fa-key"></i>
							</a>
						</td>
					</tr>
				<?php endforeach ?>
			</table>

		</div>

	</div>
</div>

<!-- ModalTrocarSenha -->
<div class="modal fade" id="modalsenha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<form action= "UsuariosController.php?acao=trocarsenha" method="POST">
					<input type="hidden" name="id" id="campo-id">
					<div class="form-group">
						<div class="form-group">
							<label for="exampleInputPassword1">Alterar Senha</label>
							<input type="password" name="senha" class="form-control" id="trocarsenha" placeholder="Nova Senha">
						</div>
						<button type="submit" class="btn btn-primary " >Enviar</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<!-- ModalInserir -->
<div class="modal fade" id="modalnovo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<form action= "UsuariosController.php?acao=inserir" method="POST">
					<div class="form-group">
						<div class="form-group">
							<label for="exampleInputPassword1">Nome</label>
							<input type="text"  name="nome" class="form-control" id="nome" placeholder="Nome completo">
						</div>
						<label for="exampleInputEmail1">Endereço de email</label>
						<input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Digite seu email">
						<small id="emailHelp"  class="form-text text-muted">Nunca vamos compartilhar seu email com ninguém.</small>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Senha</label>
						<input type="password" name="senha" class="form-control" id="senha" placeholder="Senha">
					</div>
					<div class="form-group form-check">
						<input type="checkbox" class="form-check-input" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">Clique em mim</label>
					</div>
					<button type="submit" class="btn btn-primary" >Enviar</button>
				</div>
			</div>
		</div>
	</div>
</form>


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript">
	var botao = document.querySelector(".alterar-senha");
	botao.addEventListener("click", function(){
		var campo = document.querySelector("#campo-id");
		campo.value = botao.getAttribute("data-id");
	});
</script>
</html>

