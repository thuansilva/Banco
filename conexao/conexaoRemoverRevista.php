<?php

	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "sigb";

	$conn = mysqli_connect($host, $usuario, $senha, $banco);

	$id = $_POST['idObras'];
	$remLivro =	("DELETE FROM `revistas` WHERE `idObras_FK` = '$id'");
	$remLivro1 =	("DELETE FROM `possui`WHERE `idObras_FK` = '$id'");
	$remLivro2 =	("DELETE FROM `obras`WHERE `idObras` = '$id'");

	$result_up = $conn->query($remLivro && $remLivro1 && $remLivro2);

	echo "<script>alert('Exclusão efetuada com sucesso!');
       location.href=\"/Banco/pesquisarObras.php\"</script>";
?>