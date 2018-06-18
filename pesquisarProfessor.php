<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Pesquisar Professores</title>
	<link rel="icon" href="../Banco/img/icone.png">
	<link rel="stylesheet" href="../Banco/css/font-awesome.min.css">
	<link href="../Banco/css/bootstrap.min.css " rel="stylesheet">
	<link href="../Banco/css/cadastrarAluno.css " rel="stylesheet">

	<script src="./Banco/js/slim.min.js"></script>
	<script src="./Banco/js/popper.min.js"></script>
	<script src="./Banco/js/bootstrap.min.js"></script>
	<script src="./Banco/js/jquery.min.js"></script>
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



	<?php
	include("../Banco/conexao/conexao.php");
	$consulta = "SELECT * FROM `usuarios`
	INNER JOIN `telefoneusuario` ON `usuarios`.`idUsuario` = `telefoneusuario`.`idUsuario_FK` 
	INNER JOIN `professores` ON `usuarios`.`idUsuario` = `professores`.`idUsuario_FK`
	INNER JOIN `enderecousuario` ON `usuarios`.`idUsuario` = `enderecousuario`.`idUsuario_FK`";
	
	
	#$resultado = mysqli_query($conn, $consulta);
	$con = $mysqli->query($consulta);
	?>
	<!-- Campo de Pesquisa -->
		<div class="container my-3 px-lg-3 p-md-3 " id="divAluno">
			<form method="post" action="/Banco/conexao/conexaoPesquisarProfessor.php">
				<legend>
					<h2>Pesquisar Professor</h2>
				</legend>
				<br/>
				<div class="row justify-content-md-center ">
				<div class="form-row col-md-8 ">
					<div class="form-group col-md-8">
						<!--		<label >Pesquisar</label> -->
						<input type="text" class="form-control" placeholder="Digite o nome do professor" name="professor" required autofocus>
					</div>
					<div class="form-group col-md-4">

						<button type="submit" name="busca"  class="btn btn-primary"> Buscar </button>
					</div>
				</div>
				</div>
			</form>
		</div>
	<!-- Tabela -->
	<form id="lista" name="lista" method="post" action="./conexao/conexaoRemoverProfessor.php">
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
							<?php echo $tbl["nomeUsuarios"];?>
						</td>
						<td>
							<?php echo $tbl["email"];?>
						</td>
						<td>
							<?php echo $tbl["cpf"];?>
						</td>
						<td>
							<button type="button" role="button" class="btn btn-outline-info"  
							data-toggle="modal" data-target="#myModal<?php echo $tbl['idUsuario'];?>">
								Visualizar
								<i class="fa fa-info"></i>
							</button>
							<button type="button" class="btn btn-outline-warning" 
							data-toggle="modal" data-target="#PesquisaModal" 
							data-whatever="<?php echo $tbl['idUsuario'];?>" 
							data-whatevernome="<?php echo $tbl['nomeUsuarios'];?>" 
							data-whateveremail="<?php echo $tbl['email'];?>"
							data-whatevercpf="<?php echo $tbl['cpf'];?>"
							data-whatevertelefone="<?php echo $tbl['telefone'];?>" 
							data-whateverrua="<?php echo $tbl['rua'];?>" 
							data-whateverbairro="<?php echo $tbl['bairro'];?>" 
							data-whatevernumero="<?php echo $tbl['numero'];?>">
								Editar
								<i class="fa fa-edit"></i>
							</button>					
							<button type="submit" role="button" class="btn btn-outline-danger"  
							data-toggle="modal" data-target="#myModal<?php echo $tbl['idUsuario']; ?>">
								Excluir
								<i class="fa fa-trash "></i>
							</button>
						</td>
					</tr>
					<!-- Inicio Modal -->
					<div class="modal fade" id="myModal<?php echo $tbl['idUsuario']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title text-center" id="myModalLabel"><?php echo $tbl['nomeUsuarios']; ?></h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								</div>
								<div class="modal-body">
									<p><?php echo "Identificador: ", $tbl['idUsuario']; ?></p>
									<p><?php echo "Nome: ", $tbl['nomeUsuarios']; ?></p>
									<p><?php echo "CPF: ", $tbl['cpf']; ?></p>
									<p><?php echo "Telefone: ", $tbl['telefone']; ?></p>
									<p><?php echo "Rua: ", $tbl['rua']; ?></p>
									<p><?php echo "Bairro: ", $tbl['bairro']; ?></p>
									<p><?php echo "Numero: ", $tbl['numero']; ?></p>
									<!--	<type="button" class="btn btn-outline-info" data-dismiss="modal">Alterar</button> -->
								</div>
							</div>
						</div>
					</div>
					<!-- Fim Modal -->
					<?php } ?>
				</table>
			</div>
		</div>
	</form>

	<div class="modal fade" id="PesquisaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="PesquisaModal"></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- Formulario -->				
					<form method="post" action="/Banco/conexao/conexaoAtualizarProfessor.php">
						<div class="form-row ">
							<div class="form-group col-md-6">
								<label for="nome">Nome Completo</label>
								<input type="text" class="form-control" id="nome" name="nome" required autofocus >
							</div>
							<div class="form-group col-md-6 ">
								<label for="email">Email</label>
								<input type="email" class="form-control"  id="email" name="email" required autofocus>
							</div>
						</div>	
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="cpf">CPF</label>
								<input type="text" class="form-control" id="cpf" name="cpf"  required autofocus>
							</div>
							<div class="form-group col-md-6">
								<label for="telefone">Telefone</label>
								<input type="text" class="form-control" id="telefone" name="telefone" required autofocus >
							</div>
						</div>
						<div class="form-row ">
							<div class="form-group col-md-5">
								<label for="rua">Rua</label>
								<input type="text" class="form-control" id="rua" name="rua" required autofocus >
							</div>
							<div class="form-group col-md-5">
								<label for="bairro">Bairro</label>
								<input type="text" class="form-control" id="bairro" name="bairro" required autofocus >
							</div>
							<div class="form-group col-md-2">
								<label for="numero">Número</label>
								<input type="tel" class="form-control" id="numero" name="numero" required autofocus >
							</div>
							<input id="id_Professor" type="hidden" name="id_Professor">
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Salvar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>



	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
	<script type="text/javascript">
		$('#PesquisaModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var recipient = button.data('whatever') // Extract info from data-* attributes
		  var recipientnome = button.data('whatevernome')
		  var recipientemail = button.data('whateveremail')
		  var recipientcpf = button.data('whatevercpf')
		  var recipienttelefone = button.data('whatevertelefone')
		  var recipientrua = button.data('whateverrua')
		  var recipientbairro = button.data('whateverbairro')
		  var recipientnumero = button.data('whatevernumero')

		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		  var modal = $(this)
		  modal.find('.modal-title').text('ID do Professor: ' + recipient)
		  modal.find('#id_Professor').val(recipient)
		  modal.find('#nome').val(recipientnome)
		  modal.find('#email').val(recipientemail)
		  modal.find('#cpf').val(recipientcpf)
		  modal.find('#telefone').val(recipienttelefone)
		  modal.find('#rua').val(recipientrua)
		  modal.find('#bairro').val(recipientbairro)
		  modal.find('#numero').val(recipientnumero)
		  
		})
	</script>

</body>

</html>