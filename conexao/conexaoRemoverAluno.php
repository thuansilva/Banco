<?php

	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "sigb";

	$conn = mysqli_connect($host, $usuario, $senha, $banco);

	$id = $_POST['idUsuario'];
	$remAluno = ("DELETE FROM `telefoneusuario` WHERE `idUsuario_FK`='$id'");
	$remAluno1 =	("DELETE FROM `enderecousuario` WHERE `idUsuario_FK`='$id");
	$remAluno2 =	("DELETE FROM `alunos` WHERE `idUsuario_FK` = '$id'");
	$remAluno3 =	("DELETE FROM `usuarios`WHERE `idUsuario` = '$id'");

	$result_up = $conn->query($remAluno && $remAluno1 && $remAluno2 && $remAluno3);

	echo "<script>alert('Exclusão efetuada com sucesso!');
       location.href=\"/Banco/pesquisarAlunos.php\"</script>";
?>