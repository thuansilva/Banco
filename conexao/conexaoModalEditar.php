<?php

	include("../Banco/conexao/conexao.php");

	$consulta = "SELECT `usuarios`.`nome`, `telefoneusuario`.`telefone`, `alunos`.`responsavel`, `alunos`.`turma`, `alunos`.`serie`, `alunos`.`matricula`, `enderecousuario`.`rua`, `enderecousuario`.`bairro`, `enderecousuario`.`numero` 
    FROM `usuarios`
    INNER JOIN `telefoneusuario` ON `usuarios`.`idUsuario` = `telefoneusuario`.`idUsuario_FK`
	INNER JOIN `alunos` ON `usuarios`.`idUsuario` = `alunos`.`idUsuario_FK`
    INNER JOIN `enderecousuario` ON `usuarios`.`idUsuario` = `enderecousuario`.`idUsuario_FK`";
	
/*	$con = $mysqli->query($consulta); */

	#$select_query = mysql_query($consul);

					$id = filter_input(INPUT_POST, 'idUsuario');
					$nome = filter_input(INPUT_POST, 'nome');
					$telefone = filter_input(INPUT_POST, 'telefone');
					$responsavel = filter_input(INPUT_POST, 'responsavel');
					$turma = filter_input(INPUT_POST, 'turma');
					$serie = filter_input(INPUT_POST, 'serie');
					$matricula = filter_input(INPUT_POST, 'matricula');
					$rua = filter_input(INPUT_POST, 'rua');
					$bairro = filter_input(INPUT_POST, 'bairro');
					$numero = filter_input(INPUT_POST, 'numero');

					#if ($row=$con->fetch_array()) {
		/*		while($row = mysql_fetch_array($select_query)){
						$nome = $row['nome'];
						$telefone = $row['telefone'];
						$responsavel = $row['responsavel'];
						$turma = $row['turma'];
						$serie = $row['serie'];
						$matricula = $row['matricula'];
						$rua = $row['rua'];
						$bairro = $row['bairro'];
						$numero = $row['numero']; */

					

    				#$con = $mysqli->query($consul);

#    				if ($row=$con->fetch_array()) {
    				#	$id = $row['idUsuario'];
#    					$nome = $row['nome'];
#						$telefone = $row['telefone'];
#						$responsavel = $row['responsavel'];
#						$turma = $row['turma'];
#						$serie = $row['serie'];
#						$matricula = $row['matricula'];
#						$rua = $row['rua'];
#						$bairro = $row['bairro'];
#						$numero = $row['numero'];
?>
