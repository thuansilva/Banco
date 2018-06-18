<?php

	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "sigb";

	$conn = mysqli_connect($host, $usuario, $senha, $banco);

	$id = $_POST['id_revista'];
	$remRevista =	("DELETE FROM `revistas` WHERE `idObras_FK` = '$id'");
	$result_up = $conn->query($remRevista);

	$remRevista1 =	("DELETE FROM `possui`WHERE `idObras_FK` = '$id'");
	$result_up = $conn->query($remRevista1);

	$remRevista2 =	("DELETE FROM `obras`WHERE `idObras` = '$id'");
	$result_up = $conn->query($remRevista2);

	

	echo "<script>alert('Exclusão efetuada com sucesso!');
       location.href=\"/Banco/pesquisarObras.php\"</script>";
?>