<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Devolução</title>
	<link rel="icon" href="../Banco/img/icone.png">
	<link rel="stylesheet" href="../Banco/css/font-awesome.min.css">
	<link href="../Banco/css/bootstrap.min.css " rel="stylesheet" >
	<link href="../Banco/css/cadastrarAluno.css " rel="stylesheet" >
	<link href="../Banco/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

	<!-- Bootstrap JavaScript
    ================================================== -->
    <!-- -->
    <script src="./Banco/js/slim.min.js" ></script>
    <script src="./Banco/js/popper.min.js" ></script>
    <script src="./Banco/js/bootstrap.min.js" ></script>
    <script src="../Banco/js/jquery.min.js"></script>
	<script src="./personalizado.js"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top ">
	<div class="container ">
		<a class="navbar-brand h1" href="home.php"> SIGB </a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite"			data-target="#navbarSupportedContent">
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

	<?php
	include("../Banco/conexao/conexao.php");
	$consulta = "SELECT `usuarios_emprestimo`.`idEmprestimo`, `usuarios_emprestimo`.`idBibliotecaria_FK`, `usuarios`.`nomeUsuarios`,
	 `obras`.`nomeObras`, `usuarios_emprestimo`.`dataDevolucao`, `usuarios_emprestimo`.`dataEmprestimo` 
    FROM `usuarios_emprestimo`
    INNER JOIN `usuarios` ON `usuarios`.`idUsuario` = `usuarios_emprestimo`.`idUsuario_FK`
	INNER JOIN `obras` ON `obras`.`idObras` = `usuarios_emprestimo`.`idObras_FK`
	ORDER BY  `obras`.`nomeObras` ";
	$con = $mysqli->query($consulta);
	?>

	<!-- Campo de Pesquisa -->
	<div class="container my-3 px-lg-3 p-md-3 " id="divAluno">
		<form method="post" action="/Banco/conexao/conexaoPesquisarDevolucao.php">
			<legend>
				<h2>Devolução de Obras</h2>
			</legend>
			<br/>
			<div class="row justify-content-md-center ">
			<div class="form-row col-md-8">
				<div class="form-group col-md-8">
					<input type="text" class="form-control" placeholder="Digite o nome da obra" id="pesquisa3" name="pesquisa3" required autofocus>
				</div>
				
		</div>
		</form>
		
	</div>
<ul class="resultado"></ul>

	<!-- Tabela -->
	<form id="lista" name="lista" method="post"> <!--action="/Banco/conexao/conexaoDevolucao.php"-->

		<div class="table-responsive">
			<div class="container  px-lg-3 p-md-3 text-lg-left ">
				<table class="table my-2">
					<thead class="thead-light">
						<tr>
							<th scope="col">Cod. Empr.</th>
							<th scope="col">Nome Obra</th>
							<th scope="col">Nome Usuário</th>
							<th scope="col">Data Empréstimo</th>
							<th scope="col">Data Devolução</th>
							<th>                 </th>
						</tr>
					</thead>
		<?php
			while ($tbl=$con->fetch_array()) {
			#while ($tbl = mysql_fetch_array($con)) {
		?>

		<tr>
			<td class="dif1">
				<?php echo $tbl["idEmprestimo"];?>
			</td>
			<td>
				<?php echo $tbl["nomeObras"];?>
			</td>
			<td>
				<?php echo $tbl["nomeUsuarios"];?>
			</td>
			<td>
				<?php echo $tbl["dataEmprestimo"];?>
			</td>
			<td>
				<?php echo $tbl["dataDevolucao"];?>
			</td>
			<td>
	<!--		<button type="button" role="button" class="btn btn-outline-info"  
			data-toggle="modal" data-target="#myModal<?#php echo $tbl['idEmprestimo']; ?>">
				Visualizar
				<i class="fa fa-info"></i>
			</button>-->

			<button type="button" class="btn btn-outline-success" 
			data-toggle="modal" data-target="#PesquisaModal" 
			data-whatever="<?php echo $tbl['idEmprestimo'];?>" 
			data-whatevernomeobras="<?php echo $tbl['nomeObras'];?>" 
			data-whatevernomeusuario="<?php echo $tbl['nomeUsuarios'];?>" 
			data-whateverdatae="<?php echo $tbl['dataEmprestimo'];?>"
			data-whateverdatad="<?php echo $tbl['dataDevolucao'];?>">
			Devolver
			<i class="fa fa-undo "></i>
			</button>
		<!--	<button type="button" role="button" class="btn btn-outline-success"  
			data-toggle="modal" data-target="conexaoDevolucao.php<?#php echo $tbl['idEmprestimo']; ?>">
				Devolver
				<i class="fa fa-undo "></i>
			</button>-->
			</td>
		</tr>
		<!-- Inicio Modal -->
		<div class="modal fade" id="myModal<?php echo $tbl['idEmprestimo']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title text-center" id="myModalLabel"><?php echo $tbl['nomeObras']; ?></h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p><?php echo "Identificador Empréstimo: ", $tbl['idEmprestimo']; ?></p>
						<p><?php echo "Nome Obra: ", $tbl['nomeObras']; ?></p>
						<p><?php echo "Nome Usuário: ", $tbl['nomeUsuarios']; ?></p>
						<p><?php echo "Data Empréstimo: ", $tbl['dataEmprestimo']; ?></p>
						<p><?php echo "Data Devolução: ", $tbl['dataDevolucao']; ?></p>
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

	<!-- Modal -->

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

					<form method="post" action="/Banco/conexao/conexaoDevolucao.php">
						<div class="form-row">
							<div class="form-group col-md-12">
								<label for="nomeobra">Nome da Obra</label>
								<input type="text" class="form-control" id="nomeobra" name="nomeobra" required autofocus>
							</div>
							<div class="form-group col-md-12">
								<label for="nomeusuario">Nome do Usuario</label>
								<input type="text" class="form-control" id="nomeusuario" name="nomeusuario" required autofocus>
							</div>
						</div>
						<div class="form-row  ">
							<div class="form-group col-md-6 mx-auto">
								<label for="datae">Data do Emprestimo</label>
								<input type="text" class="form-control" id="datae" name="datae" required autofocus>
							</div>
						
							<div class="form-group col-md-6">
								<label for="datad">Data de Devolucao</label>
								<input type="text" class="form-control" id="datad" name="datad" required autofocus>
							</div>
							<input id="id_Emprestimo" type="hidden" name="id_Emprestimo">
						</div>

						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
							<button type="submit" class="btn btn-primary">Concluir</button>
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
			var recipientnomeobra = button.data('whatevernomeobras')
			var recipientnomeusuario = button.data('whatevernomeusuario')
			var recipientdatae = button.data('whateverdatae')
			var recipientdatad = button.data('whateverdatad')
			// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
			// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
			var modal = $(this)
			modal.find('.modal-title').text('ID do Aluno: ' + recipient)
			modal.find('#id_Emprestimo').val(recipient)
			modal.find('#nomeobra').val(recipientnomeobra)
			modal.find('#nomeusuario').val(recipientnomeusuario)
			modal.find('#datae').val(recipientdatae)
			modal.find('#datad').val(recipientdatad)
		})
	</script>		

</body>
</html>