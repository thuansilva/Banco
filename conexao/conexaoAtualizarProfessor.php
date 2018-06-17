<?php
	include("../Banco/conexao/conexao.php");

	$id = $_POST['idUsuario_FK'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$cpf = $_POST['cpf'];
	$telefone = $_POST['telefone'];
	$rua = $_POST['rua'];
	$bairro = $_POST['bairro'];
	$numero = $_POST['numero'];

	$result = "UPDATE `usuarios` 
	INNER JOIN `telefoneusuario` ON `usuarios`.`idUsuario` = `telefoneusuario`.`idUsuario_FK` 
	INNER JOIN `professores` ON `usuarios`.`idUsuario` = `professores`.`idUsuario_FK` 
	INNER JOIN `enderecousuario` ON `usuarios`.`idUsuario` = `enderecousuario`.`idUsuario_FK` 
	SET `usuarios`.`nomeUsuarios` = '$nome', `telefoneusuario`.`telefone` = '$telefone', `professores`.`email` = '$email', `professores`.`cpf` = '$cpf', `enderecousuario`.`rua` = '$rua', `enderecousuario`.`bairro` = '$bairro', `enderecousuario`.`numero` = '$numero' 
	WHERE `usuarios`.`idUsuario` = '$id'";

	#$resul_up = mysqli_query($mysqli, $result);
	$result_up = $mysqli->query($result);

	#if (mysqli_affected_rows($mysqli) != 0) {
	#	echo "<script>alert('Registro atualizado com sucesso!');
     #   location.href=\"/Banco/pesquisarAlunos.php\"</script>";
	#} else {
	#	echo "<script>alert('Falha na atualização do registro!');
     #   location.href=\"/Banco/pesquisarAlunos.php\"</script>";
	#}
?>