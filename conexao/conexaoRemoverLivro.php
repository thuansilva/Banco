<?php

	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "sigb";

	$conn = mysqli_connect($host, $usuario, $senha, $banco);

	$id = $_POST['idObras'];
	$remLivro = ("SELECT  `livros`.`isbn` 
		FROM  `obras` 
		INNER JOIN  `livros` ON  `obras`.`idObras` =  `livros`.`idObras_FK` 
		WHERE  `livros`.`idObras_FK` =  '$id'");
	$remLivro1 =	("DELETE FROM `tem` WHERE `isbn_FK`='$remLivro");
	$remLivro2 =	("DELETE FROM `livros` WHERE `idObras_FK` = '$id'");
	$remLivro3 =	("DELETE FROM `possui`WHERE `idObras_FK` = '$id'");
	$remLivro4 =	("DELETE FROM `obras`WHERE `idObras` = '$id'");

	$result_up = $conn->query($remLivro1 && $remLivro2 && $remLivro3 && $remLivro4);

	echo "<script>alert('Exclusão efetuada com sucesso!');
       location.href=\"/Banco/pesquisarObras.php\"</script>";
?>