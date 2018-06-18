<?php

	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "sigb";

	$conn = mysqli_connect($host, $usuario, $senha, $banco);

	$id = $_POST['idUsuario'];
	$remProf = ("DELETE FROM `telefoneusuario` WHERE `idUsuario_FK`='$id'");
	$remProf1 =	("DELETE FROM `enderecousuario` WHERE `idUsuario_FK`='$id");
	$remProf2 =	("DELETE FROM `professores` WHERE `idUsuario_FK` = '$id'");
	$remProf3 =	("DELETE FROM `usuarios`WHERE `idUsuario` = '$id'");

	$result_up = $conn->query($remProf && $remProf1 && $remProf2 && $remProf3);

	echo "<script>alert('Exclusão efetuada com sucesso!');
       location.href=\"/Banco/pesquisarProfessor.php\"</script>";
?>