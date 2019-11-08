<?php
include "AlternativasDAO.php";
include "QuestoesDAO.php";


$alternativasDAO = new AlternativasDAO();
$lista = $alternativasDAO->buscar();

$idquestao = $_GET["id"];

echo($enunciadoquestao);

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

	<!-- tabela de alternativas -->

			<div class="col-10">
				<h3> </h3>
				

				<table class="table table-dark">

				<?php foreach($lista as $alternativas): ?>
				<tr>
					<td><?= $alternativas->idAlternativa ?></td>
					<td><?= $alternativas->texto ?></td>
					<td><?= $alternativas->correta ?></td>
					<td>
					<td>
						<a type="button" class="btn btn-danger" href="AlternativasController.php?acao1=apagar&id=<?=$alternativas->idAlternativa ?>"><i class="fas fa-trash-alt"></i></a>
						<a type="button" class="btn btn-warning alterar-dado" data-toggle="modal" data-target="#modaleditaralternativa"  data-id="<?=$alternativas->idAlternativa ?>"><i class="fas fa-edit"></i></a>
						<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#"  data-id="#">
						<i class="fas fa-list"></i></a>
					</td>
				</tr>
				<?php endforeach ?>
			</table>

			<!-- botão adicionar alternativa -->
			<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modalnovaalternativa"><i class="fas fa-plus"></i></button>
			<!-- fim adicionar alternativa -->	

			</div>
<!-- fim tabela de questões -->

<!-- modal nova questão -->
<div class="modal fade" id="modalnovaalternativa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
<form action = "AlternativasController.php?acao1=inserir" method="POST">
	<input type="hidden" name="id" id="campo-id">
  <div class="form-group">
    <label for="exampleInputEmail1">Texto</label>
    <input type="text" name="texto" class="form-control" id="texto" placeholder="Texto">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Correta</label>
    <input type="text" name="correta" class="form-control" id="correta" placeholder="Correta">
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Correta</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Incorreta</label>
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
</html>