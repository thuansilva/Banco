<?php
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "sigb";

	$conn = mysqli_connect($host, $usuario, $senha, $banco);
	#$mysqli = new mysqli($host, $usuario, $senha, $banco);

	$id = $_POST['id_Aluno'];
	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$responsavel = $_POST['responsavel'];
	$turma = $_POST['turma'];
	$serie = $_POST['serie'];
	$matricula = $_POST['matricula'];
	$rua = $_POST['rua'];
	$bairro = $_POST['bairro'];
	$numero = $_POST['numero'];

	$result = "UPDATE `usuarios` INNER JOIN `telefoneusuario` ON `usuarios`.`idUsuario` = `telefoneusuario`.`idUsuario_FK` INNER JOIN `alunos` ON `usuarios`.`idUsuario` = `alunos`.`idUsuario_FK` INNER JOIN `enderecousuario` ON `usuarios`.`idUsuario` = `enderecousuario`.`idUsuario_FK` SET `usuarios`.`nomeUsuarios` = '$nome', `telefoneusuario`.`telefone` = '$telefone', `alunos`.`responsavel` = '$responsavel', `alunos`.`turma` = '$turma', `alunos`.`serie` = '$serie', `alunos`.`matricula` = '$matricula', `enderecousuario`.`rua` = '$rua', `enderecousuario`.`bairro` = '$bairro', `enderecousuario`.`numero` = '$numero' WHERE `usuarios`.`idUsuario` = '$id'";

	#$resul_up = mysqli_query($mysqli, $result);
	$result_up = $conn->query($result);

	if (mysqli_affected_rows($conn) != 0) {
		echo "<script>alert('Registro atualizado com sucesso!');
       location.href=\"/Banco/pesquisarAlunos.php\"</script>";
	} else {
		echo "<script>alert('Falha na atualização do registro!');
        location.href=\"/Banco/pesquisarAlunos.php\"</script>";
	}
?>