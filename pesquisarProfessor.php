<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Pesquisar Professores</title>
	<link href="../Banco/css/bootstrap.min.css " rel="stylesheet" >
	<link href="../Banco/css/cadastrarAluno.css " rel="stylesheet" >
</head>
<body>
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

	<div class="container my-3 px-lg-3 p-md-3 " id="divAluno">
	<form method="post" action="/Banco/conexao/conexaoPesquisarProfessor.php">
		<legend><h2>Pesquisar Professor</h2></legend>
		<br/>
		<div class="form-row ">			
			<div class="form-group col-md-8" >
		<!--		<label >Pesquisar</label> -->
				<input type="text" class="form-control" placeholder="Digite o nome do professor" name="professor" required autofocus>
			</div>
			<div class="form-group col-md-4" >
			  	
				<button type="submit" class="btn btn-primary"> Buscar  </button>
			</div>
		</div>
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