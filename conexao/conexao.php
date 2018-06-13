<?php
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "sigb";

	#$conn = mysqli_connect($host, $usuario, $senha, $banco);
	$mysqli = new mysqli($host, $usuario, $senha, $banco);

	if($mysqli->connect_error)
		echo "Falha na conexao: (".$mysqli->connect_error.")".$mysqli->connect_error;
?>