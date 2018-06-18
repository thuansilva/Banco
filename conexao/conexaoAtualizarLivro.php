<?php
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "sigb";

	$conn = mysqli_connect($host, $usuario, $senha, $banco);
	#$mysqli = new mysqli($host, $usuario, $senha, $banco);

	$id = $_POST['id_Obras'];
	$nome = $_POST['nome'];
	$ano = $_POST['anopublicacao'];
	$autor = $_POST['autor'];
	$editora = $_POST['editora'];
	$volume = $_POST['volume'];
	$dataCadastro = $_POST['datacadastro'];
	$obs = $_POST['obs'];

	$result = "UPDATE  `obras` 
	INNER JOIN  `livros` ON  `obras`.`idObras` =  `livros`.`idObras_FK` 
	INNER JOIN  `tem` ON  `tem`.`isbn_fk` = `livros`.`isbn` 
	INNER JOIN  `autor` ON  `autor`.`idAutor` =  `tem`.`idAutor_FK` 
	INNER JOIN  `possui` ON  `possui`.`idObras_FK` = `obras`.`idObras` 
	INNER JOIN  `editora` ON  `editora`.`idEditora` =  `possui`.`idEditora_FK` 
	SET  `obras`.`nomeObras` = '$nome', `obras`.`anoPublicacao` =  '$ano', `obras`.`dataCadastro` =  '$dataCadastro', `obras`.`obs` =  '$obs', `livros`.`volume` =  '$volume', `autor`.`nomeAutor` =  '$autor', `editora`.`nomeEditora` =  '$editora' 
	WHERE  `obras`.`idObras` =  '$id'";

	#$resul_up = mysqli_query($mysqli, $result);
	$result_up = $conn->query($result);

	if (mysqli_affected_rows($conn) != 0) {
		echo "<script>alert('Registro atualizado com sucesso!');
       location.href=\"/Banco/pesquisarObras.php\"</script>";
	} else {
		echo "<script>alert('Falha na atualização do registro!');
        location.href=\"/Banco/pesquisarObras.php\"</script>";
	}

?>