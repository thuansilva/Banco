<?php
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "sigb";

	$conn = mysqli_connect($host, $usuario, $senha, $banco);
	#$mysqli = new mysqli($host, $usuario, $senha, $banco);

	$id = $_POST['id_Professor'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$cpf = $_POST['cpf'];
	$telefone = $_POST['telefone'];
	$rua = $_POST['rua'];
	$bairro = $_POST['bairro'];
	$numero = $_POST['numero'];

	$result = "UPDATE `usuarios` INNER JOIN `professores` ON `usuarios`.`idUsuario` = `professores`.`idUsuario_FK` INNER JOIN `telefoneusuario` ON `usuarios`.`idUsuario` = `telefoneusuario`.`idUsuario_FK` INNER JOIN `enderecousuario` ON `usuarios`.`idUsuario` = `enderecousuario`.`idUsuario_FK` SET `usuarios`.`nomeUsuarios` = '$nome', `professores`.`email` = '$email', `professores`.`cpf` = '$cpf', `telefoneusuario`.`telefone` = '$telefone', `enderecousuario`.`rua` = '$rua', `enderecousuario`.`bairro` = '$bairro', `enderecousuario`.`numero` = '$numero' WHERE `usuarios`.`idUsuario` = '$id'";

	#$resul_up = mysqli_query($mysqli, $result);
	$result_up = $conn->query($result);

	if (mysqli_affected_rows($conn) != 0) {
		echo "<script>alert('Registro atualizado com sucesso!');
       location.href=\"/Banco/pesquisarProfessor.php\"</script>";
	} else {
		echo "<script>alert('Falha na atualização do registro!');
        location.href=\"/Banco/pesquisarProfessor.php\"</script>";
	}
?>