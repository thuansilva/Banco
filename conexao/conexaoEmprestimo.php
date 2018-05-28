<?php
	session_start();
	$bibliotecario = $_POST['bibliotecario'];
    $obra = $_POST['obra'];
	$usuario = $_POST['usuario'];
    $dataEmprestimo = $_POST['dataEmprestimo'];
    $dataDevolucao = $_POST['dataDevolucao'];

    $conexao = mysql_connect('localhost', 'root', '') or die (mysql_error());
    $select = mysql_select_db('sigb') or die (mysql_error());
    
    $cadastro = ("INSERT INTO `usuarios_emprestimo` (`idBibliotecaria_FK`, `idObras_FK`, 
        `idUsuario_FK, `dataDevolucao`, `dataEmprestimo`)
    VALUES('$bibliotecario', '$obra', '$usuario', '$dataEmprestimo', '$dataDevolucao')");
    mysql_query($cadastro);

    $id = mysql_insert_id();

	header("location:/Banco/emprestimo.php");
	?>