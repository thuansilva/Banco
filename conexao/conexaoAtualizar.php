<?php
	include("../Banco/conexao/conexao.php");
	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$responsavel = $_POST['responsavel'];
	$turma = $_POST['turma'];
	$serie = $_POST['serie'];
	$matricula = $_POST['matricula'];
	$rua = $_POST['rua'];
	$bairro = $_POST['bairro'];
	$numero = $_POST['numero'];

	$result = "UPDATE `usuarios` INNER JOIN `telefoneusuario` INNER JOIN `alunos` INNER JOIN `enderecousuario` SET `usuarios`.`nome` = '$nome', `telefoneusuario`.`telefone` = 'telefone', `alunos`.`turma`, `alunos`.`serie`, "

	$consulta = "SELECT * FROM `usuarios`
    INNER JOIN `telefoneusuario` ON `usuarios`.`idUsuario` = `telefoneusuario`.`idUsuario_FK`
	INNER JOIN `alunos` ON `usuarios`.`idUsuario` = `alunos`.`idUsuario_FK`
    INNER JOIN `enderecousuario` ON `usuarios`.`idUsuario` = `enderecousuario`.`idUsuario_FK`";

?>