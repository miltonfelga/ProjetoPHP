<!DOCTYPE html>
<html>
<head>
	<title> </title>
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
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

	<div class="container_fluid">
		<div class="row">
			<div class="col-2">

				<ul class="nav flex-column nav-pills vertical">
					<li class="nav-item">
						<a class="nav-link active" href="#">Ativo</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#">Desativado</a>
					</li>
				</ul>

			</div>
			<div class="col-10">
				<h3> Usúarios </h3>
				<button type="button" class="btn btn-dark"><i class="fas fa-user-plus"></i>Novo Usúario</button>

				<table class="table table-dark">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Nome</th>
							<th scope="col">Email</th>
							<th scope="col">Ações</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>João</td>
							<td>joão@etecia.com.br</td>
							<td>							
								<button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
								<button type="button" class="btn btn-warning"><i class="fas fa-user-edit"></i></button>
								<button type="button" class="btn btn-success"><i class="fas fa-key"></i></button>
							</td>
						</tr>
					</tbody>
				</table>

			</div>

		</div>
	</div>


</body>
</html>

