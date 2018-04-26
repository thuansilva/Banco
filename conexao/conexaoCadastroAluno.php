<?php
	session_start();
	$nome = $_POST['nome'];
	$turma= $_POST['turma'];
	$responsavel= $_POST['responsavel'];
    $serie= $_POST['serie'];
    $matricula= $_POST['matricula'];


    $conexao = mysql_connect('localhost', 'root', '') or die (mysql_error());
    $select = mysql_select_db('sigb') or die (mysql_error());
    
    $cadastro = ("INSERT INTO `usuarios` (`nome`)
    VALUES('$nome')");
    mysql_query($cadastro);

    $id = mysql_insert_id();

	$cadastro1 = ("INSERT INTO `alunos` (`idUsuario_FK`, `turma`, `responsavel`, `serie`, `matricula`)
    VALUES({$id}, '$turma', '$responsavel', '$serie', '$matricula')");
    mysql_query($cadastro1);

	header("location:/Banco/cadastroAluno.php");
	?>