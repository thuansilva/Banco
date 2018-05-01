<?php
	session_start();
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $numero = $_POST['numero'];


    $conexao = mysql_connect('localhost', 'root', '') or die (mysql_error());
    $select = mysql_select_db('sigb') or die (mysql_error());
    
    $cadastro = ("INSERT INTO `usuarios` (`nome`)
    VALUES('$nome')");
    mysql_query($cadastro);

    $id = mysql_insert_id();

	$cadastro1 = ("INSERT INTO `professores` (`idUsuario_FK`, `email`, `cpf`)
    VALUES({$id}, '$email', '$cpf')");
    mysql_query($cadastro1);

    $cadastro2 = ("INSERT INTO `telefoneUsuario` (`idUsuario_FK`, `telefone`)
    VALUES({$id}, '$telefone')");
    mysql_query($cadastro2);

    $cadastro3 = ("INSERT INTO `enderecoUsuario` (`idUsuario_FK`, `rua`, `numero`, `bairro`)
    VALUES({$id}, '$rua', '$numero', '$bairro')");
    mysql_query($cadastro3);

	header("location:/Banco/cadastroProf.php");
	?>