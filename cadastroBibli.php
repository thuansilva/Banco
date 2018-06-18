<!DOCTYPE html>
<html lang="pt-br">
<head>
<head>
	<meta charset ="UTF-8"/>
	<link rel="icon" href="../Banco/img/icone.png">
	<title> Cadastrar Biliotecario(a)</title>
	<link href="../Banco/css/bootstrap.min.css " rel="stylesheet" >
	<link href="../Banco/css/cadastrarAluno.css " rel="stylesheet" >

</head>
<body>
	<!--					Navbar  -->
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
	
	
	<!--					Formulário -->
	<div class="container my-3 px-lg-3 p-md-3 " id="divAluno">
	
		<legend><h2>Bibliotecario(a)</h2></legend>
	
		<form  class method="POST" action="/Banco/conexao/conexaoCadastroBibli.php">
		<div class="form-row ">
			<div class="form-group col-md-6">
				<label >Nome Completo</label>
				<input type="text" class="form-control" name="nome" required autofocus>
			</div>
			<div class="form-group col-md-4 ">
				<label >Email</label>
				<input type="email" class="form-control"  placeholder="exemple@exemple.com" name="email" required autofocus>
			</div>
			<div class="form-group col-md-2">
				<label for="inputtelefone" >Telefone</label>
				<input type="tel" class= "form-control" id="inputtelefone" placeholder="(xx)xxxxx-xxxx" name="telefone"> 
			</div>
		</div>
		

		<div class="form-row ">
			<div class="form-group col-md-5">
				<label >Rua</label>
				<input type="text" class="form-control"placeholder="Betel"  name="rua" required autofocus>
			</div>
			<div class="form-group col-md-5">
				<label >Bairro</label>
				<input type="text" class="form-control" placeholder="Santa Cruz" name="bairro">
			</div>
			<div class="form-group col-md-2">
				<label >Número</label>
				<input type="tel" class="form-control" placeholder="xx"  name="numero" required autofocus>
			</div>
		</div>
		
		<div class="form-row " >
			<div class="form-group col-md-4 ">
				<label for="inputlogin">Login</label>
				<input type="text" class="form-control" id="inputlogin" placeholder="exemple"  name="login" required autofocus>
			</div>
			
			<div class="form-label-group col-md-4 ">
			<label >Senha</label>
            <input type="password" name ="senha"  placeholder="password" class="form-control"  required autofocus>     
			</div>
		</div>
		<div>
			<center>
				<button type="reset" class="btn btn-secondary ">Limpar</button>
				<button type="submit" class="btn btn-primary  "> Salvar </button>
				<hr>
		 	</center>		
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