<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset ="UTF-8"/>
	<link rel="icon" href="../Banco/img/favicon.ico" >
	<title> Cadastrar Aluno</title>
	<link href="../Banco/css/bootstrap.min.css " rel="stylesheet" >
	<link href="../Banco/css/cadastrarAluno.css " rel="stylesheet" >
</head>
<body>
<!--     															  Navbar  -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top ">
				<div class="container ">
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
								<a class="dropdown-item" href="/Banco/cadastroLR.php"> Livro</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="/Banco/cadastroBibli.php"> Bibliotecario(a)</a>
							  </div>
						</li>
						<li class="nav-item dropdown px-2">
							<a class="nav-link dropdown-toggle" href="#" id="navbarSite" role="button" 
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pesquisar</a>
								<div class="dropdown-menu" >
									<a class="dropdown-item" href="#"> Professor</a>
									<a class="dropdown-item" href="#"> Aluno</a>
								  <a class="dropdown-item" href="#"> Livro</a>
								</div>
						</li>
						<ul class="navbar-nav px-2">
							<li class="nav-item ">
							   <a class="nav-link" href="#"> Empréstimo</a>
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

<!--																		Formularioooooo-->
	<div class="container my-3 px-lg-3 p-md-3 " id="divAluno">
		<fieldset>
		<legend><h2>Aluno</h2></legend>
		<form method="POST" action="/Banco/conexao/conexaoCadastroAluno.php">
			<div class="form-row ">
			  <div class="form-group col-md-12" >
				<label >Nome Completo</label>
				<input type="text" class="form-control" name="nome"required autofocus>
			  </div>
			</div>
	
			<div class="form-row  ">
					<div class="form-group col-md-12 mx-auto" >
					<label >Responsável</label>
					<input type="text" class="form-control" name="responsavel" required autofocus>
					</div>
				</div>
				<div class="form-row ">
					<div class="form-group col-md-3">
						<label >Turma</label>
						<input type="text" class="form-control" name="turma" required autofocus>
					</div>
				<div class="form-group col-md-4">
						<label >Série</label>
						<input type="text" class="form-control" name="serie" required autofocus>
				</div>
				<div class="form-group col-md-5">
						<label>Matrícula</label>
						<input type="text" class="form-control" name="matricula" required autofocus>
				</div>
			</div>
			<center>
		
					 <button type="reset" class="btn btn-danger ">Cancelar</button>
					 <button type="submit" class="btn btn-primary  "> Salvar </button>
				 
       </center>
			 <hr>
	
	</form>
	
</fieldset>
</div>



 <!-- Bootstrap JavaScript
    ================================================== -->
    <!-- -->
    <script src="./js/slim.min.js" ></script>
    <script src="./js/popper.min.js" ></script>
    <script src="./js/bootstrap.min.js" ></script>
		
	
</body>
</html>