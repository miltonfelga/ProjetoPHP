<?php 
require ("verificarlogin.php");
include "AlternativasDAO.php";
include "QuestoesDAO.php";
include "alerta.php";


$idQuestao = $_GET["questao"];

$alternativas = new AlternativasDAO();
$alternativas->idQuestao = $idQuestao;
$lista = $alternativas->buscar();

$questoes = new QuestoesDAO();
$questoes->id = $idQuestao;
$questoes->buscarPorId();

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
<div class="container">

				<?php mostrarAlerta("success"); ?>
				<?php mostrarAlerta("danger"); ?>
	
	<h2><?= $questoes->enunciado ?></h2>

	<ul class="list-group lista-alternativas">
		<?php foreach ($lista as $alternativa) : ?>
			<li class="list-group-item d-flex justify-content-between align-items-center">
				<?= $alternativa->texto ?>
				<span class="badge">
					<button class="btn btn-correta "><i class="fas fa-<?= ($alternativa->correta)?'check':'times'?>"></i></button>
					<a href="AlternativasController.php?acao=apagar&id=<?= $alternativa->idAlternativa?>&idQuestao=<?= $idQuestao?>" class="btn btn-danger"><i class="fas fa-trash text-white"></i></a>
				</span>
			</li>
		<?php endforeach ?>
	</ul>
	<button class="btn btn-dark" data-toggle="modal" data-target="#modalnovo"><i class="fas fa-plus"></i></button>
</div>
<!-- Modal Nova alternativa -->
<div class="modal fade" id="modalnovo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Nova Alternativa</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="AlternativasController.php?acao=inserir" method="POST">
					<input type="hidden" name="idQuestao" value="<?= $idQuestao ?>">
					<div class="form-group">
						<label for="texto">Texto</label>
						<input type="text" name="texto" class="form-control" id="texto" placeholder="texto da alternativa">
					</div>
					<div class="form-group">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="correta" name="correta">
							<label class="form-check-label" for="correta">
								Correta
							</label>
						</div>
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

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
