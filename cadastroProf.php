<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset ="UTF-8"/>
<link rel="icon" href="../Banco/img/icone.png">
	<title> Cadastrar Professor(a)</title>
	<link href="../Banco/css/bootstrap.min.css " rel="stylesheet" >
	<link href="../Banco/css/cadastrarAluno.css " rel="stylesheet" >
</head>
<body>

<!--     															  Navbar          -->

		<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top ">
				<div class="container">
				  <a class="navbar-brand h1" href="home.php"> SIGB </a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite" 
					data-target="#navbarSupportedContent">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSite">
					  <ul class="navbar-nav ml-auto ">
						<li class="nav-item dropdown px-2">
						  <a class="nav-link dropdown-toggle " href="#" id="navbarSite" role="button" 
						  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cadastro</a>
							  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item " href="/Banco/cadastroProf.php">Professor(a)</a>
								<a class="dropdown-item" href="/Banco/cadastroAluno.php"> Aluno(a)</a>
								<a class="dropdown-item" href="/Banco/cadastroLR.php"> Obras</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="/Banco/cadastroBibli.php"> Bibliotecário(a)</a>
							  </div>
						</li>
						<li class="nav-item dropdown px-2">
							<a class="nav-link dropdown-toggle" href="#" id="navbarSite" role="button" 
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pesquisar</a>
								<div class="dropdown-menu" >
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
							   <a class="nav-link" href="/Banco/devolucao.php"> Devolução</a>
							</li>
						</ul>
					  </ul>
					   <ul class="navbar-nav ml-auto px-md-4">
						 <li class="nav-item dropdown">
				            <a class="nav-link" href="index.php"> Sair</a>
				         </li>
					   </ul>
					</div>
				</div>
		</nav>
	
	
	<!--     															  Formulario        -->
	<div class="container my-3 px-lg-3 p-md-3" id="divAluno">
		
			<h2>Professor(a)</h2>
	
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
		<center>
				<button type="reset" class="btn btn-secondary ">Limpar</button>
				<button type="submit" class="btn btn-primary  "> Salvar </button>
			<hr>
		</center>

		</form>

	</div>



<!-- Bootstrap JavaScript
    ================================================== -->
    <!-- -->
    <script src="./js/slim.min.js" ></script>
    <script src="./js/popper.min.js" ></script>
    <script src="./js/bootstrap.min.js" ></script>
	
</body>
</html>