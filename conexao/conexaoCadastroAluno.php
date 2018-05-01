<?php
	session_start();
	$nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
	$responsavel = $_POST['responsavel'];
    $turma = $_POST['turma'];
    $serie = $_POST['serie'];
    $matricula = $_POST['matricula'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $numero = $_POST['numero'];


    $conexao = mysql_connect('localhost', 'root', '') or die (mysql_error());
    $select = mysql_select_db('sigb') or die (mysql_error());
    
    $cadastro = ("INSERT INTO `usuarios` (`nome`)
    VALUES('$nome')");
    mysql_query($cadastro);

    $id = mysql_insert_id();

    $cadastro1 = ("INSERT INTO `telefoneUsuario` (`idUsuario_FK`, `telefone`)
    VALUES({$id}, '$telefone')");
    mysql_query($cadastro1);

	$cadastro2 = ("INSERT INTO `alunos` (`idUsuario_FK`, `turma`, `responsavel`, `serie`, `matricula`)
    VALUES({$id}, '$turma', '$responsavel', '$serie', '$matricula')");
    mysql_query($cadastro2);

    $cadastro3 = ("INSERT INTO `enderecoUsuario` (`idUsuario_FK`, `rua`, `numero`, `bairro`)
    VALUES({$id}, '$rua', '$numero', '$bairro')");
    mysql_query($cadastro3);

	header("location:/Banco/cadastroAluno.php");
	?>