<?php
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "sigb";

	$conn = mysqli_connect($host, $usuario, $senha, $banco);
	#$mysqli = new mysqli($host, $usuario, $senha, $banco);

	$id = $_POST['idObras'];
	$nome = $_POST['nomeObras'];
	$ano = $_POST['anoPublicacao'];
	$titulo = $_POST['titulo'];
	$edicao = $_POST['edicao'];
	$editora = $_POST['nomeEditora'];
	$dataCadastro = $_POST['dataCadastro'];
	$obs = $_POST['obs'];

	$result = "UPDATE  `obras` 
	INNER JOIN  `revistas` ON  `obras`.`idObras` =  `revistas`.`idObras_FK`  
	INNER JOIN  `possui` ON  `possui`.`idObras_FK` = `obras`.`idObras` 
	INNER JOIN  `editora` ON  `editora`.`idEditora` =  `possui`.`idEditora_FK` 
	SET  `obras`.`nomeObras` = '$nome', `obras`.`anoPublicacao` =  '$ano', `obras`.`dataCadastro` =  '$dataCadastro', `obras`.`obs` =  '$obs', `revistas`.`titulo` =  '$titulo', `revistas`.`edicao` =  '$edicao', `editora`.`nomeEditora` =  '$editora' 
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