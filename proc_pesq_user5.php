<?php
//Incluir a conexão com banco de dados


	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "sigb";

	$conn = mysqli_connect($host, $usuario, $senha, $banco);
	$mysqli = new mysqli($host, $usuario, $senha, $banco);

	if($mysqli->connect_error)
	echo "Falha na conexao: (".$mysqli->connect_error.")".$mysqli->connect_error;
	


$usuarios = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);

	//Pesquisar no banco de dados nome do usuario referente a palavra digitada
	//$usuarios = $_POST['palavra'];



	$result_user = ("SELECT `obras`.`idObras` ,  `obras`.`nomeObras` ,  `obras`.`dataCadastro`
    INNER JOIN `revistas` ON `obras`.`idObras` = `revistas`.`idObras_FK`
    INNER JOIN `possui` ON `possui`.`idObras_FK` = `obras`.`idObras`
    INNER JOIN `editora` ON `editora`.`idEditora` = `possui`.`idEditora_FK`
    WHERE `obras`.`nomeObras` LIKE  '%$usuarios%'");
    $resultado_user = mysqli_query($conn, $result_user);


if(($resultado_user) AND ($resultado_user->num_rows != 0 )){
	while($row_user = mysqli_fetch_assoc($resultado_user)){
	
		echo "<li>".$row_user['nomeObras']."</li>";
	}
}else{
	echo "Nenhum usuário encontrado ...";
}

?>


