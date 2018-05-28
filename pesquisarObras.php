<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Pesquisar Obras</title>
	<link rel="icon" href="../Banco/img/favicon.ico">
	<link href="../Banco/css/bootstrap.min.css " rel="stylesheet">
	<link href="../Banco/css/cadastrarAluno.css " rel="stylesheet">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top ">
		<div class="container ">
			<a class="navbar-brand h1" href="home.php"> SIGB </a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite" data-target="#navbarSupportedContent">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSite">
				<ul class="navbar-nav ml-auto ">
					<li class="nav-item dropdown px-2">
						<a class="nav-link dropdown-toggle " href="#" id="navbarSite" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cadastro</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item " href="/Banco/cadastroProf.php">Professor(a)</a>
							<a class="dropdown-item" href="/Banco/cadastroAluno.php"> Aluno(a)</a>
							<a class="dropdown-item" href="/Banco/cadastroLR.php"> Obras</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="/Banco/cadastroBibli.php"> Bibliotecário(a)</a>
						</div>
					</li>
					<li class="nav-item dropdown px-2">
						<a class="nav-link dropdown-toggle" href="#" id="navbarSite" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pesquisar</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="/Banco/pesquisarProfessor.php"> Professor</a>
							<a class="dropdown-item" href="/Banco/pesquisarAlunos.php"> Aluno</a>
							<a class="dropdown-item" href="/Banco/pesquisarObras.php"> Obras</a>
						</div>
					</li>
					<ul class="navbar-nav px-2">
						<li class="nav-item ">
							<a class="nav-link" href="/Banco/emprestimo.php"> Empréstimo</a>
						</li>
					</ul>
					<ul class="navbar-nav px-2">
						<li class="nav-item ">
							<a class="nav-link" href="#"> Devolução</a>
						</li>
					</ul>
				</ul>
				<ul class="navbar-nav ml-auto px-md-4">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="" data-toggle="dropdown">Usuário </a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="#"> Perfil </a>
							<a class="dropdown-item" href="index.php"> Sair</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<?php
	include("../Banco/conexao/conexao.php");
	$consulta = "SELECT `obras`.`idObras`, `obras`.`nome`, `obras`.`dataCadastro`
    FROM `obras`";
	$con = $mysqli->query($consulta);
	?>

	<div class="container my-3 px-lg-3 p-md-3 " id="divAluno">
		<form method="post" action="/Banco/conexao/conexaoPesquisarObras.php">
			<legend>
				<h2>Pesquisar Obras</h2>
			</legend>
			<br/>
			<div class="form-row ">
				<div class="form-group col-md-8">
					<input type="text" class="form-control" placeholder="Digite o nome da obra" name="obra" required autofocus>
				</div>
				<div class="form-group col-md-4">
					<button type="submit" class="btn btn-primary"> Buscar </button>
				</div>
			</div>
		</form>
	</div>


	<form id="lista" name="lista" method="post">

		<div class="table-responsive">
			<div class="container  px-lg-3 p-md-3 text-lg-left ">

				<table class="table  my-2  ">
					<thead class="thead-light">
						<tr>
							<th scope="col">Identificador</th>
							<th scope="col">Nome</th>
							<th scope="col">Data de Cadastro</th>
							<th></th>

						</tr>
					</thead>

					<?php
			while ($tbl=$con->fetch_array()) {
			#while ($tbl = mysql_fetch_array($con)) {
			?>

					<tr>
						<td class="dif1">
							<?php echo $tbl["idObras"];?>
						</td>
						<td>
							<?php echo $tbl["nome"];?>
						</td>
						<td>
							<?php echo $tbl["dataCadastro"];?>
						</td>
						<td>
							<button type = "button" class="btn btn-outline-info" data-toggle="modal" data-target="#PesquisaObras">Info</button>
						</td>
					</tr>

					</tr>
	</form>
	<?php } ?>

	</table>
	</div>
	</div>


	<!-- Modal -->
	<div class="modal fade" id="PesquisaObras" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle">Dados da Obra </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- Formulario -->

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>



	<!-- Bootstrap JavaScript
    ================================================== -->
	<!-- -->
	<script src="./js/slim.min.js"></script>
	<script src="./js/popper.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>


</body>

</html>