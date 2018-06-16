<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset ="UTF-8"/>
	<link rel="icon" href="../Banco/img/icone.png">
	<title> Cadastrar Obras</title>
	<link href="../Banco/css/bootstrap.min.css " rel="stylesheet" >
	<link href="../Banco/css/cadastrarAluno.css " rel="stylesheet" >
</head>


<body>
<!--					Navbar-->
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
								  	<a class="dropdown-item" href="/Banco/pesquisarObras.php">Obras</a>
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



<!--abas de troca-->

<div class="container my-3 px-lg-3 p-md-3" id="divAluno">
		<ul class="nav nav-tabs px-3" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active"  data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Livro</a>
				</li>
				<li class="nav-item">
					<a class="nav-link"  data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Revista</a>
				</li>
		</ul>

<!--					Conteúdo das Livro -->


			<div class="tab-content py-lg-3" id="myTabContent">
				<div class="tab-pane fade show active" id="home" aria-labelledby="home-tab">
						<legend><h2>Livro</h2></legend>
						<form  class method="POST" action="/Banco/conexao/conexaoCadastroLivro.php">
							<div class="form-row ">
								<div class="form-group col-md-6  ">
									<label >Nome do Exemplar</label>
									<input type="text" class="form-control" name="nome" required autofocus>
								</div>
								<div class="form-group col-md-3 ">
									<label >ISBN</label>
									<input type="text" class="form-control"  placeholder="00000000" name="isbn" required autofocus>
								</div>
								<div class="form-group col-md-3">
									<label >Ano de Publicação</label>
									<input type="date" class= "form-control"   name=" anoPublicacao"> 
								</div>
							</div>

							<div class="form-row ">
									<div class="form-group col-md-6">
										<label >Autor</label>
										<input type="text" class="form-control" placeholder="Ariano Suassuna" name="autor" required autofocus>
									</div>
									<div class="form-group col-md-3">
											<label >Editora</label>
											<input type="text" class="form-control" placeholder="Serial" name="editora" required autofocus>
										</div>
									<div class="form-group col-md-1">
												<label >Volume</label>
												<input type="text" class="form-control" placeholder="1" name="volume" required autofocus>
									</div>
									<div class="form-group col-md-2">
											<label >Data de Cadastro</label>
											<input type="date" class="form-control" name="dataCadastro" required autofocus>
								</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-12">
									<label>Observações</label>
									<textarea class="form-control" name="obs" >
									</textarea>
							</div>
							</div>
							<center>
									<button type="reset" class="btn btn-secondary ">Limpar</button>
									<button type="submit" class="btn btn-primary "> Salvar </button>
								<hr>
							</center>
						</form>
			
				</div>

<!--					Conteúdo das Revista -->
			<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
				<legend><h2>Revista</h2></legend>
				<form  class method="POST" action="/Banco/conexao/conexaoCadastroRevista.php">
					<div class="form-row ">
						<div class="form-group col-md-5  ">
							<label >Nome da Revista</label>
							<input type="text" class="form-control" name="nome" placeholder="Nacional"  required autofocus>
						</div>
						<div class="form-group col-md-5">
							<label >Titulo</label>
							<input type="text" class="form-control" name="titulo" placeholder="Revista Cientifica" required autofocus>
						</div>
						
						<div class="form-group col-md-2 ">
								<label >Ano da Publicaçao</label>
								<input type="date" class="form-control" name="anoPublicacao" placeholder="Revista Cientifica" required autofocus>
						</div>
					</div>

					<div class="form-row ">
							<div class="form-group col-md-1 ">
									<label >Edição</label>
									<input type="text" class="form-control" name="edicao" placeholder="5"  required autofocus>
								</div>
							<div class="form-group col-md-4 ">
								<label >Editora</label>
								<input type="text" class="form-control" name="editora" placeholder="Serial" required autofocus>
							</div>
							<div class="form-group col-md-2 ">
									<label >Data de Cadastro</label>
									<input type="date" class="form-control" name="dataCadastro" placeholder="Revista Cientifica" required autofocus>
							</div>
						</div>
						<div class="form-row">
								<div class="form-group col-md-12">
									<label>Observações</label>
									<textarea class="form-control"name="obs" >
									</textarea>
								</div>
						</div>
						<center>
								<button type="reset" class="btn btn-secondary">Limpar</button>
								<button type="submit" class="btn btn-primary ">Salvar</button>
							<hr>
						</center>
					</form>
				</div>
	
			</div>
</div>




 <!-- Bootstrap JavaScript
    ================================================== -->
    <!-- -->
    <script src="./js/slim.min.js" ></script>
    <script src="./js/popper.min.js" ></script>
    <script src="./js/bootstrap.min.js" ></script>
		
	
</body>
</html>