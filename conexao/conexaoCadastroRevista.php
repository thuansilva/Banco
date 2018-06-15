<?php
	session_start();
	$nome = $_POST['nome'];
	$anoPublicacao = $_POST['anoPublicacao'];
	$edicao = $_POST['edicao'];
	$dataCadastro= $_POST['dataCadastro'];
	$obs= $_POST['obs'];	
	$titulo= $_POST['titulo'];
    $editora = $_POST['editora'];

    $conexao = mysql_connect('localhost', 'root', '') or die (mysql_error());
    $select = mysql_select_db('sigb') or die (mysql_error());
    
    $cadastro = ("INSERT INTO `obras` (`dataCadastro`, `nomeObras`, `anoPublicacao`, `obs`)
    VALUES('$dataCadastro', '$nome', '$anoPublicacao', '$obs')");
    mysql_query($cadastro);

    $id = mysql_insert_id();

	$cadastro1 = ("INSERT INTO `revistas` (`idObras_FK`, `titulo`,`edicao`)
    VALUES({$id}, '$titulo', '$edicao')");
    mysql_query($cadastro1);

 	$cadastro2 = ("INSERT INTO `editora` (`nome`)
    VALUES ('$editora')");
    mysql_query($cadastro2);

    $identificador = mysql_insert_id();

    $cadastro3 = ("INSERT INTO `sigb`.`possui` (`idEditora_FK`, `idObras_FK`)
    VALUES ('$identificador', '$id')");
    mysql_query($cadastro3);

    if( $cadastro == '' || $cadastro1 == '' || $cadastro2 == '' || $cadastro3 == ''){
        echo "<script>alert('Houve um erro ao cadastrar!');
        location.href=\"/Banco/cadastroLR.php\"</script>";
    }else{
        echo "<script>alert('Registro cadastrado com sucesso!');
        location.href=\"/Banco/cadastroLR.php\"</script>";
    }

	#header("location:/Banco/cadastroLR.php");
?>