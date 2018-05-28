<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Pesquisar Professores</title>
	<link rel="icon" href="../Banco/img/favicon.ico">
	<link href="../Banco/css/bootstrap.min.css " rel="stylesheet">
	<link href="../Banco/css/cadastrarAluno.css " rel="stylesheet">
</head>

<body>
	<!--     					  Navbar         -->
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
	$consulta = "SELECT `usuarios`.`idUsuario`, `usuarios`.`nome`, `professores`.`email`, `professores`.`cpf` FROM 
	`usuarios` INNER JOIN `professores` ON `usuarios`.`idUsuario` = `professores`.`idUsuario_FK`";
	$con = $mysqli->query($consulta);
	?>

		<div class="container my-3 px-lg-3 p-md-3 " id="divAluno">
			<form method="post" action="/Banco/conexao/conexaoPesquisarProfessor.php">
				<legend>
					<h2>Pesquisar Professor</h2>
				</legend>
				<br/>
				<div class="form-row ">
					<div class="form-group col-md-4 aligh">
						<!--		<label >Pesquisar</label> -->
						<input type="text" class="form-control" placeholder="Digite o nome do professor" name="professor" required autofocus>
					</div>
					<div class="form-group col-md-4">
					

						<button type="submit" class="btn btn-primary"> Buscar </button>
					</div>
				</div>
				

			</form>
		</div>
		<!-- Tabela -->
	<form id="lista" name="lista" method="post">

		<div class="table-responsive">
			<div class="container  px-lg-3 p-md-3 text-lg-left ">
				<table class="table my-2">
					<thead class="thead-light">
						<tr>
							<th scope="col">Identificador</th>
							<th scope="col">Nome</th>
							<th scope="col">Email</th>
							<th scope="col">CPF</th>
							<th>                 </th>


						</tr>
					</thead>		

						<?php
			while ($tbl=$con->fetch_array()) {
						?>

							<tr>
								<td class="dif1">
									<?php echo $tbl["idUsuario"];?>
								</td>
								<td>
									<?php echo $tbl["nome"];?>
								</td>
								<td>
									<?php echo $tbl["email"];?>
								</td>
								<td>
									<?php echo $tbl["cpf"];?>
								</td>
								<td>
									<button type="button" href="" class="btn btn-info" data-toggle="modal"data-target="#PesquisaModal">Info</button>
								</td>
							</tr>
					</tr>
			</form>
			<?php } ?>
	</table>
	</div>
	</div>

<div class="modal fade" id="PesquisaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="PesquisaModal">Dados do Professor</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
				</div>
				<div class="modal-body">
					<!-- Formulario -->
				<form method="POST" action="/Banco/conexao/conexaoCadastroProf.php">
		<div class="form-row ">
			<div class="form-group col-md-6">
				<label >Nome Completo</label>
				<input type="text" class="form-control" name="nome" required autofocus>
			</div>
			<div class="form-group col-md-6 ">
				<label >Email</label>
				<input type="email" class="form-control"  placeholder="exemple@exemple.com" name="email" required autofocus>
			</div>
		</div>	
		<div class="form-row">
			<div class="form-group col-md-6">
				<label>CPF</label>
				<input type="text" class="form-control" name="cpf" placeholder="00000000-00" required autofocus>
			</div>
			<div class="form-group col-md-6">
				<label>Telefone</label>
				<input type="text" class="form-control" name="telefone" placeholder="(xx)xxxxx-xxxx" required autofocus>
			</div>
		</div>
		<div class="form-row ">
			<div class="form-group col-md-5">
				<label >Rua</label>
				<input type="text" class="form-control" placeholder="Coronel Serudo Martins" name="rua" required autofocus>
			</div>
			<div class="form-group col-md-5">
				<label >Bairro</label>
				<input type="text" class="form-control" placeholder="Iracy" name="bairro">
			</div>
			<div class="form-group col-md-2">
				<label >Número</label>
				<input type="tel" class="form-control" placeholder= "21" name="numero" required autofocus>
			</div>
		</div>
		</form>
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