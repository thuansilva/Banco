<?php
	session_start();
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$rua = $_POST['rua'];
	$numero = $_POST['numero'];
	$bairro = $_POST['bairro'];	
	$login = $_POST['login'];
	$senha = $_POST['senha'];

    $conexao = mysql_connect('localhost', 'root', '') or die (mysql_error());
    $select = mysql_select_db('sigb') or die (mysql_error());
    
    $cadastro = ("INSERT INTO `bibliotecaria` (`nomeBibliotecaria`, `email`, `nomeLogin`, `senha`)
    VALUES('$nome', '$email', '$login', '$senha')");
    mysql_query($cadastro);

    $id = mysql_insert_id();

	$cadastro1 = ("INSERT INTO `telefoneBibliotecaria` (`idBibliotecaria_FK`, `telefone`)
    VALUES({$id}, '$telefone')");
    mysql_query($cadastro1);

    $cadastro2 = ("INSERT INTO `enderecoBibliotecaria` (`idBibliotecaria_FK`, `rua`, `numero`, `bairro`)
    VALUES ( {$id}, '$rua', '$numero', '$bairro')");
	mysql_query($cadastro2);

	if( $cadastro == '' || $cadastro1 == '' || $cadastro2 == ''){
		echo "<script>alert('Houve um erro ao cadastrar!');
		location.href=\"/Banco/cadastroBibli.php\"</script>";
	}else{
		echo "<script>alert('Registro cadastrado com sucesso!');
		location.href=\"/Banco/cadastroBibli.php\"</script>";
	}

	#header("location:/Banco/cadastroBibli.php");
	?>