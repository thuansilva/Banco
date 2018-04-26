<?php
	session_start();
	$nome = $_POST['nome'];
	$email= $_POST['email'];
	$cpf= $_POST['cpf'];


    $conexao = mysql_connect('localhost', 'root', '') or die (mysql_error());
    $select = mysql_select_db('sigb') or die (mysql_error());
    
    $cadastro = ("INSERT INTO `usuarios` (`nome`)
    VALUES('$nome')");
    mysql_query($cadastro);

    $id = mysql_insert_id();

	$cadastro1 = ("INSERT INTO `professores` (`idUsuario_FK`, `email`, `cpf`)
    VALUES({$id}, '$email', '$cpf')");
    mysql_query($cadastro1);

	header("location:/Banco/cadastroProf.php");
	?>