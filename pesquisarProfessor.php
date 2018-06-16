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
	$consulta = "SELECT * FROM `usuarios`
	INNER JOIN `telefoneusuario` ON `usuarios`.`idUsuario` = `telefoneusuario`.`idUsuario_FK` 
	INNER JOIN `professores` ON `usuarios`.`idUsuario` = `professores`.`idUsuario_FK`
	INNER JOIN `enderecousuario` ON `usuarios`.`idUsuario` = `enderecousuario`.`idUsuario_FK`";
	
	#$resultado = mysqli_query($conn, $consulta);
	$con = $mysqli->query($consulta);
	?>
<<<<<<< HEAD
	<!-- Campo de Pesquisa -->
		<div class="container my-3 px-lg-3 p-md-3 " id="divAluno">
			<form method="post" action="/Banco/conexao/conexaoPesquisarProfessor.php">
				<legend>
					<h2>Pesquisar Professor</h2>
				</legend>
				<br/>
				<div class="form-row ">
					<div class="form-group col-md-4 aligh">
=======

	<div class="container my-3 px-lg-3 p-md-3 " id="divAluno">
		<form method="post" action="/Banco/conexao/conexaoPesquisarProfessor.php">
			<legend>
				<h2>Pesquisar Professor</h2>
			</legend>
			<br/>
			<div class="row justify-content-md-center ">
				<div class="form-row col-md-8 ">
					<div class="form-group justify col-md-8">
>>>>>>> 561410720391e64754071631e74c1debadd17196
						<!--		<label >Pesquisar</label> -->
						<input type="text" class="form-control" placeholder="Digite o nome do professor" name="professor" required autofocus>
					</div>
					<div class="form-group col-md-4">
<<<<<<< HEAD
=======

>>>>>>> 561410720391e64754071631e74c1debadd17196

						<button type="submit" name="busca"  class="btn btn-primary"> Buscar </button>
					</div>
				</div>
<<<<<<< HEAD
			</form>
		</div>
=======
			</div>


		</form>
	</div>
>>>>>>> 561410720391e64754071631e74c1debadd17196
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
<<<<<<< HEAD
							<th>                 </th>
=======
							<th> </th>


>>>>>>> 561410720391e64754071631e74c1debadd17196
						</tr>
					</thead>

					<?php
<<<<<<< HEAD
					while ($tbl=$con->fetch_array()) {
					?>
=======
			while ($tbl=$con->fetch_array()) {
						?>

>>>>>>> 561410720391e64754071631e74c1debadd17196
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
<<<<<<< HEAD
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
							<button type="button" role="button" class="btn btn-outline-danger"  
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
		</form>
=======
							<button type="button" role="button" class="btn btn-outline-info" data-toggle="modal" data-target="#PesquisaModal<?php echo $tbl['idUsuario']; ?>">

								<i class="fa fa-info"></i>
							</button>
							<button type="button" role="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#PesquisaModal<?php echo $tbl['idUsuario']; ?>">

								<i class="fa fa-edit"></i>
							</button>
							<button type="button" role="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#PesquisaModal<?php echo $tbl['idUsuario']; ?>">

								<i class="fa fa-trash"></i>
							</button>
						</td>
					</tr>
					</tr>
	</form>
>>>>>>> 561410720391e64754071631e74c1debadd17196
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
<<<<<<< HEAD
				<form method="POST" action="/Banco/conexao/conexaoCadastroProf.php">
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
		</div>
		</form>
=======
					<form method="POST" action="/Banco/conexao/conexaoCadastroProf.php">
						<div class="form-row ">
							<div class="form-group col-md-6">
								<label>Nome Completo</label>
								<input type="text" class="form-control" name="nome" required autofocus>
							</div>
							<div class="form-group col-md-6 ">
								<label>Email</label>
								<input type="email" class="form-control" placeholder="exemple@exemple.com" name="email" required autofocus>
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
								<label>Rua</label>
								<input type="text" class="form-control" placeholder="Coronel Serudo Martins" name="rua" required autofocus>
							</div>
							<div class="form-group col-md-5">
								<label>Bairro</label>
								<input type="text" class="form-control" placeholder="Iracy" name="bairro">
							</div>
							<div class="form-group col-md-2">
								<label>Número</label>
								<input type="tel" class="form-control" placeholder="21" name="numero" required autofocus>
							</div>
						</div>
					</form>
>>>>>>> 561410720391e64754071631e74c1debadd17196
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>



<<<<<<< HEAD
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
		  modal.find('.modal-title').text('ID do Aluno: ' + recipient)
		  modal.find('#id_Aluno').val(recipient)
		  modal.find('#nome').val(recipientnome)
		  modal.find('#email').val(recipientemail)
		  modal.find('#cpf').val(recipientcpf)
		  modal.find('#telefone').val(recipienttelefone)
		  modal.find('#rua').val(recipientrua)
		  modal.find('#bairro').val(recipientbairro)
		  modal.find('#numero').val(recipientnumero)
		  
		})
	</script>
=======

	<!-- Bootstrap JavaScript
    ================================================== -->
	<!-- -->
	<script src="./js/slim.min.js"></script>
	<script src="./js/popper.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
>>>>>>> 561410720391e64754071631e74c1debadd17196

</body>

</html>