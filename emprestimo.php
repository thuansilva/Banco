<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Empréstimo</title>
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
							<a class="nav-link dropdown-toggle" href="" data-toggle="dropdown">Usuário</a>
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
		<form method="post" name="formEmprestimo" action="/Banco/conexao/conexaoEmprestimo.php">
		</form>
		<form method="post" name="formPesquisarObras" action="/Banco/conexao/conexaoPesquisarObras.php">
		</form>
		<form method="post" name="formPesquisarUsuario" action="/Banco/conexao/conexaoPesquisarUsuario.php">
		</form>

			<legend><h2>Empréstimo de Obras</h2></legend>
			<br/>
			<div class="form-row">	
				
				<!-- tinha um form aqui -->	
				<div class="form-group col-md-8" >
			<!--		<label >Pesquisar Obra</label> -->
					<input type="text" form="formPesquisarObras" class="form-control" placeholder="Digite o nome da obra" name="obra" id="obra" required autofocus>
				</div>
					<div class="form-group col-md-4" >
						<button type="submit" class="btn btn-primary" onClick="document.formPesquisarObras.submit()">
							Buscar
						</button>
					</div>
				
			</div>
			<div class="form-row">			
				<div class="form-group col-md-8" >
			<!--		<label >Pesquisar Usuário</label> -->
					<input type="text" class="form-control" placeholder="Digite o nome do usuário" name="nomeUsuario" required autofocus>
				</div>
				<div class="form-group col-md-4" >
					<button type="submit" class="btn btn-primary"  onClick="document.formPesquisarUsuario.submit()">
						Buscar
					</button>
				</div>
				
			</div>
			<div class="form-row">
				<div class="form-group col-md-4">
					<label>Data do empréstimo</label>
					<input type="date" class="form-control" name="dataEmprestimo" required autofocus>
					
				</div>
				<div class="form-group col-md-4">
					<label>Data de devolução</label>
					<input type="date" class="form-control" name="dataDevolucao" required autofocus>
					
				</div>
			</div>
			<center>		
				<button type="reset" class="btn btn-danger" onClick="document.formEmprestimo.submit()">
					Cancelar
				</button>
				<button type="submit" class="btn btn-primary" onClick="document.formEmprestimo.submit()">
					Salvar
				</button>			 
       		</center>
			 <hr>
		
	</div>

 <!-- Bootstrap JavaScript
    ================================================== -->
    <!-- -->
    <script src="./js/slim.min.js" ></script>
    <script src="./js/popper.min.js" ></script>
    <script src="./js/bootstrap.min.js" ></script>
		

</body>
</html>