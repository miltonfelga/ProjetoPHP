<?php 
require ("verificarlogin.php");
include "QuestoesDAO.php";
include "alerta.php";

$questoesDAO = new QuestoesDAO();
$lista = $questoesDAO->buscar();

include "cabeçalho.php";
include "menu.php";


?>
<head>
	<meta charset="utf-8">
	<title> </title>
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
			<div class="col-10">

				<?php mostrarAlerta("success"); ?>
				<?php mostrarAlerta("danger"); ?>	
				<h3>Questões</h3>
				<button class="btn btn-dark" data-toggle="modal" data-target="#modalnovo">
					<i class="fas fa-question"></i>
					Nova Questão
				</button>
				<table class="table table-dark">	
					<tr>
						<th>#</th>
						<th>Enunciado</th>
						<th>Tipo</th>
						<th>Ações</th>
					</tr>
					<?php foreach($lista as $questao): ?> 
					<tr>
						<td><?= $questao->idQuestao ?></td>
						<td><?= $questao->enunciado ?></td>
						<td><?= $questao->tipo ?></td>
						<td>
							<a class="btn btn-info" href="\alternativas?questao=<?= $questao->idQuestao ?>">
								<i class="fas fa-list-ol"></i>
							</a>
							<a class="btn btn-danger" href="QuestoesController.php?acao=apagar&id=<?= $questao->idQuestao ?>">
								<i class="fas fa-trash"></i>
							</a>
							<button class="btn btn-warning btn-editar" data-toggle="modal" data-target="#modaleditar" data-id="<?= $questao->idQuestao?>" data-enunciado="<?= $questao->enunciado ?>" data-tipo="<?= $questao->tipo ?>">
								<i class="fas fa-edit"></i>
							</button>
						</td>
					</tr>
					<?php endforeach ?>
				</table>
			</div>
		</div>
	</div>


	<!-- Modal Novo -->
	<div class="modal fade" id="modalnovo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Nova Questão</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="QuestoesController.php?acao=inserir	" method="POST">
						<div class="form-group">
							<label for="nome">Enunciado</label>
							<input type="text" name="enunciado" class="form-control" id="enunciado" placeholder="enunciado da questão">
						</div>
						<div class="form-group">
							<label for="email">tipo</label>
							<input type="text" name="tipo" class="form-control" id="tipo" placeholder="tipo da questão">
						</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-primary">Salvar</button>
				</div>
				</form>
			</div>
		</div>
	</div>

<!-- Modal Editar -->
	<div class="modal fade" id="modaleditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Editar Questão</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="QuestoesController.php?acao=editar" method="POST">
						<input type="hidden" name="id" id="campo-id-editar">
						<div class="form-group">
							<label for="nome">Enunciado</label>
							<input type="text" name="enunciado" class="form-control" id="novoenunciado" placeholder="enunciado">
						</div>
						<div class="form-group">
							<label for="email">Tipo</label>
							<input type="text" name="tipo" class="form-control" id="novotipo" placeholder="tipo">
						</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-primary">Salvar</button>
				</div>
				</form>
			</div>
		</div>
	</div>


</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script type="text/javascript">
	$('.btn-editar').on('click', function (e) {
	  	var id = e.currentTarget.getAttribute("data-id");
	  	var enunciado = e.currentTarget.getAttribute("data-enunciado");
	  	var tipo = e.currentTarget.getAttribute("data-tipo");
	  	document.querySelector("#campo-id-editar").value = id;
	  	document.querySelector("#novoenunciado").value = enunciado;
	  	document.querySelector("#novotipo").value = tipo;
	});

</script>

</html>